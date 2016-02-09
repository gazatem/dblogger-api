<?php

Route::group(
    [
        'prefix' => Config::get("dblogger-api.route-prefix"),
        'middleware' => ['auth:api'],
    ],
    function () {
        Route::post('/', ['log' => 'DbLoggerController@index']);
    }

);