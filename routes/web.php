<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


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
Route::get('/',[StudentController::class,'viewstudents']);


Route::view('register','auth.register')->middleware('guest');
Route::post('store',[RegisterController::class,'store']);
//Route::view('home','home')->middleware('auth');
Route::get('/home',[Usercontroller::class,'getuser'])->name('getuser');

Route::view('/login','auth.login')->middleware('guest')->name('login');
Route::post('authenticate',[LoginController::class,'authenticate']);
Route::get('logout',[LoginController::class,'logout']);

Route::get('/addstudents',[StudentController::class,'addstudents']);
Route::post('/studentdetail',[StudentController::class,'studentdetail']);

Route::get('/home',[StudentController::class,'viewdetail']);
Route::get('/{id}/view',[StudentController::class,'view']);

Route::get('/{id}/edit', [StudentController::class, 'edit']);
Route::put('/{id}/editemp', [StudentController::class, 'updateemp']);
Route::get('/{id}/delete', [StudentController::class, 'deleteemp']);
