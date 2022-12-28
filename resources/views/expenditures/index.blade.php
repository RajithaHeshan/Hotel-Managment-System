@extends('expenditures.layout')
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
    <a href               = "/users style="font-family:calibri;font-size:18px;"> Financial Management </a>
    <text> > </text>
    <a href               = "#New" style="font-family:calibri;font-size:18px;"> Expense Records </a>
    <a href               = "#useraccount" target="_blank">
  
    </a><br><br>
    <hr class             = "line2"> <br>


<div class="row">
    <div class="col-lg-12">
        <div class="pull-right">
            <h2><u>Expense Records</u></h2><br><br>
            <form class="expensesearch" type="get" action="{{ url('/expensesearch') }}">
                <input type= "search" name= "query" placeholder="Search..">
                <button type="submit"><i class= "fa fa-search"></i></button>
            </form>
            <a class="btn btn-success" href="{{ route('expenditures.create') }}"> Create New Expense</a><br><br>
            <a class="btn btn-success3" href="{{ URL::to('pdfin2') }}">Export to PDF</a>
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
<table class="table table-bordered" align="center">
    <tr>
        <th>ID</th>
        <th>Time created</th>
        <th>Description</th>
        <th>Amount</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($expenditures as $expenditure)
    <tr>
        <td>{{ $expenditure->id }}</td>
        <td>{{ $expenditure->Date }}</td>
        <td>{{ $expenditure->ex_Description }}</td>
        <td>{{ $expenditure->ex_Amount }}</td>
        <td>
            <form action="{{ route('expenditures.destroy',$expenditure->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('expenditures.show',$expenditure->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('expenditures.edit',$expenditure->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table><br><br><br>
</div>
{{ $expenditures->links() }}
@endsection