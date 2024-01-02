<?php

use App\Http\Controllers\EndController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CustomerController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [FormController::class, 'index'])->name('home');
Route::post('/add', [FormController::class, 'store'])->name('add_form');
//Route::get('/statistical', [\App\Http\Controllers\StatisticalController::class, 'index'])->name('statistical');
Route::get('/thank', [EndController::class, 'index'])->name('thank');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/statistical', [\App\Http\Controllers\StatisticalController::class, 'index'])->name('statistical');
    Route::get('/show_form/{id}', [FormController::class, 'show'])->name('show_form');
     Route::get('/show_customer', [CustomerController::class, 'index'])->name('show_customer');

});
