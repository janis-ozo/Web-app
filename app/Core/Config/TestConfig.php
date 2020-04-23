<?php

namespace App\Core\Config;

class TestConfig implements ConfigManager
{
    public function get(string $name):?string
    {
        var_dump('using TestConfig');

        $config = [
            'database.host' => 'localhost',
            'database.name' => 'webapp',
            'database.username' => 'janisozolkaja',
            'database.password' => 'default555',
        ];

        return $config[$name] ?? null;
        // 'database.host' => 'localhost'
    }
}