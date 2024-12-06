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

//Главная
Route::get('/', function() {
    return view('index');
})->name('index');

//Об университете
Route::get('/about-university', function () {
    return view('pages.about-university');
})->name('about.university');

//Расписание занятий
Route::get('/schedule', function() {
    return view('page.schedule');
})->name('schedule');

//Заказ документов
Route::get('/student-document-order-requests', function () {
    return view('pages.student-document-order-requests');
})->name('student.document.order.requests');

//График пересдач академических задолженностей
Route::get('/academic-retake-schedule-list', function () {
    return view('pages.academic-retake-schedule-list');
})->name('academic.retake.schedule.list');

//Успеваемость
Route::get('/student-grades', function () {
    return view('pages.student-grades');
})->name('student.grades');

//Часто задаваемые вопросы
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');




//Расписание занятий
Route::get('/SelectStudentOrTeacher', function () {
    return view('pages.SelectStudentOrTeacher');
})->name('SelectStudentOrTeacher');

Route::get('/schedule/{SoT}', function ($SoT) {
    return view('pages.schedule',['SoT'=> $SoT]);
})->name('schedule1');


Route::get('/faq/{val}', function ($val) {
    return view('pages.faq1',['val'=> $val]);
})->name('faq.item');
