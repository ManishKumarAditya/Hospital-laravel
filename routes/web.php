<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[DoctorController::class,"index"])->name('index');
Route::get('/apply',[DoctorController::class,"apply"])->name('apply');
Route::post('/apply',[DoctorController::class,"applyStore"])->name('applyStore');

Route::get('/patient_login',[PatientController::class,"applyPatient"])->name('applyPatient');
Route::post('/patient_login',[PatientController::class,"applyInsert"])->name('applyInsert');

Route::prefix('admin')->group(function(){

    Route::get('/dashboard',[AdminController::class,"dashboard"])->name('admin.dashboard');
    Route::get('/doctors',[AdminController::class,"doctors"])->name('doctors');
    Route::get('/patients',[AdminController::class,"patients"])->name('patients');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');