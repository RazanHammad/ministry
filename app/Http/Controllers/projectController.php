<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project ;

class projectController extends Controller
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
    {
        return view('dashboard.projectdata');
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
               'projectName' => 'required',
                'projectField' => 'required',
                'projectType' =>'required' ,
                'projectTitle' => 'required' ,
                'projectDetails' => 'required' ,
                'projectNeeds' => 'required' , 
                'projectReason'=>'required',
                'projetStatus' => 'required',
                'projectNoPerson' => 'required',
                'projectStartDate' => 'required',
                'projectCost' => 'required',
                'projectThingsCost' => 'required',
               

       ]


        );
      

       $project = new Project;
      
       $project->user_id = 1;
       $project->projectName=$request->input('projectName');
        $project->projectField = $request->input('projectField');

       $project->projectType = $request->input('projectType');
       $project->projectTitle = $request->input('projectTitle');
        $project->projectDetails = $request->input('projectDetails');
        $project->projectNeeds = $request->input('projectNeeds');
        $project->projectReason = $request->input('projectReason');
        $project->projetStatus = $request->input('projetStatus');
        $project->projectNoPerson = $request->input('projectNoPerson');
        $project->projectStartDate = $request->input('projectStartDate');
        $project->projectCost = $request->input('projectCost');
        $project->projectThingsCost = $request->input('projectThingsCost');
       
         
       $project->save();
         return redirect('/study/create')->with('success','تمت اضافة بيانات المشروع بنجاح قم باضافة بيانات دراسة الجدوى ');
       
      // $id = $project->id
       //return redirect('/feas'.$id);
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
