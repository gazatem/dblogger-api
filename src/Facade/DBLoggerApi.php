<?php namespace Gazatem\DBLoggerApi\Facade;

use Illuminate\Support\Facades\Facade;

class DBLoggerApi extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'dblogger-api';
    }

}
