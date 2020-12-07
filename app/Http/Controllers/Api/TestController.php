<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function wait()
    {
        error_log("Comming...");
        sleep(40);
        error_log("Complete wait...");
        return response()->json([
            'success' => true,
        ]);
    }

    public function not_wait()
    {
        error_log("Complete not wait...");
        return response()->json([
            'success' => true,
        ]);
    }
}
