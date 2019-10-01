<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
     protected $fillable = [
        'projectName','projectField', 'projectType','projectTitle','projectDetails','projectNeeds','projectReason','projetStatus','projectNoPerson','projectStartDate','projectCost','projectThingsCost' ,
    ];

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function feasability(){

    	return $this->hasOne('App\Feasability'); 
    }
}
