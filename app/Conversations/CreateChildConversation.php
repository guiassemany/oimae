<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\IncomingMessage;

class CreateChildConversation extends Conversation
{
    public function run()
    {
        $this->say('Desculpa, não consegui entender o que disse.');
    }
}
