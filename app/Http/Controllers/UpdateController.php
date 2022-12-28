<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class UpdateController extends Controller
{
    function view(){
        $data= Item::all();
        return view('InvUpdate',['items'=>$data]);
    }
    function editData($id)
    {
        $data= Item::find($id);
        return view('update',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data=Item::find($req->id);
        
        $data->item_ID=$req->ItemID;
        $data->item_Name=$req->ItemName;
        $data->item_Type=$req->ItemType;
        $data->supplier_Name=$req->SuppliersName;
        $data->unit_Price=$req->UnitPrice;
        $data->quantity=$req->Quantity;
        $data->description=$req->Description;
        $data->save();

        return redirect('InvUpdate');
    }
}
