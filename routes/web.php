<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PatientsController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () { return view('home'); });

    //Запись пациентов на приём
    Route::get('/timetable', [PagesController::class, 'TimetableShow'])->name('Timetable');

    //База пациентов
    Route::get('/patient/base', [PagesController::class, 'BasePatientShow'])->name('BasePatient');

    //Карта пациента
    // Route::get('/emh/{id}', [PagesController::class, 'EmhCart'])->name('PatientCart');

    //Страница пациента
    Route::get('/patient/{id}', [PagesController::class, 'Patient'])->name('Patient');
     //Обновление данных пациента
     Route::post('/patient/{id}', [PatientsController::class, 'PatientUpdate']);

    //Админ панель
    Route::post('/patient/Admin', [AdminController::class, 'Admin'])->name('Admin');
});
   




Auth::routes();


