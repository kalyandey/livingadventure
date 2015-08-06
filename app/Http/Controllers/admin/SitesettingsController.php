<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Sitesetting;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Validator, \Redirect, \Session,\Cookie;

class SitesettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $data               = array();
        $settings	    = Sitesetting::find(1);
        
        if ($request->isMethod('post')){
            $validator = Validator::make(
                        $request->all(),
                        [
                            'site_name'	                => 'required',                          
                            'default_page_title'	=> 'required',                          
                            'default_meta_keywords'	=> 'required',
                            'default_meta_description'  => 'required',
                            'contact_email'             => 'required'
                        ]
            );
            if($validator->fails()){
                return redirect::route('site_settings')->withErrors($validator);
            }else{
                $site_name                  = $request->site_name;
                $default_page_title         = $request->default_page_title;
                $default_meta_keywords      = $request->default_meta_keywords;
                $default_meta_description   = $request->default_meta_description;
                $contact_email              = $request->contact_email;

                $settings->site_name                    = $site_name;
                $settings->default_page_title           = $default_page_title;
                $settings->default_meta_keywords        = $default_meta_keywords;
                $settings->default_meta_description     = $default_meta_description;
                $settings->contact_email                = $contact_email;
                
                $settings->save();
                return redirect::route('site_settings')->with('success', 'Settings updated successfully.');
            }
        }
        
        $settings	    = Sitesetting::find(1);
        $data['settings']   = $settings;
        return view('admin/sitesettings',$data);
    }
}
