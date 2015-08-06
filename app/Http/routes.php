<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'splashsController@index');
Route::post('/create_contact', 'splashsController@store');

// For Agents Panel
Route::group(array('namespace'=>'agent', 'prefix' => 'agent'), function(){ 
    Route::any('/', 'LoginController@index');
});

// For Admin Panel
Route::group(array('namespace'=>'admin', 'prefix' => 'admin'), function(){ 
    Route::any('/', array('as' => 'admin', 'uses' => 'LoginController@index'));
});


Route::group(array('namespace'=>'admin', 'middleware' => 'admin', 'prefix' => 'admin'), function(){
    Route::get('/logout', array('as' => 'logout', 'uses' => 'LoginController@logout'));
    Route::any('/account_settings', array('as' => 'account_settings', 'uses' => 'DashboardController@account_settings'));
    Route::any('/change_password', array('as' => 'change_password', 'uses' => 'DashboardController@change_password'));
    Route::get('/dashboard', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));
    Route::any('/site_settings', array('as' => 'site_settings', 'uses' => 'SitesettingsController@index'));
});