<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\studentController;
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

//Route::get('/', function () {return view('welcome');});
//Route::get('/contact', function () {return view('contact');});
//Route::get('/contact','PagesController@contact');
Route::get('/contact',[PagesController::class,'contact']) ->name('contact');
Route::get('/profile',[PagesController::class,'myProfile'])->name('profile');
Route::get('/',[PagesController::class,'home'])->name('home');
//Students Routes
Route::get('/student/create',[studentController::class,'create'])->name('student.create');
Route::post('/student/create',[studentController::class,'createSubmit'])->name('student.create');
Route::get('/student/list',[studentController::class,'list'])->name('student.list');
Route::get('/student/edit/{id}',[studentController::class,'edit']);