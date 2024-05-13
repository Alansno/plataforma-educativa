<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('sing-in');
})->name('login');

Route::get('/registrate', function () {
    return view('sing-up');
});

Route::controller(UserController::class)->group(function () {
    Route::post('/create', 'register');
    Route::post('/ingresar', 'singIn');
    Route::get('/logout', 'logout')->middleware('auth');
});

Route::get('/pene', function () {
    return 'pene';
})->middleware('auth');

Route::controller(CourseController::class)->group(function () {
    Route::get('/menu', 'getCoursesMenu')->middleware('auth');
    Route::get('course/{id}', 'getCourseInfo')->name('course')->middleware('auth');
})->middleware('auth');

Route::controller(QuizController::class)->group(function () {
    Route::get('course-questions/{id}', 'showQuestion')->name('course-questions')->middleware('auth');
    Route::post('course-question-next', 'nextQuestion')->name('course-question-next')->middleware('auth');
    Route::get('pdf-curso/{id}', 'generateCertificate')->name('pdf-curso')->middleware('auth');
})->middleware('auth');

