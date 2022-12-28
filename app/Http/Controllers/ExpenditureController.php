<?php

namespace App\Http\Controllers;

use App\Models\Expenditure;
use Illuminate\Http\Request;
use DB;
use PDF;
class ExpenditureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenditures= Expenditure::latest()->paginate(5);
        return view('expenditures.index', compact('expenditures'))->with (request()->input('page'));
    }
    public function showExpense(){
        $expenditures = Expenditure::latest()->paginate(5);
        return view('expenditures.exRepo', compact('expenditures'));
      }
    public function exportPDF(){
        $expenditures=Expenditure::latest()->paginate(5);
        $pdf= PDF::loadView('expenditures.exRepo',compact('expenditures'));
        return $pdf->download('expense-list.pdf');
    }
    public function expensesearch(){
        $search_text= $_GET['query'];
        $expenditures=Expenditure::where('ex_Description', 'Like', '%'.$search_text.'%')->paginate(5);
        return view('expenditures.expensese',compact('expenditures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenditures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Date' => 'required',
            'ex_Description' => 'required',
            'ex_Amount' => 'required',
        ]);
        Expenditure::create($request->all());
        return redirect()->route('expenditures.index')->with ('success', 'Expense Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function show(Expenditure $expenditure)
    {
        return view('expenditures.show', compact('expenditure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function edit(Expenditure $expenditure)
    {
        return view('expenditures.edit', compact('expenditure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expenditure $expenditure)
    {
        $request->validate([
            'Date' => 'required',
            'ex_Description' => 'required',
            'ex_Amount' => 'required',
        ]);
        $expenditure->update($request->all());
        return redirect()->route('expenditures.index')->with ('success', 'Expenditures Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Expenditure  $expenditure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expenditure $expenditure)
    {
        $expenditure->delete();
        return redirect()->route('expenditures.index')->with ('success', 'Expenditures Deleted Successfully');
    }
}
