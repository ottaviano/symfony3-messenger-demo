<?php

namespace App\Controller;

use App\Post\Query\GetPostQuery;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/posts/list")
 */
class PostListController extends AbstractController
{
    public function __invoke(MessageBusInterface $bus): Response
    {
        $envelop = $bus->dispatch(new GetPostQuery(0, 5));

        /** @var HandledStamp $stamp */
        if ($stamp = $envelop->last(HandledStamp::class)) {
            $posts = $stamp->getResult();
        }

        return $this->render(
            'post.html.twig',
            ['posts' => $posts ?? []]
        );
    }
}
