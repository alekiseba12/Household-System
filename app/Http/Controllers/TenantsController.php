<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tenants;
use App\Houses;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\FILE;
use DB;
class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses=Houses::all();
        
        return view('tenants.tenants', ['houses'=>$houses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ID_NO' => 'required|min:8|string:8|numeric',
            'Firstname' => 'required',
            'Lastname' => 'required',
            'Gender'=>'required',     
            'Location'=>'required',
            'Address'=>'required',
            'Phone_Number'=>'required|string:10',
            'house_No'=>'required|string:2|numeric',
           
        ]);
        if ($validator->fails()) {
            return redirect('/tenantsForm')
                        ->withErrors($validator)
                        ->withInput();
                    }
              
               $tenant=new Tenants;
               $tenant->ID_NO=$request->input('ID_NO');
               $tenant->Firstname=$request->input('Firstname');
               $tenant->Lastname=$request->input('Lastname');
               $tenant->Gender=$request->input('Gender');
               $tenant->Location=$request->input('Location');
               $tenant->Address=$request->input('Address');
               $tenant->Phone_Number=$request->input('Phone_Number'); 
               //if(Input::hasFile('Profile_pic')){
                //$file=Input::file('Profile_pic');
                //$file->move(public_path(). '/img/tenants', $file->getClientOriginalName());
                //$url=URL::to("/". '/img/tenants'. $file->getClientOriginalName());
              // }
            //$tenant->Profile_pic=$url;
            $tenant->house_No=$request->input('house_No'); 
            $tenant->save();

            return redirect('/tenantsForm')->with('response', 'Tenant details saved successfully!');
    }

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
    public function show($ID_NO)
    {
        $tenants=DB::table('tenants')->join('houses', 'tenants.house_No', '=', 'houses.house_No')->join('payments', 'tenants.ID_NO', '=', 'payments.User_id')->select('tenants.*', 'houses.*', 'payments.*')->where('tenants.ID_NO','=', $ID_NO)->get();
        return view('tenants.show', ['tenants'=>$tenants]);
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
