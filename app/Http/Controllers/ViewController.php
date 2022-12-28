<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\fault;
use Barryvdh\DomPDF\Facade as PDF;

class ViewController extends Controller
{
    function show(){
        $data= item::all();
        return view('InvView',['items'=>$data]);
    }
    public function index(){
        $data=item::all();
        return view('InvReport',['items'=>$data]);
    }
    public function exportPDF(){
        $data = item::all();
        view()->share('items',$data);
        $pdf = PDF::loadview('InvReport',$data);
        return $pdf->download('Inventory.pdf');
    }
        
}
