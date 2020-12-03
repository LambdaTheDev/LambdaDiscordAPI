<?php


namespace LDA\Models;


class GuildMember
{
    public User $user;
    public ?string $nick;
    public array $roles;
    public string $joined_at;
    public ?string $premium_since;
    public bool $deaf;
    public bool $mute;

    /**
     * GuildMember constructor.
     * @param User $user
     * @param string|null $nick
     * @param array $roles
     * @param string $joined_at
     * @param string|null $premium_since
     * @param bool $deaf
     * @param bool $mute
     */
    public function __construct(User $user, ?string $nick, array $roles, string $joined_at, ?string $premium_since, bool $deaf, bool $mute)
    {
        $this->user = $user;
        $this->nick = $nick;
        $this->roles = $roles;
        $this->joined_at = $joined_at;
        $this->premium_since = $premium_since;
        $this->deaf = $deaf;
        $this->mute = $mute;
    }


}