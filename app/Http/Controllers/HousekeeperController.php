<?php

namespace App\Http\Controllers;

use App\Models\Housekeeper;
use Illuminate\Http\Request;
use PDF;

class HousekeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //redirect to the index blade file with all the housekeepers' details
        $housekeepers = Housekeeper::latest()->paginate(5);
        return view('housekeepers.index', compact('housekeepers'))->with(request()->input('page'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //redirect to the create blade in housekeepers view folder
        return view('housekeepers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the inputs in create blade file
        $request->validate([
            'first_Name'=>'required',
            'last_Name'=>'required',
            'nic_Number'=>'required|unique:housekeepers',
            'house_Number'=>'required',
            'street'=>'required',
            'city'=>'required',
            'hired_Agency_Name'=>'required',
            'gender'=>'required',
            'contact_Number'=>'required|unique:housekeepers'
        ]);

        //create a new housekeeper
        Housekeeper::create($request->all());

        //redirect the housekeepers' list with successful message
        return redirect()->route('housekeepers.index')->with('success','A new housekeeper details added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function show(Housekeeper $housekeeper)
    {
        //redirect to the taskcreate blade file in housekeepers view folder
        return view('housekeepers.taskcreate', compact('housekeeper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function edit(Housekeeper $housekeeper)
    {
         //redirect to the edit blade file in housekeepers view folder
        return view('housekeepers.edit', compact('housekeeper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Housekeeper $housekeeper)
    {
        //validate the inputs in edit blade file
        $request->validate([
            'first_Name'=>'required',
            'last_Name'=>'required',
            'nic_Number'=>'required',
            'house_Number'=>'required',
            'street'=>'required',
            'city'=>'required',
            'hired_Agency_Name'=>'required',
            'gender'=>'required',
            'contact_Number'=>'required|digits:10'
        ]);

        //update the housekeeper details
        $housekeeper->update($request->all());

        //redirect to the index blade view and send succesful message
        return redirect()->route('housekeepers.index')->with('success','A housekeeper details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Housekeeper  $housekeeper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Housekeeper $housekeeper)
    {
        //delete a housekeeper
        $housekeeper->delete();
       
        //redirect to the index blade view and display successful message
        return redirect()->route('housekeepers.index')->with('success','A housekeeper details deleted successfully');

    }

    public function exportHKDetailsPDF(){
        // retreive all housekeepers' records from database table
        $housekeepers = Housekeeper::all();
  
        // share data to report view in housekeeper view folder
        $pdf = PDF::loadView('housekeepers.report', compact('housekeepers'));
  
        //download PDF file with download method
        return $pdf->download('Housekeeper_Details.pdf');
    }
}
