<?php

use App\Http\Controllers\EnvController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("mvp_features");

Route::resource("envs", EnvController::class);
