@extends('expenditures.layout')

@section('content')
<link rel="stylesheet" href="/css/showc.css"/>
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
    <a href               = "#New" style="font-family:calibri;font-size:18px;"> Show Entry </a>
    <a href               = "#useraccount" target="_blank">

    </a><br><br>
    <hr class             = "line2"> <br><br><br>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Expense </h2>
        </div>
        <div class="pull-right"><br>
            <a class="btn btn-primary" href="{{ route('expenditures.index') }}"> Back</a>
        </div>
    </div>
</div>
<div id="box3" class="box">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <table><tr>
            <td>Date: </td>
           <td> {{ $expenditure->Date }} </td></tr>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <tr><td> Description: </td>
            <td> {{ $expenditure->ex_Description }}</td> </tr>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <tr><td>Amount:</td>
           <td> {{ $expenditure->ex_Amount }}</td> </tr>
        </div>
    </div>
</table>
</div>
</div>
@endsection