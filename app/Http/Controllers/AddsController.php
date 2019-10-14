<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\add;
use DB;
class AddsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adds=add::orderBy('created_at','desc')->paginate(5);
        return view('adds.index')->with('adds', $adds);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('path.addproperty');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add= new add;
        $add->Pname = $request->input('Pname');
        $add->Address = $request->input('Address');
        $add->Area = $request->input('Area');
        $add->Type = $request->input('Type');
        $add->Price = $request->input('Price');
        $add->user_id = auth()->user()->id;
        $add->Status = 1;
        $add->save();
        return redirect('/home')->with('success','Property Added');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adds = add::find($id);
        return view('path.post')->with('adds',$adds);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adds = add::find($id);
        return view('properties.edit')->with('adds',$adds);
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
        $add= add::find($id);
        $add->Pname = $request->input('Pname');
        $add->Address = $request->input('Address');
        $add->Area = $request->input('Area');
        $add->Type = $request->input('Type');
        $add->Price = $request->input('Price');
        $add->user_id = auth()->user()->id;
        $add->Status = 1;
        $add->save();
        return redirect('/home')->with('success','Property Updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $add= add::find($id);
        $add->delete();
        return redirect('/home')->with('success','Property Deleted');
    }
    public function view_post($id){
    {
        $post = User::find($id);

        dd($post);

    }
    }
}