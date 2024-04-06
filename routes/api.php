<?php

use App\Http\Controllers\API\Google\SingInController;
use App\Http\Controllers\API\V1\GetEnvController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::group(["env"], function () {
    Route::get("/get-env/{env}", [GetEnvController::class, "getEnv"]);
});

Route::post("google/sing-in", [SingInController::class, "handle"])
    ->name("api.google.sing-in");
