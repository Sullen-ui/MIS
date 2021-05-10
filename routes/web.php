<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');


//Запись пациентов на приём
Route::get('/timetable', [PagesController::class, 'TimetableShow'])->name('Timetable');

//База пациентов
Route::get('/patient/base', [PagesController::class, 'BasePatientShow'])->name('BasePatient');

//Карта пациента
Route::get('/patient/{$id}', [PagesController::class, 'PatientCart'])->name('PatientCart');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
