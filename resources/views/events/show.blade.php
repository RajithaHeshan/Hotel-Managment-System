

@extends('events.layout')

@section('content')

<!-- start of header and navigation-->  
<link rel="stylesheet" href="/css/showIndividualEvent.css"/>

<div class="editBack">
<header>
    <div class = "header">
        <a href = "#home"> <img src = "/pictures/SSLogo.jpg" class="logo" height="80px" width="160px" > </a><br>
        <font size = "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
    </div>
</header>


<div class            = "topnav">
    <a href             = "/index">Room Booking</a>
    <a href             = "../eventHome">Event Management</a>
    <a href             = "{{ route('employees.index') }}">Employee Management</a>
    <a href             = "../RM">Room Management</a>
    <a href             = "{{ route('housekeepers.index') }}">Maintenance</a>
    <a href             = "{{ route('dinein.create') }}">Dining</a>
    <a href             = "../InvHome">Inventory</a>
    <a href             = "../users">Financial</a>

</div>

<hr class             = "line2"><br>

<a href               = "../SCHome" style="font-family:calibri;font-size:18px;"> Home  </a><text> > </text>
<a href               = "../eventHome" style="font-family:calibri;font-size:18px;"> Event Management </a><text> > </text>
<a href               = "{{ route('events.index') }}" style="font-family:calibri;font-size:18px;"> View All Events </a> </a><text> > </text>
<a href               = "{{ route('events.show',$event->id) }}" style="font-family:calibri;font-size:18px;"> Show Event </a>


<hr class             = "line2">


<!-- End of header-->




<div class="bckgrnd">






<br><br>


 <div class="row">

           <center> <h1><u> Event's Information</u></h1></center>
          
   
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('events.index') }}"> Back</a>
        </div>
        <br><br>
    
</div>

<div class="border">
<div class="row">
    <br><br>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Event ID:</strong>
            <label> {{ $event->id }} </label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Event Type:</strong>
            <label> {{ $event->eventType }}</label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
            <label> {{ $event->title }} </label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>First Name:</strong>
            <label>  {{ $event->fname }} </label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Last Name:</strong>
            <label> {{ $event->lname }} </label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIC No:</strong>
            <label>  {{ $event->nic }} </label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contact No:</strong>
            <label>  {{ $event->contact }} </label>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            <label> {{ $event->email }}</label>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address:NO:</strong>
            <label>{{ $event->no }} </label>
        </div>
    </div>



    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address:Street:</strong>
            <label> {{ $event->street }} </label>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address:Street:</strong>
            <label> {{ $event->city }}</label>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Charges:</strong>
            <label>   {{ $event->charges }}</label>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Notes:</strong>
            <label> {{ $event->notes }} </label>
        </div>
    </div>



    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Event Date:</strong>
            <label> {{ $event->eventday }} </label>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Event Time:</strong>
            <label> {{ $event->time }}</label>
        </div>
    </div>

    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Hall Number:</strong>
            <label>  {{ $event->hallNumber }} </label>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Number of participants :</strong>
            <label>{{ $event->participantNo }} </label>
        </div>
    </div>

    <br><br>
  </div>
</div></center>
<br><br><br><br><br><br><br><br><br>
</div>

@endsection