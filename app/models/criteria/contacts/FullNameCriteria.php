<?php


class FullNameCriteria implements CriteriaInterface
{
    public function apply(\Phalcon\Mvc\Model\CriteriaInterface $query, QueryDto $queryDto): void
    {
        $query
            ->where('Contacts.first_name LIKE :full_name:')
            ->orWhere('Contacts.last_name LIKE :full_name:')
            ->bind(
                [
                'full_name' => '%' . $queryDto->search['full_name'] . '%',
                ]
            );
    }

    /**
     * @param \Phalcon\Mvc\Model\CriteriaInterface $query
     * @param QueryDto $queryDto
     *
     * @return bool
     */
    public function canApply(\Phalcon\Mvc\Model\CriteriaInterface $query, QueryDto $queryDto): bool
    {
        return !empty($queryDto->search['full_name']);
    }
}
