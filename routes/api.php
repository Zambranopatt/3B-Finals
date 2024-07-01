<?php

use App\Http\Controllers\StudentController;

Route::get('students', [StudentController::class, 'index']);
Route::post('students', [StudentController::class, 'store']);
Route::get('students/{id}', [StudentController::class, 'show']);
Route::patch('students/{id}', [StudentController::class, 'update']);

use App\Http\Controllers\SubjectController;

Route::get('students/{id}/subjects', [SubjectController::class, 'index']);
Route::post('students/{id}/subjects', [SubjectController::class, 'store']);
Route::get('students/{id}/subjects/{subject_id}', [SubjectController::class, 'show']);
Route::patch('students/{id}/subjects/{subject_id}', [SubjectController::class, 'update']);
