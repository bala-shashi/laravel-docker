<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests; 

class Order extends Controller
{
    public function index(Request $request){
        // $request->session()->flush();
        echo '<pre>';
        print_r(session()->all());
       return view('order');
    }

    public function create(Request $request)
    {
        return redirect()->route('order');
    }
}
