<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Validator, \Redirect, \Session,\Cookie;
use Illuminate\Cookie\CookieJar;
use Illuminate\Cookie\CookieServiceProvider;
use Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(CookieJar $cookieJar, Request $request)
    {
        if (Session::has('ADMIN_ACCESS_ID')){
            return redirect('admin/dashboard');
        }
        
        
        if ($request->isMethod('post')){			
                $admin_email		= $request->get('admin_email');
                $admin_password		= $request->get('admin_password');
                $checkAgentExists	= Admin::where("email","=",$admin_email);
                $checkAgentExists	= $checkAgentExists->get();
                
                if ($request->get('remember_login')){
                    $cookieJar->queue(Cookie::make('admin_email', $admin_email, 60));
                    $cookieJar->queue(Cookie::make('admin_password', $admin_password, 60));
                }else{
                    $cookieJar->queue(Cookie::forget('admin_email'));
                    $cookieJar->queue(Cookie::forget('admin_password'));
                }
                
                if(count($checkAgentExists) > 0){   
                    if (Hash::check($admin_password, $checkAgentExists[0]->password)){
                        Session::put('ADMIN_ACCESS_ID', $checkAgentExists[0]->id);
                        Session::put('ADMIN_ACCESS_FNAME', $checkAgentExists[0]->first_name);
                        Session::put('ADMIN_ACCESS_LNAME', $checkAgentExists[0]->last_name);
                        return redirect::route('dashboard');
                    }else{
                        return redirect::route('admin')->with('errorMessage', 'Invalid password provided.');
                    }
                }else{
                        return redirect::route('admin')->with('errorMessage', 'Invalid email address or/and password provided.');
                }
        }
        
        $data	                        = array();
        $data['admin_email']            = '';
        $data['admin_password']         = '';
        
        $admin_email 			= Cookie::get('admin_email');
        $admin_password 		= Cookie::get('admin_password');
        
        if( $admin_email && $admin_password ){
            $data['admin_email'] 		= $admin_email;
            $data['admin_password'] 		= $admin_password;
        }
        
        return view('admin/login',$data);
    }

    public function logout(){
        Session::forget('ADMIN_ACCESS_ID');
        Session::forget('ADMIN_ACCESS_FNAME');
        Session::forget('ADMIN_ACCESS_LNAME');
        return redirect('admin')->with('message', 'You have logged out successfully.');
    }
}
