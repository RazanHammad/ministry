<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    protected $fillable = [
      'qualificatin' ,'experience','monthlyIncome' ,'IncomeSource','major',

    ];

    public function user(){

    	return $this->belongsTo('App\User'); 
    }
}
