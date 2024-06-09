<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/student', [StudentController::class, 'getAllStudent']);
Route::post('/student', [StudentController::class, 'addStudent']);