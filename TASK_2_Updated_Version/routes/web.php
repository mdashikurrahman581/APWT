<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\teacherController;
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
Route::post('/student/edit',[studentController::class,'editSubmit'])->name('student.edit');


//Teachers Routes
Route::get('/teacher/create',[teacherController::class,'create'])->name('teacher.create');
Route::post('/teacher/create',[teacherController::class,'createSubmit'])->name('teacher.create');
Route::get('/teacher/list',[teacherController::class,'list'])->name('teacher.list');
//Route::get('/teacher/edit/{id}',[teacherController::class,'edit']);