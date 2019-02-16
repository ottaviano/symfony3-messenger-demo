<?php

namespace App\Controller;

use App\SayHello\Command\SayHelloCommand;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\SerializerStamp;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/say-hello")
 */
class SayHelloController extends AbstractController
{
    public function __invoke(MessageBusInterface $bus): Response
    {
        $bus->dispatch(
            new Envelope(
                new SayHelloCommand('world@email.dev'),
                new SerializerStamp(['groups' => ['public']])
            )
        );

        return $this->render('base.html.twig');
    }
}
