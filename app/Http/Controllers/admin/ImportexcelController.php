<?php

namespace App\Http\Controllers\admin;
use App\Country;
use App\Airline;
use App\Airport;
use App\City;

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
            foreach ($results as $row) {            
                $airport                            = new Airport();
                $airport->country_code              = $row['country_code'];
                $airport->city_code                 = $row['city_code'];
                $airport->airport_code              = $row['airport_code'];
                $airport->state_code                = $row['state_code'];
                $airport->airport_name              = $row['airport_name'];
                $airport->airport_name_in_hr_hr     = $row['airport_name_in_hr_hr'];
                $airport->airport_name_in_cs_cz     = $row['airport_name_in_cs_cz'];
                $airport->airport_name_in_nl_be     = $row['airport_name_in_nl_be'];
                $airport->airport_name_in_en_gb     = $row['airport_name_in_en_gb'];
                $airport->airport_name_in_fr_fr     = $row['airport_name_in_fr_fr'];
                $airport->airport_name_in_it_it     = $row['airport_name_in_it_it'];
                $airport->airport_name_in_kk_kz     = $row['airport_name_in_kk_kz'];
                $airport->airport_name_in_pl_pl     = $row['airport_name_in_pl_pl'];
                $airport->airport_name_in_pt_pt     = $row['airport_name_in_pt_pt'];
                $airport->airport_name_in_ro_ro     = $row['airport_name_in_ro_ro'];
                $airport->airport_name_in_ru_ru     = $row['airport_name_in_ru_ru'];
                $airport->airport_name_in_sk_sk     = $row['airport_name_in_sk_sk'];
                $airport->airport_name_in_es_es     = $row['airport_name_in_es_es'];
                $airport->airport_name_in_tr_tr     = $row['airport_name_in_tr_tr'];
                $airport->active                    = $row['active'];
                $airport->save();
            }
        });
    }
    
        
    public function cities(){
        
        set_time_limit(0);
        $offset=10 ;$limit = 10;
        $file = public_path().'/updated_city_list.xlsx';
        \Excel::load($file, function($reader) {
            $results = $reader->limit($limit,$offset)->toArray();
            echo "<pre>";
            print_r($results);
            foreach($results as $d){
                
                /**/$ins_arr =array
                            (
                                'country_code' => $d['country_code'],
                                'city_code' => $d['city_code'],
                                'city_name' => $d['city_name'],
                                'city_name_in_albanian' => $d['city_name_in_albanian'],
                                'city_name_in_croatian' => $d['city_name_in_croatian'],
                                'city_name_in_czech' => $d['city_name_in_czech'],
                                'city_name_in_dutch_belgium' => $d['city_name_in_dutch_belgium'],
                                'city_name_in_english_uk' => $d['city_name_in_english_uk'],
                                'city_name_in_finnish' => $d['city_name_in_finnish'],
                                'city_name_in_french' => $d['city_name_in_french'],
                                'city_name_in_greek' => $d['city_name_in_greek'],
                                'city_name_in_hungarian' => $d['city_name_in_hungarian'],
                                'city_name_in_italian' => $d['city_name_in_italian'],
                                'city_name_in_kazakh' => $d['city_name_in_kazakh'],
                                'city_name_in_polish' => $d['city_name_in_polish'],
                                'city_name_in_portuguese' => $d['city_name_in_portuguese'],
                                'city_name_in_romanian' => $d['city_name_in_romanian'],
                                'city_name_in_russian' => $d['city_name_in_russian'],
                                'city_name_in_serbian' => $d['city_name_in_serbian'],
                                'city_name_in_slovak' => $d['city_name_in_slovak'],
                                'city_name_in_spanish' => $d['city_name_in_spanish'],
                                'city_name_in_turkish' => $d['city_name_in_turkish'],
                                'provider' => $d['provider'],
                                'active' => 1
                                
                            );
                            print_r($ins_arr);
                          
                    // City::insert($ins_arr);
                     sleep(1);
            }
            
        });
    }
    
    
    public function parseagodaCityXML(){
        
        $url = 'http://xml.agoda.com/datafeeds/Feed.asmx/GetFeed?feed_id=3&apikey=4c392292-798a-48ef-96aa-5c1091427fdb';
        file_put_contents(public_path().'/agoda/cities.xml',file_get_contents($url));
        $xml = \XmlParser::load(public_path().'/agoda/cities.xml');
        
    }
}
