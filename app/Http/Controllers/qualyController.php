<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualification;


class qualyController extends Controller
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
        return view('dashboard.qually');
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
                
                'qualificatin' => 'required',
                'experience' => 'required',
                'monthlyIncome' => 'required',
                'IncomeSource' => 'required',
                'major' => 'required',
                
 
       ]


        );

       $qualy = new Qualification;
       $qualy->user_id=1;
         $qualy->qualificatin = $request->input('qualificatin');

        $qualy->experience = json_encode(request('experience'));
        $qualy->monthlyIncome = json_encode(request('monthlyIncome'));
        $qualy->major = $request->input('major');
        $qualy->IncomeSource = json_encode(request('IncomeSource'));
        $qualy->save();
        //return redirect('/qualy');
         return redirect('/project/create')->with('success','تمت عملية الاضافة بنجاح قم باضافة بيانات المشروع');
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
