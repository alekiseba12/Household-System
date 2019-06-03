<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Houses;
use DB;
class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses=Houses::all();
        return view('tenants.houses', ['houses'=>$houses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $house=new Houses;
        $house->house_No=$request->input('house_No');
        $house->House_Amount=$request->input('House_Amount');
        $house->status=$request->input('status');
        $house->save();
        return redirect('/houseform')->with('response', 'House details saved successfully');
        
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
    public function edit($house_No)
    {
      $house=DB::table('houses')->select('houses.*')->where('house_No', '=', $house_No)->get();
      return view('tenants.edithouse', ['houses'=>$house]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $house_No)
    {
        $house=new Houses;
        $house->house_No=$request->input('house_No');
        $house->House_Amount=$request->input('House_Amount');
        $house->status=$request->input('status');
        $data=array(
            'house_No'=>$house->house_No,
            'House_Amount'=>$house->House_Amount,
            'status'=>$house->status
        );
        Houses::where('house_No', $house_No)->update($data);
        $house->update($data);
        return redirect('/houseform')->with('response', 'House details updated successfully');
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
