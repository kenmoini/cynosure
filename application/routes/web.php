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
    return App::call('App\Http\Controllers\Controller@authCheck');
    //return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('users', function () {
        // Route assigned name "admin.users"...
    })->name('users')->middleware('auth');

    Route::get('dashboard', function() {
        return view('app');
    })->name('dashboard')->middleware('auth');
});
