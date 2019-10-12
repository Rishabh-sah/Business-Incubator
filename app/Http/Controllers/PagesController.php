<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login(){
        return view('path.login');
    }
    public function register(){
        return view('path.register');
    }
    public function sdashboard(){
        return view('path.sdashboard');
    }
    public function bdashboard(){
        return view('path.bdashboard');
    }
    public function search(){
        return view('path.search');
    }
    public function addproperty(){
        return view('path.addproperty');
    }
    public function help(){
        return view('path.help');
    }
    public function available(){
        return view('path.available');
    }
}