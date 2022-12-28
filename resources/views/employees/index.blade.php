@extends('employees.layout')

@section('content')

<div>
    <a href               = "../SCHome" style="font-family:calibri;font-size:18px;"> Home  </a>
    <text> > </text>
    <a href               = "{{ route('employees.index') }}" style="font-family:calibri;font-size:18px;"> Employee Management </a>
    <text> > </text>
    <a href               = "#New" style="font-family:calibri;font-size:18px;"> All Employees </a>
    <br><br>
    <hr class             = "line2">
</div>     

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Employees</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Add New Employee</a>
                <a class="btn btn-danger font-weight-bold ml-2 float-right  mt-3 " href="{{ URL::to('/createpdf') }}">Report</a>
            </div>
        </div>
    </div>
    <br>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered table-hover">
          <tr>
            <th>Employee ID</th>
            <th>Employee Name</th>
            <th>Birth Date</th>
            <th>Address</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Position</th>
            <th>Salary</th>
            <th>Last Paid Date</th>
            <th>Action</th>
          </tr>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->EmployeeName }}</td>
            <td>{{ $employee->BirthDate }}</td>
            <td>{{ $employee->Address }}</td>
            <td>{{ $employee->Email }}</td>
            <td>{{ $employee->ContactNo }}</td>
            <td>{{ $employee->Position }}</td>
            <td>{{ $employee->Salary }}</td>
            <td>{{ $employee->LastPaidDate }}</td>
            <td>
                <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Display</a><br><br>
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Update</a><br><br>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $employees->links()!!}
 
</div>   
@endsection