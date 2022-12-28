<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fault;
use Barryvdh\DomPDF\Facade as PDF;

class FaultController extends Controller
{
    public function index(){
        $data=fault::all();
        return view('InvReturns',['items'=>$data]);
    }
    public function exportPDF(){
        $data = fault::all();
        view()->share('items',$data);
        $pdf = PDF::loadview('InvReturns',$data);
        return $pdf->download('Returns.pdf');
    }
}
