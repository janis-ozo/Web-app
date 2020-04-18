<?php

use App\Core\Database;
use Medoo\Medoo;

function database(): Medoo
{
    return Database::getInstance()->connection();
}