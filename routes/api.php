<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;


Route::get('wait', [TestController::class, 'wait']);
Route::get('not', [TestController::class, 'not_wait']);
