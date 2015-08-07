<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = ['parent_id','first_name','last_name','email','password','image','phone'];
    protected $table = 'suppliers';
}
