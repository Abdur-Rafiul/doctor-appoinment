<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'Home'])->name('appointment.home');
Route::post('/department', [HomeController::class, 'department']);
Route::post('/doctors', [HomeController::class, 'doctor']);
Route::post('/search', [HomeController::class, 'AppointmentSearch'])->name('appointment.search');


Route::resource('/doctor', DoctorController::class);
Route::resource('/appointment', AppointmentController::class);
