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
});

Auth::routes();

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function () {

    Route::get('dashboard', function() {
        return view('app');
    })->name('dashboard');

    Route::get('resources', function() {
        return view('app');
    })->name('resources');

    Route::get('compass/panel', function() {
        return view('app');
    })->name('compass.panel');

    Route::get('cynosure/configuration', 'CynosureConfigurationController@index')->name('cynosure.configuration');

    //Core Resources
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('clusters', 'ClusterController');
    Route::resource('organizations', 'OrganizationController');
    Route::resource('groups', 'GroupController');
    Route::resource('cynosure_settings', 'CynosureSettingController');

});
