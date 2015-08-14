<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use \App\Country;
use \App\City;
use \App\Airline;
use \App\Airport;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use  \Redirect, \Session, \Input;

class LocationController extends Controller
{
    
    public function countries(){
        $data['result'] = Country::paginate(10);
        return view('admin.location.countries',$data);
    }
    public function countryDetails($id){
        $data['result'] = Country::find($id);
        return view('admin.location.country_details',$data);
    }
    public function airlines(){
        return view('admin.location.airlines');
    }
    
    public function airports(){
        return view('admin.location.airports');
    }
    
    public function cities(){
        return view('admin.location.cities');
    }
    
}
