<?php

namespace App\Controller;

use App\SayHello\Command\SayHelloCommand;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/say-hello")
 */
class SayHelloController extends AbstractController
{
    public function __invoke(MessageBusInterface $bus): Response
    {
        $bus->dispatch(new SayHelloCommand('world@email.dev'));

        return new Response();
    }
}
