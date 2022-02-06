<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index(Request $request){
        // $request->session()->flush();
        echo '<pre>';
        print_r(session()->all());
       return view('contact');
    }

    public function create()
    {
        return redirect()->route('contact');
    }
}
