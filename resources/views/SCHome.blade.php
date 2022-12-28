<!DOCTYPE HTML>
<html>
    <head>
        <title>Shereen Chalet</title>
        <link href    = "/css/main.css" rel="stylesheet">
        <link href    = "/css/invCreate.css" rel="stylesheet">
        <link href    = "/css/SCHome.css" rel="stylesheet">
        <script src   = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <header>
<div class            = "header">
<a href               = "SCHome">
  <img src            = "/pictures/SSLogo.jpg" class="logo" height="80px" width="160px" >
</a><br>
	<font size           = "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
</div>
</header>
<div class            = "topnav">
  <a href             = "/index">Room Booking</a>
  <a href             = "eventHome">Event Management</a>
  <a href             = "{{ route('employees.index') }}">Employee Management</a>
  <a href             = "RM">Room Management</a>
  <a href             = "{{ route('housekeepers.index') }}">Maintenance</a>
  <a href             = "{{ route('dinein.create') }}">Dining</a>
  <a href             = "InvHome">Inventory</a>
  <a href             = "users">Financial</a>

</div>
<hr class             = "line2">
<br>
<a href               = "SCHome" style="font-family:calibri;font-size:18px;"> Home  </a>


</a><br><br>
<hr class             = "line2">
<div class="grid-container">
<div class="container">
  <img src="/pictures/booking.jpg" alt="New Entry" class="image" style="width:50%">
  <div class="middle">
  <a href="/index" class="btn">Room Booking</a>
  </div>
</div>
<div class="container">
  <img src="/pictures/event.png" alt="View Entry" class="image" style="width:50%">
  <div class="middle">
  <a href="eventHome" class="btn">Event Management</a>
  </div>
</div>
<div class="container">
  <img src="/pictures/employee.jpg" alt="Update Entry" class="image" style="width:50%">
  <div class="middle">
  <a href="{{ route('employees.index') }}" class="btn">Employee Management</a>
  </div>
</div> 
<div class="container">
  <img src="/pictures/room.png" alt="Delete Entry" class="image" style="width:50%">
  <div class="middle">
  <a href="RM" class="btn">Room Management</a>
  </div>
</div>
<div class="container">
  <img src="/pictures/maintenance.jpg" alt="Reports" class="image" style="width:50%">
  <div class="middle">
  <a href="{{ route('housekeepers.index') }}" class="btn">Maintenance</a>
  </div>
</div>
<div class="container">
  <img src="/pictures/dine.jpg" alt="Return Items" class="image" style="width:50%">
  <div class="middle">
  <a href="{{ route('dinein.create') }}" class="btn">Dining</a>
  </div>
</div>
<div class="container">
  <img src="/pictures/inv.png" alt="Return Items" class="image" style="width:50%">
  <div class="middle">
  <a href="InvHome" class="btn">Inventory</a>
  </div>
</div>
<div class="container">
  <img src="/pictures/financial.png" alt="Return Items" class="image" style="width:50%">
  <div class="middle">
  <a href="users" class="btn">Financial</a>
  </div>
</div>
  
</div>


<hr class             = "line2">
</body>

</html>