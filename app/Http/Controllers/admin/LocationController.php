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
    //public function countryDetails($id){
    //    $data['result'] = Country::find($id);
    //    return view('admin.location.country_details',$data);
    //}
    public function airlines(){
        $data['result'] = Airline::paginate(100);
        return view('admin.location.airlines',$data);
    }
    
    public function airports($code=''){
        $airport =  new Airport();
        if($code != '')
        {
        $airport = $airport->where('airports.country_code','=', $code);
        }
        $data['result'] = $airport->select('airports.*','countries.country_name','cities.city_name')
                        ->leftJoin('countries', 'countries.country_code', '=', 'airports.country_code')
                        ->leftJoin('cities', 'cities.city_code', '=', 'airports.city_code')
                        ->paginate(100);
        return view('admin.location.airports',$data);
    }
    
    public function cities($code=''){
        $city =  new City();
        if($code != '')
        {
        $city = $city->where('cities.country_code','=', $code);
        }
        $data['result'] = $city->join('countries', 'countries.country_code', '=', 'cities.country_code')
                                ->paginate(100);
        return view('admin.location.cities',$data);
    }
    
}
