<?php

namespace App\SayHello\Command;

use Symfony\Component\Serializer\Annotation\Groups;

class SayHelloCommand
{
    /**
     * @Groups({"public"})
     */
    private $recipient;

    private $secret = 'secret';

    public function __construct(string $recipient)
    {
        $this->recipient = $recipient;
    }

    public function getRecipient(): string
    {
        return $this->recipient;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }
}
