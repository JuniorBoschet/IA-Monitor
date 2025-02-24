<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadChatController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



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

