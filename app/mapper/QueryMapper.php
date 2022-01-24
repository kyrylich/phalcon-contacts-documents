<?php

use Phalcon\Http\Request;

class QueryMapper
{
    /**
     * @param Request $request
     *
     * @return QueryDto
     */
    public function mapRequestToQuery(Request $request): QueryDto
    {
        return new QueryDto(
            $request->getQuery('limit', null, 10),
            $request->getQuery('page', null, 0),
            $request->getQuery('search', null, []),
            $request->getQuery('order', null, [])
        );
    }
}
