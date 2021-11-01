<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\Course;
use App\Models\Category;
use App\Models\Mediacover;
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
Auth::routes();
Route::get('/', function () {
    $coz=Course::all();
    $cat=Category::all();
   
    return view('welcome')->with('coz',$coz)
    ->with('cat',$cat);
})->middleware('guest');

Route::get('/welcome', function () {
      $coz=Course::all();
      $cat=Category::all();
    return view('welcome')->with('coz',$coz)
    ->with('cat',$cat);
})->middleware('guest')->name('welcome');

// Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin');
Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user');
Route::get('/business','App\Http\Controllers\BusinessController@index')->name('business');

//=================add course======
Route::get('/addcourse', 'App\Http\Controllers\UserController@addCourse')->name('addcourse');
Route::get('/editcourse/{id}', 'App\Http\Controllers\UserController@editCourse')->name('editcourse');
Route::post('/addcoursepost', 'App\Http\Controllers\UserController@postaddCourse')->name('addcoursepost');
Route::post('/editcoursepost', 'App\Http\Controllers\UserController@posteditCourse')->name('editcoursepost');
Route::delete('/deletecourse/{id}', 'App\Http\Controllers\UserController@deletecourse')->name('deletecourse');

//=================end course======

Route::get('/takequiz/{id}', 'App\Http\Controllers\UserController@takequiz')->name('takequiz');
Route::post('/quizpost', 'App\Http\Controllers\UserController@quizpost')->name('quizpost');
Route::get('/instructorcourses', 'App\Http\Controllers\UserController@instructorCourses')->name('instructorcourses');
Route::get('/instructordashboard', 'App\Http\Controllers\UserController@instructorDashboard')->middleware(['verified','auth'])->name('instructordashboard');
Route::get('/analytics', 'App\Http\Controllers\UserController@analytics')->name('analytics');

Route::get('/listpics/{id}', 'App\Http\Controllers\UserController@listpics')->name('listpics');
Route::delete('/deletepics/{id}', 'App\Http\Controllers\UserController@deletepics')->name('deletepics');

//=================add content add video======
Route::get('/addcontent/{id}', 'App\Http\Controllers\UserController@addVideos')->name('addcontent');
Route::post('/addcontentpost', 'App\Http\Controllers\UserController@postaddVideos')->name('addcontentpost');
Route::get('/editcontent/{id}', 'App\Http\Controllers\UserController@addVideos_edit')->name('editcontent');
Route::post('/addcontenteditpost', 'App\Http\Controllers\UserController@postaddVideos_edit')->name('addcontenteditpost');
Route::post('/addvideosajax', 'App\Http\Controllers\UserController@addvideosajax')->name('addvideosajax');
Route::post('/addpdfsajax', 'App\Http\Controllers\UserController@addpdfsajax')->name('addpdfsajax');
//=================add content add video======

Route::get('/addcover/{id}', 'App\Http\Controllers\UserController@addCover')->name('addcover');
Route::post('/addcoverpost', 'App\Http\Controllers\UserController@postaddCover')->name('addcoverpost');
//=================questions======
Route::get('/addquestion/{id}', 'App\Http\Controllers\UserController@addQuestion')->name('addquestion');
Route::delete('destqstn/{id}', 'App\Http\Controllers\UserController@deleteqstn')->name('destqstn');
Route::post('/savquestion', 'App\Http\Controllers\UserController@addQuestionpost')->name('savquestion');
//=================end question======
Route::get('/viewcourse/{id}/{name?}', 'App\Http\Controllers\UserController@viewCourse')->name('viewcourse');
Route::get('/coursedetail/{id}', 'App\Http\Controllers\UserController@courseDetail')->name('coursedetail');
Route::post('/subcatg', 'App\Http\Controllers\UserController@addsubcategory')->name('subcatg');
Route::post('/catg', 'App\Http\Controllers\UserController@addcategory')->name('catg');
Route::post('/pptpics', 'App\Http\Controllers\UserController@pptpics')->name('pptpics');
Route::get('/certificate', 'App\Http\Controllers\UserController@cert')->name('certificate');
Route::get('/badges', 'App\Http\Controllers\UserController@badges')->name('badges');
Route::get('/skills', 'App\Http\Controllers\UserController@skills')->name('skills');
Route::get('/earnings', 'App\Http\Controllers\UserController@earnings')->name('earnings');
Route::get('/review', 'App\Http\Controllers\UserController@review')->name('review');
Route::get('/notification', 'App\Http\Controllers\UserController@notification')->name('notification');
Route::get('/myaccount', 'App\Http\Controllers\UserController@myaccount')->name('myaccount');
Route::get('/coursepurches', 'App\Http\Controllers\UserController@coursepurch')->name('coursepurches');
Route::post('/wishlist', 'App\Http\Controllers\UserController@wishlist')->name('wishlist');
Route::post('/complited', 'App\Http\Controllers\UserController@complited')->name('complited');
Route::get('/deleteaccount', 'App\Http\Controllers\UserController@deleteacc')->name('deleteaccount');
Route::get('/createcert', 'App\Http\Controllers\UserController@createcert')->name('createcert');
Route::post('/searchcourse', 'App\Http\Controllers\UserController@searchcoursepost')->name('searchcourse');
Route::get('/autocomplete-search', [UserController::class, 'autocompleteSearch']);
Route::get('/category', 'App\Http\Controllers\UserController@category')->name('category');
Route::get('/accsetting', 'App\Http\Controllers\UserController@accSetting')->name('accsetting');
Route::get('/lcontent', 'App\Http\Controllers\UserController@lcontent')->name('lcontent');

//-------------google------------
Route::get('redirectgoogle', 'App\Http\Controllers\Auth\SocialGoogleController@redirect');
Route::get('callback/google', 'App\Http\Controllers\Auth\SocialGoogleController@callback');

//----------------facebook--------
Route::get('redirectfb', 'App\Http\Controllers\Auth\SocialFacebookController@redirect');
Route::get('callback/facebook', 'App\Http\Controllers\Auth\SocialFacebookController@callback');


Route::delete('destroyvid/{name}', 'App\Http\Controllers\UserController@deletevid')->name('destroyvid');
Route::delete('destroypdf/{name}', 'App\Http\Controllers\UserController@destroypdf')->name('destroypdf');
Route::get('get-video/{name}', 'App\Http\Controllers\UserController@getVideo')->name('get-video');
Route::get('get-pdf/{name}', 'App\Http\Controllers\UserController@getPdf')->name('get-pdf');
Route::get('get-ppt/{name}', 'App\Http\Controllers\UserController@getPpt')->name('get-ppt');
Route::get('get-copic/{name}', 'App\Http\Controllers\UserController@getcopic')->name('get-copic');
Route::get('get-covid/{name}', 'App\Http\Controllers\UserController@getcovid')->name('get-covid');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/user', 'UserController@index')->name('user')->middleware('user');
// Route::get('/business', 'BusinessController@index')->name('business')->middleware('business');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
