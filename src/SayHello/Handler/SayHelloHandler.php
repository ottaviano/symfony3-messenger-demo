<?php

namespace App\SayHello\Handler;

use App\SayHello\Command\SayHelloCommand;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class SayHelloHandler implements MessageHandlerInterface
{
    public function __invoke(SayHelloCommand $command): void
    {
        echo sprintf('Send mail to %s'.PHP_EOL, $command->getRecipient());

        /*
          $this->mailer->send(
            new Mail($command->getRecipient())
          );
        */
    }
}
