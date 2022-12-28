<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;



class createfunc extends Controller
{
    //
    function getData(Request $req)
    {
        $customer = new Customer;
        $customer ->cus_name=$req->cus_name;
        $customer ->contact_No=$req->contact_No;
        $customer ->email=$req->email;
        $customer ->address=$req->address;
        $customer ->book_ID=$req->book_ID;
        $customer ->room_ID=$req->room_ID;
        $customer ->checked_in=$req->checked_in;
        $customer ->checked_out=$req->checked_out;
        
        $customer->save();
        return redirect('index');
        
    }
}
