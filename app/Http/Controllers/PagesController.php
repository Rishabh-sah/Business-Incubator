<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function search(){
        return view('path.search');
    }
    public function addproperty(){
        return view('path.addproperty');
    }
    public function searchproperty(){
        return view('path.form');
    }
    public function searchs(){
        return view('searchs.search');
    }
    public function about(){
        return view('path.about');
    }
              
}