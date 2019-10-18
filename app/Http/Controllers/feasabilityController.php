<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feasability;
use App\Project;

class feasabilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $project = Project::get();
        return view('dashboard.study',compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'projects_id' => 'required',
                'Operationalcatagory'=> 'required',
                'Operationalunit' => 'required',
                'Operationalnumber' =>'required' ,
                'OperationalunitCost' => 'required' ,
                'Operationalsource' => 'required' , 
                'toolsCatagory'=>'required',
                'toolsNumber' => 'required',
                'toolsUnitCost' => 'required',
                'toolsSource' => 'required',
                'productCatagory' => 'required',
                'productUnit' => 'required',
                'productNumber' => 'required',
                'productUnitCost' => 'required' ,
                'productGoal' => 'required',
                'workerType' => 'required',
                'workerNumber' => 'required',
                'notes' => 'required',
                'workercost' => 'required',

       ]


        );
      

       $feasability = new Feasability;
       $feasability->users_id = 1 ;
    $feasability = Feasability::create($request->all());

       $feasability->save();
       return redirect('/study')->with('success' , 'feasability Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
