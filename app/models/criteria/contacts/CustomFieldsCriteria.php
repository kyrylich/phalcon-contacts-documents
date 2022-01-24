<?php

class CustomFieldsCriteria implements CriteriaInterface
{
    /**
     * @param \Phalcon\Mvc\Model\CriteriaInterface $query
     * @param QueryDto $queryDto
     */
    public function apply(\Phalcon\Mvc\Model\CriteriaInterface $query, QueryDto $queryDto): void
    {
        foreach ($queryDto->search['custom_fields'] as $key => $value) {
            $query
                ->andWhere('CustomFields.name = :name:')
                ->andWhere('CAST(ContactsCustomFields.data AS TEXT) LIKE :data:')
                ->bind(
                    [
                        'name' => $key,
                        'data' => '%' . $value . '%',
                    ]
                );
        }
    }

    /**
     * @param \Phalcon\Mvc\Model\CriteriaInterface $query
     * @param QueryDto $queryDto
     *
     * @return bool
     */
    public function canApply(\Phalcon\Mvc\Model\CriteriaInterface $query, QueryDto $queryDto): bool
    {
        return !empty($queryDto->search['custom_fields']) &&
            is_array($queryDto->search['custom_fields']);
    }
}
