<?php


namespace LDA\Models;


class User
{
    public string $id;
    public string $username;
    public string $discriminator;
    public ?string $avatar;

    /**
     * User constructor.
     * @param string $id
     * @param string $username
     * @param string $discriminator
     * @param string|null $avatar
     */
    public function __construct(string $id, string $username, string $discriminator, ?string $avatar)
    {
        $this->id = $id;
        $this->username = $username;
        $this->discriminator = $discriminator;
        $this->avatar = $avatar;
    }
}