<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Tymon\JWTAuth\Facades\JWTAuth;

Route::middleware(['auth:api'])->get('/user', function (Request $request) {
    return JWTAuth::parseToken()->authenticate();
});

Route::controller(AuthController::class)->group(static function () {
    Route::post('user/register', 'register');  
    Route::post('user/login', 'login');  
    Route::post('user/logout', 'logout')->middleware('auth:api');  
    Route::post('user/refresh', 'refresh');  
    Route::get('user/me', 'me')->middleware('auth:api');  
});

Route::controller(CadChatController::class)->group(static function ()
{
    Route::get('chat', 'index');
    Route::get('chat/{id}', 'index');
    Route::delete('chat/{id}', 'destroy');
    Route::put('chat/message/{id}', 'update');
});

Route::controller(CadKnowledgeController::class)->group(static function ()
{
    Route::get('kb', 'index');
    Route::post('kb', 'store');
    Route::get('kb/{id}', 'index');
    Route::put('kb/{id}', 'update');
    Route::delete('kb{id}', 'destroy');

});

