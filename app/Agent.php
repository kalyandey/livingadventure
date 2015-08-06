<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [];
    protected $table = 'agents';
    
    public function setPasswordAttribute($password){   
        $this->attributes['password'] = bcrypt($password);
    }
}
