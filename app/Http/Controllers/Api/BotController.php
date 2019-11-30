<?php

namespace App\Http\Controllers\Api;

use App\Conversations\CreateChildConversation;
use App\Conversations\FallbackConversation;
use Illuminate\Http\Request;
use \BotMan\BotMan\BotMan;
use App\Http\Controllers\Controller;

use App\Services\BotService;

class BotController extends Controller
{
    public function index(Request $request)
    {
        $botService = new BotService($request);
        $botman = $botService->getBotman();

        $botman->hears('oi', function (BotMan $botmanR) use ($botService) {
            $botmanR->reply('Hi');
        });

        // Give the bot something to listen for.
        $botman->hears('START_CHILD_CREATION', function (BotMan $botmanR) use ($botService) {
            $botmanR->startConversation(new CreateChildConversation());
        });

        $botman->fallback(function(BotMan $bot) use ($botService) {
            $bot->typesAndWaits(2);
            $bot->startConversation(new FallbackConversation());
        });
        // Start listening
        $botman->listen();
    }

}
