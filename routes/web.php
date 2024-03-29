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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    /**
     * Dashboard
     */
    Route::get('/dashboard', function() {
        return "Hi! You're logged";
    });

    Route::group(['middleware' => 'role:admin'], function () {

        /**
         * Administrator
         */
        Route::get('/admin', function() {
            return "Hi! You're admin";
        });
    });
});


