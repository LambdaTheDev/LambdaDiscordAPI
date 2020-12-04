<?php

namespace LDA;

require '../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use LDA\Models\Guild;
use LDA\Models\OfflineGuild;
use LDA\Modules\GuildManager;
use Psr\Http\Message\ResponseInterface;

class LambdaDiscordAPI
{
    private string $token;
    private array $gatewayIntents;
    private string $rootUrl;

    public GuildManager $guildManager;

    public function __construct(string $token, array $gatewayIntents, string $rootUrl = 'https://discord.com/api/v6')
    {
        //Note: right now only ALL INTENTS is supported. Will be fixed.
        $this->token = $token;
        $this->gatewayIntents = $gatewayIntents;
        $this->rootUrl = $rootUrl;
        $this->initialize();
    }

    public function sendRequest($method, $endpoint, $body = null) : ?ResponseInterface
    {
        $client = new Client(['exceptions' => false]);
        return $client->request($method, $this->rootUrl . $endpoint, [
            'body' => $body,
            'headers' =>
                [
                    'Authorization' => 'Bot ' . $this->token
                ],
            'http_errors' => false
        ]);
    }

    private function initialize()
    {
        $this->guildManager = new GuildManager($this);
    }
}