<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [];
    protected $table = 'admins';
    
    public function setPasswordAttribute($password){   
        $this->attributes['password'] = bcrypt($password);
    }
}
