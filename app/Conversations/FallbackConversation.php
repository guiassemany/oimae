<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\IncomingMessage;

class FallbackConversation extends Conversation
{
    public function stopsConversation(IncomingMessage $message)
    {
        return true;
    }

    public function run()
    {
        $this->say('Desculpa, não consegui entender o que disse.');
    }
}
