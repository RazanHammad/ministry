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
    {   $project = Project::get();
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
                'project_id' => 'required',
                'toolsCatagory' => 'sometimes|nullable',
                'toolsNumber' => 'sometimes|nullable',
                'toolsUnitCost' =>'sometimes|nullable',
                'toolsSource' => 'sometimes|nullable',
                'Operationalcatagory' => 'sometimes|nullable',
                'Operationalunit' =>  'sometimes|nullable',
                'Operationalnumber' => 'sometimes|nullable',
                'OperationalunitCost' =>'sometimes|nullable',
                'Operationalsource'   =>'sometimes|nullable',
                'productCatagory'   => 'sometimes|nullable',
                'productUnit'  => 'sometimes|nullable',
                'productNumber'  => 'sometimes|nullable',
                'productUnitCost'   =>'sometimes|nullable',
                    'productGoal' => 'sometimes|nullable',
          
       ]


        );
      
       $request_data = new Feasability;
       $request_data->user_id =2;
       $request_data->project_id = $request->input('project_id');
        $request_data->toolsCatagory = json_encode(request('toolsCatagory'),JSON_UNESCAPED_UNICODE);
        $request_data->toolsNumber = json_encode(request('toolsNumber'),JSON_UNESCAPED_UNICODE);
         $request_data->toolsUnitCost = json_encode(request('toolsUnitCost'),JSON_UNESCAPED_UNICODE);
          $request_data->toolsSource = json_encode(request('toolsSource'),JSON_UNESCAPED_UNICODE);


          $request_data['Operationalcatagory'] = array_filter($request->Operationalcatagory);
    
        $request_data->Operationalunit = json_encode(request('Operationalunit'),JSON_UNESCAPED_UNICODE);
         $request_data->Operationalnumber = json_encode(request('Operationalnumber'),JSON_UNESCAPED_UNICODE);
          $request_data->OperationalunitCost = json_encode(request('OperationalunitCost'),JSON_UNESCAPED_UNICODE);
              $request_data->Operationalsource = json_encode(request('Operationalsource'),JSON_UNESCAPED_UNICODE);  



      $request_data->productCatagory = json_encode(request('productCatagory'),JSON_UNESCAPED_UNICODE);
        $request_data->productUnit = json_encode(request('productUnit'),JSON_UNESCAPED_UNICODE);
         $request_data->productNumber = json_encode(request('productNumber'),JSON_UNESCAPED_UNICODE);
          $request_data->productUnitCost = json_encode(request('productUnitCost'),JSON_UNESCAPED_UNICODE);
              $request_data->productGoal = json_encode(request('productGoal'),JSON_UNESCAPED_UNICODE);




      $request_data->workerType = json_encode(request('workerType'),JSON_UNESCAPED_UNICODE);
        $request_data->workerNumber = json_encode(request('workerNumber'),JSON_UNESCAPED_UNICODE);
         $request_data->notes = json_encode(request('notes'),JSON_UNESCAPED_UNICODE);
          $request_data->workercost = json_encode(request('workercost'),JSON_UNESCAPED_UNICODE);
            
     //$data = $request->validate( $request_data);
        // dd($data);
     $request_data->save();
       return redirect('/')->with('success' , 'feasability Created Successfully');
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
