<?php

namespace App\Core\Logger;

class SlackLogger implements LoggerInterface
{
    public function info(string $message): void
    {
        var_dump('[INFO] SlackLogger: ' . $message);
    }

    public function warning(string $message): void
    {
        var_dump('[WARN] SlackLogger: ' . $message);
    }
}