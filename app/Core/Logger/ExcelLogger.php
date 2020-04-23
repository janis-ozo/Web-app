<?php

namespace App\Core\Logger;

class ExcelLogger implements LoggerInterface
{
    public function info(string $message): void
    {
        var_dump('[INFO] ExcelLogger: ' . $message);
    }

    public function warning(string $message): void
    {
        var_dump('[WARN] ExcelLogger: ' . $message);
    }
}