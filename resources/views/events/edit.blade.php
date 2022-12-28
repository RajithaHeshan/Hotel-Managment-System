@extends('events.layout')

@section('content')

<!-- start of header and navigation-->  
<link rel="stylesheet" href="/css/editEvent.css"/>

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

<a href               = "../../SCHome" style="font-family:calibri;font-size:18px;"> Home  </a><text> > </text>
<a href               = "../../eventHome" style="font-family:calibri;font-size:18px;"> Event Management </a><text> > </text>
<a href               = "{{ route('events.index') }}" style="font-family:calibri;font-size:18px;"> View Events </a> </a><text> > </text>
<a href               = "{{ route('events.edit',$event->id) }}" style="font-family:calibri;font-size:18px;"> Edit Event </a>


<hr class             = "line2">


<!-- End of header-->


        <center><h1><u>Edit Event Reservation</u></h1></center>




  
        
        <div class="pull-right">
            <a class="btn btn-primary"  href="{{ route('events.index') }}">Back</a>
        </div><br>


    @if($errors->any())
      <center>  <div class="alert alert-danger">
            <strong>whoops!</strong>There were some problems with your input<br><br>

            <ul>
                @foreach ($errors ->all() as$error )
                    <li>{{ $error }}</li>  
                @endforeach
            </ul>
        </div> </center>
 
@endif

<form action="{{ route('events.update',$event->id )}}" method="POST">
    @csrf
    @method('PUT')
    
   
        
   





<!--Split start-->

<!--<button type="button"id="btn3">clear window</button><br> -->


       

            <!-- <label for="EventID">Event ID</label> 
            <input type="text" id="EventID" name="eventID" ><br> 
           
               
            
 -->


 
 <div class="split left"> <center>
    <br><br>
 <label for="Event">Event Type:</label>

 <select name="eventType" id="eventType" >
    <option value={{ $event->eventType }} >{{ $event->eventType }}</option>
  
     <option value="Birthday Party">Birthday Party</option>
     <option value="Wedding">Wedding</option>
     <option value="Office Party">Office Party</option>
      <option value="Other Functions">Other Functions</option>
    
 </select> <br><br>

 <div class="radio">
    <label for="title1">Title: </label>
    
   
     <input id="gender1" type="radio" name="title" value="mr" >
     <label for="r1">Mr.</label>
   
     <input id="gender2" type="radio" name="title" value="ms"> 
     <label for="r1">Ms.</label><br><br> 

    </div>


             <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" value="{{ $event->fname }}"><br><br>

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname"  value="{{ $event->lname }}"><br><br>

            <label for="NIC">NIC number:</label>
            <input type="text" id="NIC"  name="nic"  minlength="10"  maxlength="12"  value="{{ $event->nic }}"><br><br>




            <div class="cntct">   
                <label for="contact">Contact-No:</label>
                <input type="tel" id="contact"  minlength="10" maxlength="10" name="contact" value="{{ $event->contact }}" ><br><br>
             
            </div>


            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required  value="{{ $event->email }}"><br><br>

           
           
            <label for="Address">Address: No</label> 
            <input type="text" id="no" name="no"  value=" {{ $event->no }}"><br><br>

            <label for="Address">Address: Street</label>
            <input type="text" name="street" id="street"  value="{{ $event->street }}"><br><br>

            <label for="Address">Address: City</label>
            <input type="text" name="city" id="city"  value="{{ $event->city }}"><br><br>
            

            <div class="chrgs">
             <label for="charges">Event Charges:</label>
             <input type="number" name="charges" id="charges" value="{{ $event->charges }}">
             </div>
             <br><br>

           <label for="subject">Special Notes:</label>
           <textarea id="notes" name="notes"  style="height:80px" > {{ $event->notes }}</textarea><br>
         

           <center>
 
       
      
   
</div>


<div class="split right">
    <br><br>
    <center>
    <label for="eventDate">Event Date:</label>
    <input type="date" id="eventday" name="eventday"  value="{{ $event->eventday }}"> <br><br>


    
        <label for="clock">Event Starting time:</label>
        <input type="time" id="clock" name="time"  value="{{ $event->time }}"><br><br><br><br>
       <!-- <input type="Submit" value="OK"> <br><br> -->
   


            <label for="title1">Hall Number: </label><br><br>
           
           
             <div class="RadioHall">
             <input id="Hall1" type="radio" name="hallNumber" value="Hall1">
             <label for="Hall">Hall 001</label>
            
             <input id="Hall2" type="radio" name="hallNumber" value="Hall2">
             <label for="Hall">Hall 002</label>
            
             <input id="Hall3" type="radio" name="hallNumber" value="Hall3"> 
             <label for="Hall">Hall 003</label><br><br>

               <input id="Hall4" type="radio" name="hallNumber" value="Hall4">
             <label for="Hall">Hall 004</label>
            
             <input id="Hall5" type="radio" name="hallNumber" value="Hall5">
             <label for="Hall">Hall 005</label>
            
             <input id="Hall6" type="radio" name="hallNumber" value="Hall6"> 
             <label for="Hall">Hall 006</label><br><br><br><br>

            </div>

            <label for="participants">No of Participants:</label>
            <input type="number" min="0" id="participants" name="participantNo"   value="{{ $event->participantNo }}"><br><br><br>

           <!-- <center><button type="submit" value="Save All the Details"></center> -->




           <center> <input type="submit" value="Save"class="btn btn-primary"></button><center>
           </center>
        </div>
 
<!--Split end-->
           
        
</form> 
</div>
@endsection