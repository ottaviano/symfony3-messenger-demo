<?php

namespace App\SayHello\Command;

class SayHelloCommand
{
    private $recipient;

    public function __construct(string $recipient)
    {
        $this->recipient = $recipient;
    }

    public function getRecipient(): string
    {
        return $this->recipient;
    }
}
