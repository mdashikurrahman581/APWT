<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;

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

//Route::get('/', function () { return view('welcome');});
Route::get('/show',[crudController::class,'showData'])->name('show');
Route::get('/add',[crudController::class,'addData'])->name('add');
Route::post('/store',[crudController::class,'storeData'])->name('store');
//Route::get('/student/create',[studentController::class,'create'])->name('student.create');
Route::get('/edit/{id}',[crudController::class,'editData'])->name('edit');
Route::post('/update/{id}',[crudController::class,'updateData'])->name('update');
Route::get('/delete/{id}',[crudController::class,'deleteData'])->name('delete');