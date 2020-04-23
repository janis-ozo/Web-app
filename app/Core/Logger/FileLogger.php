<?php

namespace App\Core\Logger;

class FileLogger implements LoggerInterface
{
    public function info(string $message): void
    {
        var_dump('[INFO] FileLogger: ' . $message);
    }

    public function warning(string $message): void
    {
        var_dump('[WARN] FileLogger: ' . $message);
    }
}