<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\User;

class personController extends Controller
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
        return view('dashboard.userdata');
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
               
                'name' => 'required',
                'sex' => 'required',
                'birthDate' =>'required' ,
                'idNo' => 'required' ,
                'address' => 'required' ,
                'phone' => 'required' , 
                'mobile'=>'required',
                'email' => 'required',
                'status' => 'required',
                'noChild' => 'required',
                'husbandName' => 'required',
                'husbandWork' => 'required',
               

       ]


        );
      
 $user= new User ;
        
        $user->name =  $request->input('name');
        $user->email=$request->input('email');
        $user->password= '$2y$10$EU7bjsitWrsyhw6kuQpEhO14x.NZXKRJT9kSqTKzULC8/hjhYq00K';
        $user->save();
       $person = new Person;
        $person->user_id = $user->id;
       $person->name = $user->name;
        $person->sex = $request->input('sex');
        $person->birthDate = $request->input('birthDate');
       $person->idNo = $request->input('idNo');
       $person->address = $request->input('address');
        $person->phone = $request->input('phone');
        $person->mobile = $request->input('mobile');
        $person->email = $user->email;
        $person->status = $request->input('status');
        $person->noChild = $request->input('noChild');
         $person->husbandName = $request->input('husbandName');
        $person->husbandWork = $request->input('husbandWork');
       
         
       $person->save();

         return redirect('/qualy/create')->with('success','تمت عملية الاضافة بنجاح قم باضافة مؤهلاتك العلمية');
         
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
