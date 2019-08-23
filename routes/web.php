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

Route::get('/', function () 
{
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//User routes
Route::get('/users-list','UserController@list');
Route::get('/user-edit/{id}', 'UserController@edit');
Route::get('/delete-user/{id}','UserController@destroy');
Route::put('/user-update/{id}','UserController@update');
Route::get('/print-user','UserController@printPDF');
Route::get('/user-create','UserController@create');
Route::post('/user-post','UserController@insertUser');




//Member Routes
Route::get('/members-list','MemberController@list');
Route::get('/member-create','MemberController@create');
Route::get('/member-edit/{id}', 'MemberController@edit');
Route::post('/new-member','MemberController@post');
Route::put('/member-update/{id}','MemberController@update');
Route::get('/delete-member/{id}','MemberController@destroy');
Route::get('/print-member','MemberController@printPDF');



//Administration Routes
Route::get('/admins-list','AdministrationController@list');
Route::get('/admin-create','AdministrationController@create');
Route::get('/admin-edit/{id}', 'AdministrationController@edit');
Route::post('/new-admin','AdministrationController@post');
Route::get('/delete-admin/{id}','AdministrationController@destroy');
Route::put('/admin-update/{id}','AdministrationController@update');
Route::get('/print-admin','AdministrationController@printPDF');



//Group Routes
Route::get('/groups-list','GroupController@list');
Route::get('/group-create','GroupController@create');
Route::get('/group-edit/{id}', 'GroupController@edit');
Route::post('/new-group','GroupController@post');
Route::get('/delete-group/{id}','GroupController@destroy');
Route::put('/group-update/{id}','GroupController@update');
Route::get('/print-group','GroupController@printPDF');



