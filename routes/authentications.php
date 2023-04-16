<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    route::post('login', AdminLoginController::class);
    Route::post('logout', AdminLogoutController::class)->middleware('api:auth', 'admins_only');
});
Route::group(['prefix' => 'client', 'namespace' => 'Client'], function () {
    route::post('login', ClientLoginController::class);
    route::post('login', ClientRegisterController::class);
    Route::post('logout', ClientLogoutController::class)->middleware('api:auth', 'clients_only');
});
