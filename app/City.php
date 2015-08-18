<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = ['id','country_code', 'city_code', 'city_name','city_name_in_albanian','city_name_in_croatian','city_name_in_czech','city_name_in_dutch_belgium','city_name_in_english_uk','city_name_in_finnish','city_name_in_french','city_name_in_greek','city_name_in_hungarian','city_name_in_italian','city_name_in_kazakh','city_name_in_polish','city_name_in_portuguese','city_name_in_romanian','city_name_in_russian','city_name_in_serbian','city_name_in_slovak','city_name_in_spanish','city_name_in_turkish','provider','active'];

}
