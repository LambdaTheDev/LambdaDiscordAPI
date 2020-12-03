<?php


namespace LDA\Models;


class Role
{
    public string $id;
    public string $name;
    public int $color;
    public bool $hoist;
    public int $position;
    public string $permissions;
    public bool $managed;
    public bool $mentionable;

    /**
     * Role constructor.
     * @param string $id
     * @param string $name
     * @param int $color
     * @param bool $hoist
     * @param int $position
     * @param string $permissions
     * @param bool $managed
     * @param bool $mentionable
     */
    public function __construct(string $id, string $name, int $color, bool $hoist, int $position, string $permissions, bool $managed, bool $mentionable)
    {
        $this->id = $id;
        $this->name = $name;
        $this->color = $color;
        $this->hoist = $hoist;
        $this->position = $position;
        $this->permissions = $permissions;
        $this->managed = $managed;
        $this->mentionable = $mentionable;
    }


}