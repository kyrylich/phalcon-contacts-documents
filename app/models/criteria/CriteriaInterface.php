<?php

interface CriteriaInterface
{
    /**
     * @param \Phalcon\Mvc\Model\CriteriaInterface $query
     *
     * @param QueryDto $queryDto
     */
    public function apply(\Phalcon\Mvc\Model\CriteriaInterface $query, QueryDto $queryDto): void;

    /**
     * @param \Phalcon\Mvc\Model\CriteriaInterface $query
     * @param QueryDto $queryDto
     *
     * @return bool
     */
    public function canApply(\Phalcon\Mvc\Model\CriteriaInterface $query, QueryDto $queryDto): bool;
}
