<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DeleteController extends Controller
{
    function view(){
        $data= Item::all();
        return view('InvDelete',['items'=>$data]);
    }
    function delete($id){
        $data= item::find($id);
        $data->delete();
        return redirect('InvDelete');
    }
}
