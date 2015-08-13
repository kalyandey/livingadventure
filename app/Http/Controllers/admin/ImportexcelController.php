<?php

namespace App\Http\Controllers\admin;
use App\Country;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImportexcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function countries()
    {        
        $results = \Excel::load('country_list.xlsx', function($reader) {
                    })->get();
       
        foreach ($results as $row) {
            $country                                    = new Country();
            $country->country_code                      = $row->country_code;
            $country->country_name                      = $row->country_name;
            $country->country_name_in_albanian          = $row->country_name_in_albanian;
            $country->country_name_in_czech             = $row->country_name_in_czech;
            $country->country_name_in_dutch_belgium     = $row->country_name_in_dutch_belgium;
            $country->country_name_in_finnish           = $row->country_name_in_finnish;
            $country->country_name_in_greek             = $row->country_name_in_greek;
            $country->country_name_in_hungarian         = $row->country_name_in_hungarian;
            $country->country_name_in_kazakh            = $row->country_name_in_kazakh;
            $country->country_name_in_macedonian        = $row->country_name_in_macedonian;
            $country->country_name_in_polish            = $row->country_name_in_polish;
            $country->country_name_in_portuguese        = $row->country_name_in_portuguese;
            $country->country_name_in_romanian          = $row->country_name_in_romanian;
            $country->country_name_in_russian           = $row->country_name_in_russian;
            $country->country_name_in_slovak            = $row->country_name_in_slovak;
            $country->country_name_in_spanish           = $row->country_name_in_spanish;
            $country->country_name_in_turkish           = $row->country_name_in_turkish;
            $country->continent                         = $row->continent;
            $country->iseurope                          = $row->iseurope;
            $country->save();
        }
    }
   
    public function airlines()
    {
        //
    }
}
