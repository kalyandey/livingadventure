<?php

namespace App\Http\Controllers\admin;
use App\Country;
use App\Airline;
use App\Airport;
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
        $results = \Excel::load('airlines_list.xlsx', function($reader) {
                    })->get();
        foreach ($results as $row) {            
            $airline                            = new Airline();
            $airline->airline_code              = $row->airline_code;
            $airline->airline_name              = $row->airline_name;
            $airline->origin                    = $row->origin;
            $airline->provider                  = $row->provider;
            $airline->active                    = $row->active;
            $airline->save();
        }
    }
    
    public function airports(){
        \Excel::load('airport_list_2.xlsx', function($reader) {
            $results = $reader->all()->toArray();
            echo '<pre>';
            print_r($results);
            echo '</pre>';
            //foreach ($results as $row) {            
            //    $airport                            = new Airport();
            //    $airport->country_code              = $row['country_code'];
            //    $airport->city_code                 = $row['city_code'];
            //    $airport->airport_code              = $row['airport_code'];
            //    $airport->state_code                = $row['state_code'];
            //    $airport->airport_name              = $row['airport_name'];
            //    $airport->airport_name_in_hr_hr     = $row['airport_name_in_hr_hr'];
            //    $airport->airport_name_in_cs_cz     = $row['airport_name_in_cs_cz'];
            //    $airport->airport_name_in_nl_be     = $row['airport_name_in_nl_be'];
            //    $airport->airport_name_in_en_gb     = $row['airport_name_in_en_gb'];
            //    $airport->airport_name_in_fr_fr     = $row['airport_name_in_fr_fr'];
            //    $airport->airport_name_in_it_it     = $row['airport_name_in_it_it'];
            //    $airport->airport_name_in_kk_kz     = $row['airport_name_in_kk_kz'];
            //    $airport->airport_name_in_pl_pl     = $row['airport_name_in_pl_pl'];
            //    $airport->airport_name_in_pt_pt     = $row['airport_name_in_pt_pt'];
            //    $airport->airport_name_in_ro_ro     = $row['airport_name_in_ro_ro'];
            //    $airport->airport_name_in_ru_ru     = $row['airport_name_in_ru_ru'];
            //    $airport->airport_name_in_sk_sk     = $row['airport_name_in_sk_sk'];
            //    $airport->airport_name_in_es_es     = $row['airport_name_in_es_es'];
            //    $airport->airport_name_in_tr_tr     = $row['airport_name_in_tr_tr'];
            //    $airport->active                    = $row['active'];
            //    $airport->save();
            //}
        });
    }
    
    public function cities(){
        \Excel::load('city_list.xlsx', function($reader) {
            $results = $reader->first()->toArray();
            echo '<pre>';
            print_r($results);
            echo '</pre>';
        });
    }
}
