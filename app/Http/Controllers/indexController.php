<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Project ;
use App\User;
use PDF;
use App\Feasability;



class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
     
    }

    public function print($id)
    {   $user = User::find($id);
        $person =Person::where('user_id','=',$id);
            $project1 =Project::where('user_id','=',$id)->get();
             $project2 =Project::where('user_id','=',$id)->get();
              $project3 =Project::where('user_id','=',$id)->get();
               $feas1= Feasability::where('user_id','=',$id)->get();
             $feas2= Feasability::where('user_id','=',$id)->get();
             $feas3= Feasability::where('user_id','=',$id)->get();
             $feas4= Feasability::where('user_id','=',$id)->get();
             $feas5= Feasability::where('user_id','=',$id)->get(); 
return view ('dashboard.print.index',compact(['user','person','project1','project2','project3','feas1','feas2','feas3','feas4','feas5']));

  


     
    }

    public function printpro($id)
    {   $user = User::find($id);
        $project =Project::where('user_id','=',$id)->get();
  
return view ('dashboard.print.project',compact(['user','project']));

  


     
    }


     public function export_pdf($id)
  {
    // Fetch all customers from database
    $user = User::find($id);
        $person =Person::where('user_id','=',$id);
            $project1 =Project::where('user_id','=',$id)->get();
             $project2 =Project::where('user_id','=',$id)->get();
              $project3 =Project::where('user_id','=',$id)->get();
              $feas1= Feasability::where('user_id','=',$id)->get();
             $feas2= Feasability::where('user_id','=',$id)->get();
             $feas3= Feasability::where('user_id','=',$id)->get();
             $feas4= Feasability::where('user_id','=',$id)->get();
             $feas5= Feasability::where('user_id','=',$id)->get(); 
    // Send data to the view using loadView function of PDF facade
    $pdf = PDF::loadView('dashboard.print.index2' ,compact(['user','person','project1','project2','project3','feas1','feas2','feas3','feas4','feas5']));
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->download('user.pdf');
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
    return $pdf->download('project.pdf');
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


if($request->has('q')){
   
            $users = User::query()->where('name', 'like', "%{q}%")->get();
        }else{
            $users = User::get();
        }


        return view('dashboard.index', compact('users'));}  
          /**
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
