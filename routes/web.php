<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/student', [StudentController::class, 'getAllStudent']);
Route::post('/student', [StudentController::class, 'addStudent']);
Route::put('/student/edit/{id', [StudentController::class, 'editStudent']);
Route::delete('/student/delete/{id', [StudentController::class, 'deleteStudent']);