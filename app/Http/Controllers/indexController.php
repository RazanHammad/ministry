<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Project ;
use App\User;
use PDF;



class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   $user = User::get();
        $project = Project::get();
  
return view ('dashboard.index',compact(['user','project']));

  


     
    }

    public function print($id)
    {   $user = User::find($id);
        $person =Person::where('user_id','=',$id);
  
return view ('dashboard.print.index',compact(['user','person']));

  


     
    }

    public function printpro($id)
    {   $user = User::find($id);
        $project =Project::where('user_id','=',$id);
  
return view ('dashboard.print.project',compact(['user','project']));

  


     
    }


     public function export_pdf($id)
  {
    // Fetch all customers from database
    $user = User::find($id);
    // Send data to the view using loadView function of PDF facade
    $pdf = PDF::loadView('dashboard.print.index2' ,compact('user'));
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->download('project.pdf');
  }


     public function proexport_pdf($id)
  {
    // Fetch all customers from database
    $user = User::find($id);
    // Send data to the view using loadView function of PDF facade
    $pdf = PDF::loadView('dashboard.print.project2' ,compact('user'));
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->download('user.pdf');
  }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
   
          
    }


public function getsearch (Request $request)
{


      $keyword=  $request->get('q');

     $users= User::where('name','like','%'.$keyword.'%')->get();

 return response()->json($users);}    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
