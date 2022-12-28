<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dine_in;
use PDF;

class DineInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinein = dine_in::all();
        return view('view_menu', compact('dinein'));
        // return view('index', compact('dinein'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_menu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'country' => 'required|max:225',
            'category' => 'required|max:225',
            'meal_code' => 'required|max:225',
            'menu' => 'required|max:225',
            'small_portion_price' => 'required|max:225',
            'medium_portion_price' => 'required|max:225',
            'large_portion_price' => 'required|max:225'
        ]);

        $dineIn = new dine_in([
            'country' => $request->get('country'),
            'category' => $request->get('category'),
            'meal_code' => $request->get('meal_code'),
            'menu' => $request->get('menu'),
            'small_portion_price' => $request->get('small_portion_price'),
            'medium_portion_price' => $request->get('medium_portion_price'),
            'large_portion_price' => $request->get('large_portion_price')
        ]);

        $dineIn -> save();

        return redirect('/dinein')->with('completed','Meal has been saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dineIn = dine_in::findOrFail($id);
        return view('edit', compact('dinein'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'country' => 'required|max:225',
            'category' => 'required|max:225',
            'meal code' => 'required|max:225',
            'menu' => 'required|max:225',
            'small portion price' => 'required|max:225',
            'medium portion price' => 'required|max:225',
            'large portion price' => 'required|max:225',
        ]);
        dine_in::whereId($id)->update($updateData);
        return redirect('/dinein')->with('completed', 'Meal has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dineIn = dine_in::findOrFail($id);
        $dineIn->delete();

        return redirect('/dinein')->with('completed', 'Meal has been deleted');
    }
    //Report Generating
    public function dineInReport(){
        $data = dine_in::all();

        view()->share('dineinlist',$data);
        $pdf = PDF::loadView('pdfs.dineinReport',$data);
        $pdf->setPaper('A4','landscape');

        return $pdf->download('dinein-list.pdf');
    }
}
