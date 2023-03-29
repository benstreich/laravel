<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use Database\Factories\ApplicatioFactory;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;


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
Route::get('/', [EventController::class, 'list']);

Route::get('/event/{id}', [EventController::class, 'show']);

Route::post('/event/{id}', [ApplicationController::class, 'create']);

Route::get('/event/{id}/applications', [ApplicationController::class, 'list']);

Route::get('/login', [LoginController::class, 'login']);

Route::post('login-user', [LoginController::class, 'loginUser'])->name('login-user');


Route::get('/events_logedin', [EventController::class, 'listadmin']);


Route::get('/create_event', function (){
   return view('create_event');
});

Route::post('/create_event', [EventController::class , 'create']);




Route::get('register', [RegistrationController::class, 'register']);
Route::post('register-user', [RegistrationController::class, 'registerUser'])->name('register-user');



