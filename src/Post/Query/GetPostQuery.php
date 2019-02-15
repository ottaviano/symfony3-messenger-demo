<?php

namespace App\Post\Query;

// Message class
class GetPostQuery
{
    private $limit;
    private $offset;

    public function __construct(int $offset = 0, int $limit = 10)
    {
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }
}
