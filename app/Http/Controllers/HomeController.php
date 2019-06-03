<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tenants;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tenants=DB::table('tenants')->select('ID_NO', 'Firstname', 'Lastname', 'Gender', 'Phone_Number', 'House_No')->get();
        return view('admin.index', ['tenants'=>$tenants]);

    }
    public function show(){
        

    }
}
