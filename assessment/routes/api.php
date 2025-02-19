<?php

use App\Http\Controllers\ScreenOneController;
use App\Http\Controllers\ScreenThreeController;
use App\Http\Controllers\ScreenTwoController;
use Illuminate\Support\Facades\Route;

Route::get('/screen-one', [ScreenOneController::class, 'index']);
Route::get('/screen-two', [ScreenTwoController::class, 'index']);
Route::get('/screen-three', [ScreenThreeController::class, 'index']);
