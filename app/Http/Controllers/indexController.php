<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use PDF;


class indexController extends Controller
{
    //
    

    function viewlist()
    {
        
        $data = Customer::all();
        return view('user.index',['customers'=>$data]);
    }

    public function exportBookPDF(){
        $customers = Customer::all();
        $bookpdf = PDF::loadview('user.index',compact('customers'));
        return $bookpdf->download('bookList.pdf');
    }

    function delete($id)
    {
        $data=Customer::where('id', $id);
        $data->delete();
        return redirect('index');
    }

    function showData($id)
    {
        $data=Customer::find($id);
        return view('user.edit',['data'=>$data]);
    }

    function update(Request $req)
    {
        $data = Customer::find($req->id);
        
        $data->cus_name=$req->cus_name;
        $data->contact_No=$req->contact_No;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->book_ID=$req->book_ID;
        $data->room_ID=$req->room_ID;
        $data->checked_in=$req->checked_in;
        $data->checked_out=$req->checked_out;
        $data->save();
        return redirect('index');        
    }
    
    
}
