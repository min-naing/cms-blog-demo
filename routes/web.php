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

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('services', 'PagesController@services');
Route::get('contact', 'PagesController@contact');

Auth::routes();

Route::resource('users', 'Admin\UsersController');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    Route::get('/afa', function() {
        return view('backend.index');
    })->name('index');

    Route::name('users.')->group(function() {
        Route::get('users', 'UsersController@index')->name('index');
        Route::get('users/create', 'UsersController@create')->name('create');
        Route::post('users/create', 'UsersController@store')->name('store');
        Route::get('users/{id}/edit', 'UsersController@edit')->name('edit');
        Route::match(['put', 'patch'], 'users/{id}', 'UsersController@update')->name('update');
    });

});
