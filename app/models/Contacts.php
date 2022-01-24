<?php

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\SoftDelete;
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Mvc\Model\ResultsetInterface;

class Contacts extends Model
{
    /**
     * @var integer
     */
    public int $id;

    /**
     * @var string
     */
    public string $first_name;

    /**
     * @var string
     */
    public string $last_name;

    /**
     * @var boolean
     */
    public bool $is_deleted;

    /**
     * @var string
     */
    public string $created_at;

    public function initialize(): void
    {
        $this->setSchema("public");
        $this->setSource("contacts");
        $this->hasMany('id', 'Documents', 'contact_id', ['alias' => 'Documents']);
        $this->hasMany('id', 'ContactsCustomFields', 'contact_id', ['alias' => 'ContactsCustomFields']);

        $this->addBehavior(
            new Timestampable(
                [
                    'beforeCreate' => [
                        'field'  => 'created_at',
                        'format' => 'Y-m-d H:i:s',
                    ],
                ]
            )
        );

        $this->addBehavior(
            new SoftDelete(
                [
                    'field' => 'is_deleted',
                    'value' => true,
                ]
            )
        );
    }

    /**
     * @return ResultsetInterface
     */
    public static function findWithLastDocument(): ResultsetInterface
    {
        return self::query()
            ->columns(
                [
                'Contacts.id AS contact_id', 'Contacts.first_name', 'Contacts.last_name',
                'Documents.id AS document_id', 'Documents.number', 'Documents.created_at',
                ]
            )
            ->distinct('Contacts.id')
            ->innerJoin('Documents', 'Documents.contact_id = Contacts.id')
            ->where('Documents.is_deleted = false')
            ->andWhere('Contacts.is_deleted = false')
            ->orderBy('Documents.created_at DESC')
            ->execute();
    }

    /**
     * @param QueryDto $queryDto
     *
     * @return ResultsetInterface
     */
    public static function findWithCustomFields(QueryDto $queryDto): ResultsetInterface
    {
        $qb = self::query();

        $qb->where('Contacts.is_deleted = false');

        $offset = ($queryDto->page <= 1 ? 0 : $queryDto->page) * $queryDto->limit;

        $qb->limit($queryDto->limit, $offset);

        $qb->leftJoin(
            'ContactsCustomFields',
            'ContactsCustomFields.contact_id = Contacts.id',
        );
        $qb->leftJoin(
            'CustomFields',
            'ContactsCustomFields.custom_field_id = CustomFields.id'
        );

        foreach (static::getCriterias() as $criteria) {
            if ($criteria->canApply($qb, $queryDto)) {
                $criteria->apply($qb, $queryDto);
            }
        }

        return $qb->execute();
    }

    /**
     * @return array<CriteriaInterface>
     */
    protected static function getCriterias(): array
    {
        return [
            new FullNameCriteria(),
            new CreatedAtCriteria(),
            new CustomFieldsCriteria(),
        ];
    }
}
