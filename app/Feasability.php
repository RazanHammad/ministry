<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feasability extends Model
{
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
