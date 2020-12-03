<?php


namespace LDA\Models;


class OfflineGuild
{
    public string $id;
    public bool $unavailable;

    /**
     * OfflineGuild constructor.
     * @param string $id
     * @param bool $unavailable
     */
    public function __construct(string $id, bool $unavailable)
    {
        $this->id = $id;
        $this->unavailable = $unavailable;
    }


}