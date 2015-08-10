<?php

namespace App\Http\Controllers\Supplier;

use Illuminate\Http\Request;
use App\Supplier;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Validator, \Redirect, \Session,\Cookie,\Config;
use Illuminate\Cookie\CookieJar;
use Illuminate\Cookie\CookieServiceProvider;
class LoginController extends Controller
{
   public function index(Request $request)
	{
		// Checking for agent login
		// if logged in redirect to dashboard
		if (Session::has('SUPPLIER_ACCESS_ID')){
			return redirect('supplier/dashboard');
		}
		
		$data				= array();
		$data['supplier_email'] 		= '';
		$data['supplier_password'] 	= '';
		$agent_email 			= Cookie::get('supplier_email');
		$agent_password 		= Cookie::get('supplier_password');
		
		if( $agent_email && $admin_password ){
		    $data['supplier_email'] 		= $agent_email;
		    $data['supplier_password'] 		= $agent_password;
		}			
		return view('supplier/login',$data);
	}
    
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	    //
	}
    
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(CookieJar $cookieJar,  Request $request)
	{
	  
	    if ($request->isMethod('post')){			
			$agent_email		= $request->get('supplier_email');
			$agent_password		= $request->get('supplier_password');
			$checkAgentExists	= Supplier::where("email","=",$agent_email);
			
			$checkAgentExists	= $checkAgentExists->where("password", "=", md5($agent_password.Config::get('constants.SITENAME')));
			$checkAgentExists	= $checkAgentExists->get();
			if ($request->get('remember_login')){
				$cookieJar->queue(Cookie::make('supplier_email', $admin_email, 60));
				$cookieJar->queue(Cookie::make('supplier_password', $admin_password, 60));
			}else{
				$cookieJar->queue(Cookie::forget('supplier_email'));
				$cookieJar->queue(Cookie::forget('supplier_password'));
			}
			
			if(count($checkAgentExists) > 0){
				Session::put('SUPPLIER_ACCESS_ID', $checkAgentExists[0]->id);
				Session::put('SUPPLIER_ACCESS_FNAME', $checkAgentExists[0]->first_name);
				Session::put('SUPPLIER_ACCESS_LNAME', $checkAgentExists[0]->last_name);
                                
				return redirect('supplier/dashboard');					
			}else{
				return Redirect::route('supplier_land')->with('message', ['Invalid email address or/and password.']);
			}
		}
	}
    
	
	
	
	
	public function dashboard(){
		$data  = array();
                
		return view('supplier/dashboard',$data);
	}
	
	public function logout(){
		Session::forget('SUPPLIER_ACCESS_ID');
		Session::forget('SUPPLIER_ACCESS_FNAME');
		Session::forget('SUPPLIER_ACCESS_LNAME');
		
		return redirect('supplier');
	}
	
	
	
	
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	
	
	
	public function show($id)
	{
	    //
	}
    
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	    //
	}
    
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
	    //
	}
    
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    //
	}
}
