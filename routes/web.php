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
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();
// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');
Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
Route::get('/business','App\Http\Controllers\BusinessController@index')->name('business');
Route::get('/addcourse', 'App\Http\Controllers\UserController@addCourse')->name('addcourse');
Route::get('/instructorcourses', 'App\Http\Controllers\UserController@instructorCourses')->name('instructorcourses');
Route::get('/instructordashboard', 'App\Http\Controllers\UserController@instructorDashboard')->name('instructordashboard');
Route::get('/analytics', 'App\Http\Controllers\UserController@analytics')->name('analytics');
Route::get('/addvideos', 'App\Http\Controllers\UserController@addVideos')->name('addvideos');
Route::get('/addcover', 'App\Http\Controllers\UserController@addCover')->name('addcover');
Route::get('/viewcourse', 'App\Http\Controllers\UserController@viewCourse')->name('viewcourse');
Route::get('/coursedetail', 'App\Http\Controllers\UserController@courseDetail')->name('coursedetail');
Route::get('/certificate', 'App\Http\Controllers\UserController@cert')->name('certificate');
Route::get('/badges', 'App\Http\Controllers\UserController@badges')->name('badges');
Route::get('/skills', 'App\Http\Controllers\UserController@skills')->name('skills');
Route::get('/earnings', 'App\Http\Controllers\UserController@earnings')->name('earnings');
Route::get('/review', 'App\Http\Controllers\UserController@review')->name('review');
Route::get('/notification', 'App\Http\Controllers\UserController@notification')->name('notification');
Route::get('/myaccount', 'App\Http\Controllers\UserController@myaccount')->name('myaccount');
Route::get('/coursepurches', 'App\Http\Controllers\UserController@coursepurch')->name('coursepurches');
Route::get('/deleteaccount', 'App\Http\Controllers\UserController@deleteacc')->name('deleteaccount');
Route::get('/createcert', 'App\Http\Controllers\UserController@createcert')->name('createcert');
Route::get('/category', 'App\Http\Controllers\UserController@category')->name('category');
Route::get('/accsetting', 'App\Http\Controllers\UserController@accSetting')->name('accsetting');
Route::get('/lcontent', 'App\Http\Controllers\UserController@lcontent')->name('lcontent');

// Route::get('/user', 'UserController@index')->name('user')->middleware('user');
// Route::get('/business', 'BusinessController@index')->name('business')->middleware('business');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
