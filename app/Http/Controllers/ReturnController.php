<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fault;

class ReturnController extends Controller
{
    function itemReturns(Request $req)
    {
        $fault = new Fault;
        $fault -> item_ID = $req -> ItemID;
        $fault -> item_Name = $req -> ItemName;
        $fault -> reason = $req -> FaultReason;
        $fault -> more_Details = $req -> MoreDetails;
        $fault -> supplier_Name = $req -> SupName;
        $fault->save();
        return redirect('Return');
    }
}
