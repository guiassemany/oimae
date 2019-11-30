<?php
namespace App\Services;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\Drivers\Facebook\FacebookDriver;
use BotMan\BotMan\Cache\LaravelCache;
use BotMan\Drivers\Web\WebDriver;
use Illuminate\Http\Request;
use BotMan\BotMan\Cache\RedisCache;

class BotService
{
    /*
     * Botman Instance
     */
    protected $botman;

    /*
     * Recipient = Page ID
     */
    public $recipientId;

    public $lead;

    protected $config = [
        'conversation_cache_time' => 40, // Cache settings
        'user_cache_time' => 30, // Cache settings
        'facebook' => [
            'token' => '', // Set on construct
            'app_secret' => '', // Set on construct
            'verification' => '', //Set on construct
            'start_button_payload' => 'START_LEAD_CHAT'
        ]
    ];


    /**
     * BotService constructor.
     * @param $data
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct(Request $data)
    {
        if ($data->input('driver') === 'web') {
            DriverManager::loadDriver(WebDriver::class);
        }

        $this->botman = BotManFactory::create($this->getConfig(), new RedisCache('127.0.0.1', 6379), app()->make('request')); // Bring in the request!
    }
    /**
     * @return BotMan
     */
    public function getBotMan()
    {
        return $this->botman;
    }
}
