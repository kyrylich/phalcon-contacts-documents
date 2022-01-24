<?php

class QueryDto
{
    public int $limit = 10;

    public int $page = 0;

    public array $search = [];

    public array $order = [];

    /**
     * @param int $limit
     * @param int $page
     * @param array $search
     * @param array $order
     */
    public function __construct(int $limit, int $page, array $search, array $order)
    {
        $this->limit = $limit;
        $this->page = $page;
        $this->search = $search;
        $this->order = $order;
    }
}
