<?php

use App\Http\Controllers\API\V1\GetEnvController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\EnvController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("mvp_features");

Route::resource("envs", EnvController::class);

Route::get("/api/v1/get-env/{env}", [GetEnvController::class, "getEnv"]);


# Authentication
Route::get("/login", [LoginController::class, "loginShow"])->name("login.form.main");
Route::post("/login", [LoginController::class, "login"])->name("login");


