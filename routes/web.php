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

Route::get('/', function() {
    return view('index');
})->name('index');

//Расписание занятий
Route::get('/SelectStudentOrTeacher', function () {
    return view('pages.SelectStudentOrTeacher');
})->name('SelectStudentOrTeacher');


Route::get('/schedule/{SoT}', function ($SoT) {
    return view('pages.schedule',['SoT'=> $SoT]);
})->name('schedule');


//Заказ документов
Route::get('/student-document-order-requests', function () {
    return view('pages.student-document-order-requests');
})->name('student.document.order.requests');

//График пересдач
Route::get('/retake-schedule', function () {
    return view('pages.retake-schedule');
})->name('retake.schedule');

//Успеваемость
Route::get('/student-grades', function () {
    return view('pages.student_grades');
})->name('student.grades');

//Об университете
Route::get('/about-university', function () {
    return view('pages.about-university');
})->name('about.university');

//Часто задаваемые вопросы
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/faq/{val}', function ($val) {
    return view('pages.faq1',['val'=> $val]);
})->name('faq.item');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
