<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessController;
use Illuminate\Support\Facades\Auth;




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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');
Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
Route::get('/business','App\Http\Controllers\BusinessController@index')->name('business');

// Route::get('/user', 'UserController@index')->name('user')->middleware('user');
// Route::get('/business', 'BusinessController@index')->name('business')->middleware('business');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
