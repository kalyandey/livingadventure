<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $fillable = array('first_name', 'last_name', 'email', 'address', 'city', 'zipcode');
}
