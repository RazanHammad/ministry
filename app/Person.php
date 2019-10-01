<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'name', 'birthDate','idNo','sex','address','phone','mobile','email','status','noChild','husbandName','husbandWork' 
    ];

    public function user(){

    	return $this->belongsTo('App\User'); 
    }

    
}
