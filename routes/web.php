<?php

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
});
Route::get('/SelectStudentOrTeacher', function () {
    return view('SelectStudentOrTeacher');
});
Route::get('/class-schedule', function () {
    return view('class-schedule');
});
Route::get('/order-documen', function () {
    return view('order-documen');
});
Route::get('/student-grades', function () {
    return view('pages.student-grades');
})->name('student.grades');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
