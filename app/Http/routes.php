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
    Route::any('/', 				         array('as' => 'agent_land',		    'uses' => 'LoginController@index'));
    Route::any('/index',                                'LoginController@index');
    Route::post('/login/', 				 array('as' => 'agent_login',		'uses' => 'LoginController@store'));
});

Route::group(array('middleware' => 'agent', 'namespace'=>'agent', 'prefix' => 'agent'), function(){ 
    Route::any('/logout/', 				  array('as' => 'agent_logout',		'uses' => 'LoginController@logout'));
    Route::any('/dashboard/', 			          array('as' => 'agent_dashboard',	'uses' => 'LoginController@dashboard'));
    Route::any('/profile/', 			          array('as' => 'agent_profile',		'uses' => 'AccountController@index'));
    
});

// End For Agents Panel

// For Supplier Panel
Route::group(array( 'namespace'=>'supplier', 'prefix' => 'supplier'), function(){
    Route::any('/', 				           array('as' => 'supplier_land',		'uses' => 'LoginController@index'));
    Route::any('/index',                                'LoginController@index');
    Route::post('/login/', 				   array('as' => 'supplier_login',		'uses' => 'LoginController@store'));
});

Route::group(array('middleware' => 'supplier', 'namespace'=>'supplier', 'prefix' => 'supplier'), function(){ 
    Route::any('/logout/', 				   array('as' => 'supplier_logout',		'uses' => 'LoginController@logout'));
    Route::any('/dashboard/', 			           array('as' => 'supplier_dashboard',	    'uses' => 'LoginController@dashboard'));
    Route::any('/profile/', 			           array('as' => 'supplier_profile',		'uses' => 'AccountController@index'));
    Route::any('/createsupplier/', 		           array('as' => 'add_supplier',		    'uses' => 'AccountController@create'));
    
    Route::any('/supplier_list/', 	        	   array('as' => 'supplier_list',		     'uses' => 'SupplierController@index'));
    Route::get('/supplier_create/', 	        	   array('as' => 'supplier_add',		     'uses' => 'SupplierController@create'));
    Route::post('/supplier_create/', 	        	   array('as' => 'supplier_add',		     'uses' => 'SupplierController@store'));
    Route::get('/supplier_details/{id}', 	           array('as' => 'supplier_show',		     'uses' => 'SupplierController@show'));
    Route::get('/supplier_edit/{id}', 	        	   array('as' => 'supplier_edit',		     'uses' => 'SupplierController@edit'));
    Route::post('/supplier_edit/{id}', 	        	   array('as' => 'supplier_edit',		     'uses' => 'SupplierController@update'));
    
});
// End For Supplier Panel

// For Admin Panel
Route::group(array('namespace'=>'admin', 'prefix' => 'admin'), function(){ 
    Route::any('/', array('as' => 'admin', 'uses' => 'LoginController@index'));
});

Route::group(array('namespace'=>'admin', 'middleware' => 'admin', 'prefix' => 'admin'), function(){

    Route::get('/logout',                               array('as' => 'logout',                 'uses' => 'LoginController@logout'));
    Route::any('/account_settings',                     array('as' => 'account_settings',       'uses' => 'DashboardController@account_settings'));
    Route::any('/change_password',                      array('as' => 'change_password',        'uses' => 'DashboardController@change_password'));
    Route::get('/dashboard',                            array('as' => 'dashboard',              'uses' => 'DashboardController@index'));
    Route::any('/site_settings',                        array('as' => 'site_settings',          'uses' => 'SitesettingsController@index'));

    Route::get('/agent_management',                     array('as' => 'agent_management',       'uses' => 'AgentMasterController@index'));
    Route::get('/agent_add',                            array('as' => 'agent_add',              'uses' => 'AgentMasterController@create'));
    Route::post('/agent_store',                         array('as' => 'agent_store',            'uses' => 'AgentMasterController@store'));
    Route::get('/agent_edit/{id}', 	        	array('as' => 'agent_edit',              'uses' => 'AgentMasterController@edit'));
    Route::post('/agent_update/{id}', 	        	array('as' => 'agent_update',            'uses' => 'AgentMasterController@update'));
    Route::get('/agent_delete/{id}', 	                array('as' => 'agent_delete',            'uses' => 'AgentMasterController@destroy'));
    Route::get('/agent_show/{id}', 	                array('as' => 'agent_show',              'uses' => 'AgentMasterController@show'));

    Route::any('/supplier_list/', 	                array('as' => 'supplier_master_list',   'uses' => 'SupplierMasterController@index'));
    Route::get('/supplier_create/', 	        	array('as' => 'supplier_master_add',	   'uses' => 'SupplierMasterController@create'));
    Route::post('/supplier_create/', 	        	array('as' => 'supplier_master_add',	   'uses' => 'SupplierMasterController@store'));
    Route::get('/supplier_details/{id}', 	        array('as' => 'supplier_master_show',   'uses' => 'SupplierMasterController@show'));
    Route::get('/supplier_edit/{id}', 	        	array('as' => 'supplier_master_edit',   'uses' => 'SupplierMasterController@edit'));
    Route::post('/supplier_edit/{id}', 	        	array('as' => 'supplier_master_edit',   'uses' => 'SupplierMasterController@update'));
    Route::get('/supplier_delete/{id}', 	        array('as' => 'supplier_master_delete', 'uses' => 'SupplierMasterController@destroy'));
    
    Route::any('/export/countries', 	                array('as' => 'countries',   'uses' => 'ImportexcelController@countries'));
    Route::any('/export/airlines', 	                array('as' => 'airlines',   'uses' => 'ImportexcelController@airlines'));
    Route::any('/export/airports', 	                array('as' => 'airports',   'uses' => 'ImportexcelController@airports'));
    Route::any('/export/cities', 	                array('as' => 'cities',   'uses' => 'ImportexcelController@cities'));
});

