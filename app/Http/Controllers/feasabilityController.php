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
       $feasability->projects_id = $request->input('projects_id');
       $feasability->Operationalcatagory = $request->input('Operationalcatagory');
       $feasability->Operationalunit = $request->input('Operationalunit');
        $feasability->Operationalnumber = $request->input('Operationalnumber');
       $feasability->OperationalunitCost = $request->input('OperationalunitCost');
        $feasability->Operationalsource = $request->input('Operationalsource');
        $feasability->toolsCatagory = $request->input('toolsCatagory');
        $feasability->toolsNumber = $request->input('toolsNumber');
        $feasability->toolsUnitCost = $request->input('toolsUnitCost');
        $feasability->toolsSource = $request->input('toolsSource');
        $feasability->productCatagory = $request->input('productCatagory');
        $feasability->productUnit = $request->input('productUnit');
        $feasability->productNumber = $request->input('productNumber');
          $feasability->productUnitCost = $request->input('productUnitCost');
          $feasability->productGoal = $request->input('productGoal');
          $feasability->workerType =$request->input('workerType');
           $feasability->workerNumber =$request->input('workerNumber');
            $feasability->notes =$request->input('notes'); 
             $feasability->workercost =$request->input('workercost');   

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
