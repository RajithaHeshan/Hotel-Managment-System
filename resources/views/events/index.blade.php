@extends('events.layout')

@section('content')
<link rel="stylesheet" href="/css/readAllEvents.css"/> 
<div class="bckimage">

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

<a href               = "SCHome" style="font-family:calibri;font-size:18px;"> Home  </a><text> > </text>
<a href               = "eventHome" style="font-family:calibri;font-size:18px;"> Event Management </a><text> > </text>
<a href               = "{{ route('events.index') }}" style="font-family:calibri;font-size:18px;"> View Events </a>


<hr class             = "line2">









<div class="row">
    <div class="col-lg-12">
        <div class="pull left">
             <br>  <center> <h2><u>Event Reservations</u></h2></center>
        </div>
        <center>
            <form class="searchEvent" type="get" action="{{ url('/eventSearch') }}">
            <input type="search" name="query" placeholder="Search..">
            <button type="submit"><i class="fa fa-search"></i></button>
            </form></center>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('events.create') }}">Create New Event</a>
        </div>
    </div>
</div>
<br><br><br><br>


@if($message = Session::get('success'))
<center><div class="alert alert-success">
        <p>{{ $message }}</p>
    </div></center>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Event</th>
        <th>title</th>
        <th>FName</th>
        <th>Lname</th>
        <th>NIC</th>
        <th>Contact</th>
        <th>Email</th>
        <th>No</th>
        <th>Street</th>
        <th>City</th>
        <th>Charges</th>
        <th>Notes</th>
        <th>Date</th>
        <th>Time</th>
        <th>Hall</th>
        <th>Members</th>
        
        <th id="ac">Action</th>
    </tr>
    @foreach ($events as $event)
    <tr>
        <td>{{ $event->id }}</td>
        <td>{{ $event->eventType }}</td>
        <td>{{ $event->title}}</td>
        <td>{{ $event->fname }}</td>
        <td>{{ $event->lname }}</td>
        <td>{{ $event->nic }}</td>
        <td>{{ $event->contact }}</td>
        <td>{{ $event->email }}</td>
        <td>{{ $event->no }}</td>
        <td>{{ $event->street }}</td>
        <td>{{ $event->city }}</td>
        <td>{{ $event->charges }}</td>
        <td>{{ $event->notes }}</td>
        <td>{{ $event->eventday}}</td>
        <td>{{ $event->time }}</td>
        <td>{{ $event->hallNumber }}</td>
        <td>{{ $event->participantNo }}</td>
        <td>
            <form action="{{ route('events.destroy',$event->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button> 
            </form>
        </td>
    </tr>
    @endforeach

</table>
<div class="pull-right">
    <a class="btn btn-pdf" href="/eventPDF">Generate Report</a>
</div>
{{ $events->links() }}

<br><br><br><br><br><br>



</div>

@endsection