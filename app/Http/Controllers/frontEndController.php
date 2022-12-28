<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontEndController extends Controller
{
    public function indexEventHome(){
        return view('eventHome');
    }

 

}
