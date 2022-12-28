<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    function addItem(Request $req)
    {
        $item = new Item;
        $item ->item_ID=$req->ItemID;
        $item ->item_Name=$req->ItemName;
        $item ->item_Type=$req->ItemType;
        $item ->supplier_Name=$req->SuppliersName;
        $item ->unit_Price=$req->UnitPrice;
        $item ->quantity=$req->Quantity;
        $item ->description=$req->Description;
        $item->save();
        return redirect("InvCreate");
    }
}
