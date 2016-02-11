<?php

namespace Gazatem\DBLoggerApi\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use Gazatem\DBLogger\Model\Log as Logger;
use Illuminate\Http\Request;

class DBLoggerController extends Controller
{
    public function index(Request $request)
    {
        Logger::create(
            [
                'message' => $request->message,
                'context' => json_encode($request->data),
                'level' => $request->level,
                'level_name' => $request->level_name
            ]);
		return \Response::make(null, 200);
    }
}
