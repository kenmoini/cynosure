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

    Route::get('dashboard', function() {
        return view('app');
    })->name('dashboard')->middleware('auth');

    Route::get('resources', function() {
        return view('app');
    })->name('resources')->middleware('auth');

    Route::get('compass/panel', function() {
        return view('app');
    })->name('compass.panel')->middleware('auth');

    Route::get('cynosure/configuration', function() {
        return view('app');
    })->name('cynosure.configuration')->middleware('auth');

    //
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('clusters', 'ClusterController');
    Route::resource('organizations', 'OrganizationController');
    Route::resource('groups', 'GroupController');
    //Route::resource('cynosure_settings', 'CynosureSettingController');

});
