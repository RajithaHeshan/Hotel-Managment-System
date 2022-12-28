@extends('incomes.layout')

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
        <a href             = "/users">Financial</a>
    
    </div>
    <hr class             = "line2">
    <br>
    <a href               = "../SCHome" style="font-family:calibri;font-size:18px;"> Home  </a>
    <text> > </text>
    <a href               = "/users" style="font-family:calibri;font-size:18px;"> Financial Management </a>
    <text> > </text>
    <a href               = "#New" style="font-family:calibri;font-size:18px;"> Income Records </a>
    <a href               = "#useraccount" target="_blank">

    </a><br><br>
    <hr class             = "line2"> <br>


<div class="row">
    <div class="col-lg-12">
        <div class="pull-right">
            <h2><u>Income Records</u></h2><br><br>
            <form class="searchTerm" type="get" action="{{ url('/incomesearch') }}">
                <input type= "search" name= "query" placeholder="Search..">
                <button type="submit"><i class= "fa fa-search"></i></button>
            </form>
            <a class="btn btn-success " href="{{ route('incomes.create') }}"> Create New Income</a><br><br>
            <a class="btn btn-success3" href="{{ URL::to('pdfin') }}">Export to PDF</a>
           
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success"> 
        <p>{{ $message }}</p>
    </div>
@endif
<br>
<table class="table table-bordered" align="center" border="1">
    <tr>
        <th>ID</th>
        <th>Time created</th>
        <th>Description</th>
        <th>Amount</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($incomes as $income)
    <tr>
        <td>{{ $income->id }}</td>
        <td>{{ $income->Time_info }}</td>
        <td>{{ $income->description }}</td>
        <td>{{ $income->amount }}</td>
        <td>
            <form action="{{ route('incomes.destroy',$income->id) }}" method="POST">
                
                <a class="btn btn-info" href="{{ route('incomes.show',$income->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('incomes.edit',$income->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table> <br><br>
</div>
{{ $incomes->links() }}
@endsection