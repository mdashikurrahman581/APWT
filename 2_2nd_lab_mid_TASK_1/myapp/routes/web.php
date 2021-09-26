<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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