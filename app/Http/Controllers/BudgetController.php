<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;
use DB;
use PDF;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //will show the list of budget records
    {
        $budgets= Budget::latest()->paginate(5); //get budgets and store them in budgets variable
        return view('budgets.index', compact('budgets'))->with (request()->input('page'));
    }
    //show results in burepo
    public function showIncome(){
        $budgets = Income::latest()->paginate(5);
        return view('budgets.buRepo', compact('budgets'));
      }
      //genarate pdf
    public function exportPDF(){
        $budgets=Budget::latest()->paginate(5);
        $pdf= PDF::loadView('budgets.buRepo',compact('budgets'));
        return $pdf->download('budgets-list.pdf');
    }
    public function budgetsearch(){
        $search_text= $_GET['query'];
        $budgets=Budget::where('des', 'Like', '%'.$search_text.'%')->paginate(5);
        return view('budgets.budgetse',compact('budgets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('budgets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validations create for form
        $request->validate([
            'category' => 'required',
            'des' => 'required',
            'budg' => 'required',
        ]);
        Budget::create($request->all());//create budget in database using model
        return redirect()->route('budgets.index')->with ('success', 'Budget Entered Successfully');//redirect to index view with success message
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function show(Budget $budget) //inject the budget clicked on view
    {
        return view('budgets.show', compact('budget')); //inject the budget clicked into view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function edit(Budget $budget)
    {
        return view('budgets.edit', compact('budget')); //view expect budget that needed to update so we pass budget
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Budget $budget)
    {
        //validations update for form
        $request->validate([
            'category' => 'required',
            'des' => 'required',
            'budg' => 'required',
        ]);
        //update budget in database 
        $budget->update($request->all()); 
        //redirect to index view with success message
        return redirect()->route('budgets.index')->with ('success', 'Budget Updated Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Budget  $budget
     * @return \Illuminate\Http\Response
     */
    public function destroy(Budget $budget)
    {
        $budget->delete();
        return redirect()->route('budgets.index')->with ('success', 'Budget Deleted Successfully');
    }
}
