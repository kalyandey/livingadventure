<?php

namespace App\Http\Controllers\agent;

use Illuminate\Http\Request;
use App\Agent;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Validator, \Redirect, \Session,\Cookie;
use Illuminate\Cookie\CookieJar;
use Illuminate\Cookie\CookieServiceProvider;
use Hash;

class LoginController extends Controller
{
	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
	       //$this->helper = new Helpers;
	       
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(CookieJar $cookieJar, Request $request)
	{
		// Checking for agent login
		// if logged in redirect to dashboard
		if (Session::has('AGENT_ACCESS_ID')){
			return redirect('agent/dashboard');
		}
		
		if ($request->isMethod('post')){			
			$agent_email		= $request->get('agent_email');
			$agent_password		= $request->get('agent_password');
			$checkAgentExists	= Agent::where("email","=",$agent_email);
			
			$checkAgentExists	= $checkAgentExists->where("password", "=", Hash::make($agent_password));
			$checkAgentExists	= $checkAgentExists->get();
			
			if ($request->get('remember_login')){
				$cookieJar->queue(Cookie::make('agent_email', $admin_email, 60));
				$cookieJar->queue(Cookie::make('agent_password', $admin_password, 60));
			}else{
				$cookieJar->queue(Cookie::forget('agent_email'));
				$cookieJar->queue(Cookie::forget('agent_password'));
			}
			
			if(count($checkAgentExists) > 0){
				Session::put('AGENT_ACCESS_ID', $checkAgentExists[0]->id);
				Session::put('ADMIN_ACCESS_FNAME', $checkAgentExists[0]->first_name);
				Session::put('ADMIN_ACCESS_LNAME', $checkAgentExists[0]->last_name);
				return redirect('agent/dashboard');					
			}else{
				return redirect('agent')->with('message', 'Invalid email address or/and password.');
			}
		}
		
		$data				= array();
		$data['agent_email'] 		= '';
		$data['agent_password'] 	= '';
		$agent_email 			= Cookie::get('agent_email');
		$agent_password 		= Cookie::get('agent_password');
		
		if( $agent_email && $admin_password ){
		    $data['agent_email'] 		= $agent_email;
		    $data['agent_password'] 		= $agent_password;
		}			
		return view('agent/login',$data);
	}
}
