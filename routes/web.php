<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\librarianController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\mainController;
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
//for the main page
Route::get('/', function () {
    return view('login');
});

Route::post('/save',[mainController::class, 'save'])->name('save');
Route::post('/check',[mainController::class, 'check'])->name('check');
Route::get('/logout',[mainController::class, 'logout'])->name('logout');
Route::get('/Alarbooks/search',[bookController::class,'search'])->name('search');
Route::group(['middleware'=>['AuthCheck']], function()
{
    Route::resource('/Alarbooks',bookController::class);
    Route::get('/dashboard',[mainController::class, 'dashboard'])->name('dashboard');
    Route::get('/login',[mainController::class, 'login'])->name('login');
    Route::get('/register',[mainController::class, 'register'])->name('register');
});

