<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PetCategoryController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\MedicalRecordController;

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

Auth::routes();


// Privadas Autenticacion
Route::resource('clients', ClientController::class)->names('clients');

Route::resource('cities', CityController::class)->except('show')->names('cities');

Route::resource('pets', PetController::class)->names('pets');

Route::resource('pet-categories', PetCategoryController::class)->except('show')->names('pet-categories');

Route::resource('medical-records', MedicalRecordController::class)->names('medical-records');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
