<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{

	protected $casts = [
    'experience' => 'array',
    'monthlyIncome' =>'array' ,
    'IncomeSource' => 'array' ,
   
];
    protected $fillable = [
      'qualificatin' ,'experience','monthlyIncome' ,'IncomeSource','major',

    ];

    public function user(){

    	return $this->belongsTo('App\User'); 
    }
}
