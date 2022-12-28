@extends('events.layout')

@section('content')

<header>

    <center><img src="{{ public_path('images/SSLogo.jpg') }}"
    class="float-left ml-4" height="80px" width="160px"></center>
    
<style>
table{ border-collapse: collapse;} 
 th { text-align:center;border: 1px solid black ; font-family: sans-serif;font-size: 14px;color:rgb(10, 10, 170); }
 td {height: 60px;font-size:12px;text-align:center;border: 1px solid rgb(17, 109, 185);color:rgb(8, 74, 94) ;}
 tr:nth-of-type(odd) {background-color:rgba(93, 199, 231, 0.35);}
 tr:nth-of-type(even) {background-color:rgba(142, 198, 235, 0.35);}
 h3{font-family:sans-serif;color:rgb(155, 5, 155)}
 
</style>

</header>

<h3><center><u>Event Reservations Report</u></center></h3>
<table >
    <tr>
        <th>ID</th>
        <th>Event</th>
        <th>title</th>
        <th>FName</th>
        <th>Lname</th>
        <th>NIC</th>
        <th>Contact</th>
        
        <th>No</th>
        <th>Street</th>
        <th>City</th>
        <th>Charges</th>
        <th>Notes</th>
        <th>Date</th>
        <th>Time</th>
        <th>Hall</th>
        <th>ppl</th>
        
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
       
        <td>{{ $event->no }}</td>
        <td>{{ $event->street }}</td>
        <td>{{ $event->city }}</td>
        <td>{{ $event->charges }}</td>
        <td>{{ $event->notes }}</td>
        <td>{{ $event->eventday}}</td>
        <td>{{ $event->time }}</td>
        <td>{{ $event->hallNumber }}</td>
        <td>{{ $event->participantNo }}</td>
   
    </tr>
    @endforeach




</div>

@endsection