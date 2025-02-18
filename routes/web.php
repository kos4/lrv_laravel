<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(GroupController::class)->group(function () {
    Route::get('/groups', 'index')->name('groups.index');
    Route::post('/groups', 'store')->name('groups.store');
    Route::get('/groups/create', 'create')->name('groups.create');
    Route::get('/groups/{group}', 'show')->name('groups.show');
});

Route::controller(StudentController::class)->group(function () {
    Route::get('/groups/{group}/students/create', 'create')->name('students.create');
    Route::post('/groups/{group}/students', 'store')->name('students.store');
    Route::get('/groups/{group}/students/{student}', 'show')->name('students.show');
});
