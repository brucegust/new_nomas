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

Auth::routes();

Route::get('/', 'PublicController@index')->name('index');
Route::get('/page/{id}', 'PublicController@page')->name('page');
Route::get('/professionals/', 'PublicController@professionals')->name('pros');
Route::get('/professionalsUSA', 'PublicController@professionalsUSA')->name('prosUSA');
Route::get('/professionalsWorld', 'PublicController@professionalsWorld')->name('prosWorld');
Route::get('/permission','PublicController@permission')->name('permission');

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', 'AdminController@dashboard')->name('adminDashboard');
	
    Route::get('/list/user', 'UserController@index')->name('adminListUsers');
	Route::get('/insert/user', 'UserController@insertUser')->name('adminUserInsert');
	Route::post('/create/user', 'UserController@store')->name('adminStoreUser');
	Route::get('/show/user/{id}', 'UserController@show')->name('adminShowUser');
	Route::post('/update/user', 'UserController@update')->name('adminUpdateUser');
	Route::post('/delete/user/{id}', 'UserController@destroy')->name('adminDeleteUser');

	Route::get('/list/professional', 'ProfessionalController@index')->name('adminListProfessionals');
	Route::get('/insert/professional', 'ProfessionalController@create')->name('adminProfessionalInsert');
	Route::post('/store/professional', 'ProfessionalController@store')->name('adminStoreProfessional');
	Route::get('/show/professional/{id}', 'ProfessionalController@show')->name('adminShowProfessional');
	Route::post('/update/professional', 'ProfessionalController@update')->name('adminUpdateProfessional');
	Route::post('/delete/professional/{id}', 'ProfessionalController@destroy')->name('adminDeleteProfessional');			
	
	Route::get('/list/page', 'PageController@index')->name('adminListPages');
	Route::get('/insert/page', 'PageController@insertPage')->name('adminInsertPage');
	Route::get('/show/page/{id}', 'PageController@show')->name('adminShowPage');
	Route::post('/edit/page', 'PageController@edit')->name('adminEditPage');
	Route::post('/create/page', 'PageController@store')->name('adminStorePage');
	Route::post('/update/page', 'PageController@update')->name('adminUpdatePage');	
	Route::post('/delete/page/{id}', 'PageController@destroy')->name('adminDeletePage');	
});

Route::prefix('user')->group(function() {
	Route::get('/home', 'HomeController@index')->name('userDashboard');
});	
