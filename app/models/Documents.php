<?php

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\SoftDelete;
use Phalcon\Mvc\Model\Behavior\Timestampable;

class Documents extends Model
{
    /**
     * @var integer
     */
    public int $id;

    /**
     * @var string
     */
    public string $number;

    /**
     * @var boolean
     */
    public bool $is_deleted;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var integer
     */
    public int $contact_id;

    /**
     * @return void
     */
    public function initialize(): void
    {
        $this->setSchema("public");
        $this->setSource("documents");
        $this->belongsTo('contact_id', '\Contacts', 'id', ['alias' => 'Contacts']);

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
}
