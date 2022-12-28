<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use DB;
use PDF;

class IncomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incomes= Income::latest()->paginate(5);
        return view('incomes.index', compact('incomes'))->with (request()->input('page'));
    }

    public function showIncome(){
        $incomes = Income::latest()->paginate(5);
        return view('incomes.inRepo', compact('incomes'));
      }

    public function exportPDF(){
        $incomes=Income::latest()->paginate(5);
        $pdf= PDF::loadView('incomes.inRepo',compact('incomes'));
        return $pdf->download('income-list.pdf');
    }
    public function incomesearch(){
        $search_text= $_GET['query'];
        $incomes=Income::where('description', 'Like', '%'.$search_text.'%')->paginate(5);
        return view('incomes.incomese',compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incomes.create');
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
            'Time_info' => 'required',
            'description' => 'required',
            'amount' => 'required',
        ]);
        Income::create($request->all());
        return redirect()->route('incomes.index')->with ('success', 'Income Entered Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        return view('incomes.show', compact('income'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {
        return view('incomes.edit', compact('income'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Income $income)
    {
        $request->validate([
            'Time_info' => 'required',
            'description' => 'required',
            'amount' => 'required',
        ]);
        $income->update($request->all());
        return redirect()->route('incomes.index')->with ('success', 'Income Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        $income->delete();
        return redirect()->route('incomes.index')->with ('success', 'Income Deleted Successfully');
    }
}
