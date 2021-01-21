<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Models\Doctor;
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
Route::get('/',function(){
return view('homepage.index',["data"=>Doctor::all()]);
})->name('index');

//Route::get('/',[DoctorController::class,"index"])->name('index');
Route::get('/apply',[DoctorController::class,"apply"])->name('apply');
Route::post('/apply',[DoctorController::class,"applyStore"])->name('applyStore');
Route::get('/Profile',[DoctorController::class,"profile"])->name('profile');

Route::get('/patient_apply/{id}',[PatientController::class,"applyPatient"])->name('applyPatient');
Route::post('/patient_apply/{id}',[PatientController::class,"applyInsert"])->name('applyInsert');
Route::get('/Patientprofile',[PatientController::class,"profileP"])->name('Patientprofile');

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[AdminController::class,"dashboard"])->name('admin.dashboard');
    Route::get('/doctors',[AdminController::class,"doctors"])->name('doctors');
    Route::get('/patients',[AdminController::class,"patients"])->name('patients');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
