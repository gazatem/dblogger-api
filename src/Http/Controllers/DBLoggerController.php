<?php

namespace Gazatem\DBLoggerGui\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Http\Request;

class DBLoggerController extends Controller
{
    public function index(Request $request)
    {
        Stat::create(
            [
                'message' => $request->message,
                'context' => $request->data,
                'level' => $request->level,
                'level_name' => $request->level_name
            ]);
        return \Response::make('message', 200);
    }
}