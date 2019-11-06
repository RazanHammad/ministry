<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feasability extends Model
{
     protected $casts = [
    'Operationalcatagory' => 'array',
    'Operationalunit' =>'array' ,
    'Operationalnumber' => 'array' ,
    'OperationalunitCost' => 'array',
    'Operationalsource' => 'array' ,
    'toolsCatagory' => 'array' ,
    'toolsNumber' => 'array' ,
    'toolsUnitCost' => 'array' ,
    'toolsSource' => 'array' ,
    'productCatagory' => 'array' ,
    'productUnit' =>'array' ,
    'productNumber' => 'array' ,
    'productUnitCost' => 'array' ,
    'productGoal' => 'array' ,
    'workerType' => 'array' ,
    'workerNumber' => 'array' ,
    'workercost' => 'array' ,
    'notes' => 'array',
];
     protected $fillable = [
        'user_id','project_id', 'Operationalcatagory', 'Operationalunit', 'Operationalnumber' , 'OperationalunitCost' ,'Operationalsource' , 'toolsCatagory' , 'toolsNumber' , 'toolsUnitCost'  , 'toolsSource' , 'productCatagory' , 'productUnit' , 'productNumber'  , 'productUnitCost' , 'productGoal' ,'workerType','workerNumber' , 'workercost' , 'notes',
    ];

    public function project()

    {

    	return $this->belongsTo('app\Project');
    }

     public function user()

    {

    	return $this->belongsTo('app\User');
    }
}
