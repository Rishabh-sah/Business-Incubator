<?php

namespace App\Http\Controllers;
use App\add;
use DB;

use Illuminate\Http\Request;

class SearchesController extends Controller
{
    //
    public function index()
    {
        $adds=add::orderBy('created_at','desc')->paginate(5);
        return view('adds.available')->with('adds', $adds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Address = $request->input('Address');
        $Area = $request->input('Area');
        $Type = $request->input('Type');
        $Price = $request->input('Price');
        $add=add::where($Address,$Area,$Type,$Price)->get();
        return view('/available')->with('add',$add);
    }
}
