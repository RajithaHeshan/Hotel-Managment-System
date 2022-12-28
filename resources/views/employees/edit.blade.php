@extends('employees.layout')
@section('content')
   <div>
        <a href               = "#home" style="font-family:calibri;font-size:18px;"> Home  </a>
        <text> > </text>
        <a href               = "{{ route('employees.index') }}" style="font-family:calibri;font-size:18px;"> Employee Management </a>
        <text> > </text>
        <a href               = "#New" style="font-family:calibri;font-size:18px;"> Edit Employee </a>
        <br><br>
        <hr class             = "line2">
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                   <h2>Update Employee Details</h2>
                </div>
                <div class="pull-right">
                   <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
                </div>
            </div>
        </div>
   
         @if ($errors->any())
             <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
         @endif

         <br><br>
  
         <form action="{{ route('employees.update',$employee->id) }}" method="POST">
             @csrf
            @method('PUT')
   
              <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-12">
                     <div class="form-group">
                         <strong>Employee Name:</strong>
                         <input type="string" name="EmployeeName" value="{{ $employee->EmployeeName }}" class="form-control" placeholder="Name of the Employee">
                     </div>
                 </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Birth Date:</strong>
                       <input type="date" name="BirthDate" value="{{ $employee->BirthDate }}" class="form-control" placeholder="Year / Month / Date">
                   </div>
             </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <input type="string" name="Address" value="{{ $employee->Address }}" class="form-control" placeholder="Address of the Employee">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="Email" value="{{ $employee->Email }}" class="form-control" placeholder="ex: employeename@example.com">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact Number:</strong>
                    <input type="tel" name="ContactNo" value="{{ $employee->ContactNo }}" class="form-control" placeholder="Ex: 0112345678" pattern="[0-9]{10}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Position:</strong>
                    <input type="string" name="Position" value="{{ $employee->Position }}" class="form-control" placeholder="Position of the Employee">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Salary:</strong>
                    <input type="number" name="Salary" value="{{ $employee->Salary }}" class="form-control" placeholder="xxx xxx.xx">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Last Paid Date:</strong>
                    <input type="date" name="LastPaidDate" value="{{ $employee->LastPaidDate }}" class="form-control" placeholder="Year / Month / Date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
         </form>
    </div>
@endsection