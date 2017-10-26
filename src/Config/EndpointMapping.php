<?php

namespace ISAAC\Velocita\Composer\Config;

class EndpointMapping
{
    /** @var string */
    protected $remoteURL;

    /** @var string */
    protected $path;

    public static function fromArray(array $data): EndpointMapping
    {
        $mapping = new EndpointMapping();
        $mapping->remoteURL = $data['remoteURL'] ?? null;
        $mapping->path = $data['path'] ?? null;
        return $mapping;
    }

    public function getRemoteURL(): string
    {
        return $this->remoteURL;
    }

    public function getPath(): string
    {
        return $this->path;
    }
}