@extends('budgets.layout')

@section('content')
<link rel="stylesheet" href="/css/indexex.css"/>

<header>
    <div class= "header">
    <a href= "#home">
    <img src= "/pictures/SSLogo.jpg" class="logo" height="80px" width="160px" >
    </a><br>
    <font size= "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
    </div>
    </header>
    <div class            = "topnav">
        <a href             = "/index">Room Booking</a>
        <a href             = "/eventHome">Event Management</a>
        <a href             = "{{ route('employees.index') }}">Employee Management</a>
        <a href             = "/RM">Room Management</a>
        <a href             = "{{ route('housekeepers.index') }}">Maintenance</a>
        <a href             = "{{ route('dinein.create') }}">Dining</a>
        <a href             = "/InvHome">Inventory</a>
        <a href             = "users">Financial</a>
    
    </div>
    <hr class             = "line2">
    <br>
    <a href               = "../SCHome" style="font-family:calibri;font-size:18px;"> Home  </a>
    <text> > </text>
    <a href               = "/users" style="font-family:calibri;font-size:18px;"> Financial Management </a>
    <text> > </text>
    <a href               = "#New" style="font-family:calibri;font-size:18px;"> Busget Records </a>
    <a href               = "#useraccount" target="_blank">
    
    </a><br><br>
    <hr class             = "line2"> <br>


    
<div class="row">
    <div class="col-lg-12">
        <div class="pull-right">
            <h2><u>Budget Records</u></h2> <br><br>
            <form class="serachbudget" type="get" action="{{ url('/budgetsearch') }}">
                <input type= "search" name= "query" placeholder="Search..">
                <button type="submit" class="searchButton"><i class= "fa fa-search"></i></button>
            </form>
            <a class="btn btn-success" href="{{ route('budgets.create') }}"> Create New Budget</a><br><br>
            <a class="btn btn-success3" href="{{ URL::to('pdfin3') }}">Export to PDF</a>
            
            

           
            </div>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<br>
<div id="box3" class="box">
<table class="table table-bordered" align="center" border="1">
    <tr>
        <th>ID</th>
        <th>Category</th>
        <th>Description</th>
        <th>Budget</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($budgets as $budget) <!--this 'budgets' is the php variable inside index() of controller class, these are the bu records fetched from db-->
    <tr>
        <!--interate trough that variable using for each loop-->
        <td>{{ $budget->id }}</td>
        <td>{{ $budget->category }}</td>
        <td>{{ $budget->des }}</td>
        <td>{{ $budget->budg }}</td>
        <td>
            <form action="{{ route('budgets.destroy',$budget->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('budgets.show',$budget->id) }}">Show</a><!--route for show budget record-->
                <a class="btn btn-primary" href="{{ route('budgets.edit',$budget->id) }}">Edit</a><!--route for editing budget record-->
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table><br><br>
<br><br><br><br>
</div>
{{ $budgets->links() }}
@endsection