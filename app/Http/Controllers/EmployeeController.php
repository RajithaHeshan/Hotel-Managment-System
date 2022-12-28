<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use PDF;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get the data and store in employees variable
        $employees = Employee::latest()->paginate(3);
  
        return view('employees.index',compact('employees'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //show form to add a new employee
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Vallidate the user input fields of the form
        $request->validate([
            'EmployeeName' => 'required',
            'BirthDate' => 'required',
            'Address' => 'required',
            'Email' => 'required',
            'ContactNo' => 'required',
            'Position' => 'required',
            'Salary' => 'required',
            'LastPaidDate' => 'required',
        ]);

        //Create a New Employee
        Employee::create($request->all());

        //Redirevt the user and send a response
        return redirect()->route('employees.index')
                        ->with('success','New Employee added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //display details of an employee in show view
        return view('employees.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //display the form to edit details of an employee 
        return view('employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //Vallidate the user input
        $request->validate([
            'EmployeeName' => 'required',
            'BirthDate' => 'required',
            'Address' => 'required',
            'Email' => 'required',
            'ContactNo' => 'required',
            'Position' => 'required',
            'Salary' => 'required',
            'LastPaidDate' => 'required',
        ]);

        //save the edited employee details and update method is used to send the updated data into the DB
        $employee->update($request->all());

        //redirect to the index view which displays the table with employee data and display a msg to notify that the operation is successful
        return redirect()->route('employees.index')
                        ->with('success','Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //delete an employee
        $employee->delete();
  
        return redirect()->route('employees.index')
                        ->with('success','Employee deleted successfully');
    }

    // Generate PDF
    public function createPDF() {
        // retreive all records from db
        $employees = Employee::all();
  
        // share data to view
        view()->share('employees',$employees);
        $pdf = PDF::loadView('employees.report',$employees);
  
        // download PDF file with download method
        return $pdf->download('Employee_Details_Report.pdf');
      }
}
