<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tb_home;

class DashboardController extends Controller
{
    public function index()
    {
        $data = tb_home::where('status',1)->get();
        return view('index',compact('data'));
    }
    	
}

