<?php

namespace App\Post\Handler;

use App\Post\Query\GetPostQuery;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class GetPostHandler implements MessageHandlerInterface
{
    public function __invoke(GetPostQuery $query): array
    {
        return array_fill(
            $query->getOffset(),
            $query->getLimit(),
            [
                'title' => 'Post title',
                'date' => new \DateTime(),
            ]
        );
    }
}
