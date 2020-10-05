<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontendController@index');
Route::get('/adoption', 'FrontendController@adoption');
Route::get('/how', 'FrontendController@how');
Route::get('/stories', 'FrontendController@stories');
Route::get('/about', 'FrontendController@about');

// Contact route
Route::get('/contact', 'FrontendController@contact');
Route::post('/add-contact', 'FrontendController@contactAdd');
Route::get('/all-contact', 'FrontendController@allcontact')->name('all-contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Orphan Route
Route::get('/add-orphan', 'OrpahnController@index');
Route::get('/all-orphan', 'OrpahnController@view')->name('all-orphan');
Route::post('/add-orphan', 'OrpahnController@addorphan');
Route::get('/view-orphan/{id}', 'OrpahnController@singleview');
Route::get('/delete-orphan/{id}', 'OrpahnController@delete');
Route::get('/edit-orphan/{id}', 'OrpahnController@edit');
Route::post('/update-orphan/{id}', 'OrpahnController@updateorphan');



// Institute route
Route::get('/add-institute', 'InstituteController@index');
Route::get('/all-institute', 'InstituteController@view')->name('all-institute');
Route::post('/add-institute', 'InstituteController@addinstitute');
Route::get('/view-institute/{id}', 'InstituteController@singleview');
Route::get('/delete-institute/{id}', 'InstituteController@delete');
Route::get('/edit-institute/{id}', 'InstituteController@edit');
Route::post('/update-institute/{id}', 'InstituteController@updateinstitute');




