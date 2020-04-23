<?php

use App\Core\Config\ConfigManager;
use App\Core\Database;
use App\Core\Logger\DatabaseLogger;
use App\Core\Logger\ExcelLogger;
use App\Core\Logger\FileLogger;
use App\Core\Logger\LoggerInterface;
use Medoo\Medoo;

function database(): Medoo
{
    return Database::getInstance()->connection();
}

function config(): ConfigManager
{
    return new \App\Core\Config\TestConfig();
}

function logger(): LoggerInterface
{
    return new \App\Core\Logger\SlackLogger();
}