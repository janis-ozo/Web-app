<?php

namespace App\Core\Config;

class FileConfig implements ConfigManager
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function get(string $name): ?string
    {
        var_dump('using FileConfig');
        return $this->config[$name] ?? null;
        // 'database.host' => 'localhost'
    }
}