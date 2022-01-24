<?php

class CreatedAtCriteria implements CriteriaInterface
{
    /**
     * @param \Phalcon\Mvc\Model\CriteriaInterface $query
     * @param QueryDto                             $queryDto
     */
    public function apply(\Phalcon\Mvc\Model\CriteriaInterface $query, QueryDto $queryDto): void
    {
        $query->andWhere('Contacts.created_at > :created_at_from:')
            ->andWhere('Contacts.created_at < :created_at_to:')
            ->bind(
                [
                'created_at_from' => $queryDto->search['created_at']['from'],
                'created_at_to' => $queryDto->search['created_at']['to'],
                ]
            );
    }

    /**
     * @param  \Phalcon\Mvc\Model\CriteriaInterface $query
     * @param  QueryDto                             $queryDto
     * @return bool
     */
    public function canApply(\Phalcon\Mvc\Model\CriteriaInterface $query, QueryDto $queryDto): bool
    {
        return !empty($queryDto->search['created_at']) &&
            is_array($queryDto->search['created_at']) &&
            !empty($queryDto->search['created_at']['from']) &&
            !empty($queryDto->search['created_at']['to']);
    }
}
