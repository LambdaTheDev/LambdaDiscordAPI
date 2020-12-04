<?php


namespace LDA\Modules;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use LDA\LambdaDiscordAPI;
use LDA\Models\GuildMember;
use LDA\Models\Role;
use LDA\Models\User;

class GuildManager
{
    private LambdaDiscordAPI $api;

    public function __construct(LambdaDiscordAPI $api)
    {
        $this->api = $api;
    }

    public function getGuildRoles(string $guildId) : ?array
    {
        $request = $this->api->sendRequest('GET', '/guilds/' . $guildId . '/roles');

        if($request->getStatusCode() != 200) return null;

        $roles = array();

        foreach (json_decode($request->getBody()->getContents(), true) as $item)
        {
            $role = new Role($item['id'], $item['name'], $item['color'], $item['hoist'], $item['position'], $item['permissions'], $item['managed'], $item['mentionable']);
            array_push($roles, $role);
        }

        return $roles;

    }

    public function getGuildMember(string $guildId, string $userId) : ?GuildMember
    {
        $request = $this->api->sendRequest('GET', '/guilds/' . $guildId . '/members/' . $userId);

        if($request->getStatusCode() != 200) return null;

        $response = json_decode($request->getBody()->getContents(), true);

        $user = new User($response['user']['id'], $response['user']['username'], $response['user']['discriminator'], $response['user']['avatar']);
        return new GuildMember($user, $response['nick'], $response['roles'], $response['joined_at'], $response['premium_since'], $response['deaf'], $response['mute']);
    }
}