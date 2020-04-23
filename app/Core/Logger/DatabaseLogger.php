<?php

namespace App\Core\Logger;

class DatabaseLogger implements LoggerInterface
{
    public function info(string $message): void
    {
        var_dump('[INFO] DatabaseLogger: ' . $message);
    }

    public function warning(string $message): void
    {
        var_dump('[WARN] DatabaseLogger: ' . $message);
    }
}