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
Route::group(array( 'namespace'=>'agent', 'prefix' => 'agent'), function(){
    Route::any('/', 				                    array('as' => 'agent_land',		    'uses' => 'LoginController@index'));
    Route::any('/index',                                'LoginController@index');
    Route::post('/login/', 				                array('as' => 'agent_login',		'uses' => 'LoginController@store'));
});

Route::group(array('middleware' => 'agent', 'namespace'=>'agent', 'prefix' => 'agent'), function(){ 
    Route::any('/logout/', 				                array('as' => 'agent_logout',		'uses' => 'LoginController@logout'));
    Route::any('/dashboard/', 			            	array('as' => 'agent_dashboard',	'uses' => 'LoginController@dashboard'));
    Route::any('/profile/', 			                array('as' => 'agent_profile',		'uses' => 'AccountController@index'));
    
});

// End For Agents Panel

// For Supplier Panel
Route::group(array( 'namespace'=>'supplier', 'prefix' => 'supplier'), function(){
    Route::any('/', 				                    array('as' => 'supplier_land',		'uses' => 'LoginController@index'));
    Route::any('/index',                                'LoginController@index');
    Route::post('/login/', 				                array('as' => 'supplier_login',		'uses' => 'LoginController@store'));
});

Route::group(array('middleware' => 'supplier', 'namespace'=>'supplier', 'prefix' => 'supplier'), function(){ 
    Route::any('/logout/', 				                array('as' => 'supplier_logout',		'uses' => 'LoginController@logout'));
    Route::any('/dashboard/', 			            	array('as' => 'supplier_dashboard',	    'uses' => 'LoginController@dashboard'));
    Route::any('/profile/', 			                array('as' => 'supplier_profile',		'uses' => 'AccountController@index'));
    Route::any('/createsupplier/', 		            	array('as' => 'add_supplier',		    'uses' => 'AccountController@create'));
    
     Route::any('/supplierlist/', 	        		array('as' => 'supplier_list',		        'uses' => 'SupplierController@index'));
    
});
// End For Supplier Panel


//Route::group(array('namespace'=>'agent', 'middleware' => 'agent', 'prefix' => 'agent'), function(){
//    Route::get('/dashboard', array('as' => 'agent_dashboard', 'uses' => 'DashboardController@index'));
//});