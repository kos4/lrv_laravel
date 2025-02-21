<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/tokens/create', [App\Http\Controllers\ApiTokenController::class, 'createToken'])->name('createToken');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    })->name('user');

    Route::apiResource('/car', App\Http\Controllers\CarController::class);
});
