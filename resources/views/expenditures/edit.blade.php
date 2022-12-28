@extends('expenditures.layout')
@section('content')
<link rel="stylesheet" href="/css/createex.css"/>
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
<a href               = "{{ route('expenditures.index') }}" style="font-family:calibri;font-size:18px;"> Expense records </a>
<text> > </text>
<a href               = "#New" style="font-family:calibri;font-size:18px;"> Edit Entry </a>
<a href               = "#useraccount" target="_blank">

</a><br><br>
<div id="box4" class="box">
<hr class             = "line2"> <br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Expense</h2>
        </div>
        <div class="pull-right">
            
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

<form action="{{ route('expenditures.update',$expenditure->id) }}" method="POST">
    <div id="box3" class="box">
    @csrf
    @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5>Date:</h5><br>
                <input type="date" class="form-control"  name="Date" value="{{ $expenditure->Date }}"><br><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5>Detail:</h5><br>
                <input type="text" name="ex_Description" class="form-control" placeholder="Name" value= "{{ $expenditure->ex_Description }}"><br><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h5>Amount:</h5><br>
                <input type="number" class="form-control" name="ex_Amount" value= "{{ $expenditure->ex_Amount }}"><br><br>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br><br>
          <button type="submit" class="btn btn-primary2">Submit</button>
          <a class="btn btn-primary3" href="{{ route('expenditures.index') }}"> Back</a><br><br><br><br><br>
        </div>
    </div>

</form>
</div>
</div>
</div>
@endsection