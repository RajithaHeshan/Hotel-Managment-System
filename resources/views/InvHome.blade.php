aaa<!DOCTYPE HTML>
<html>
    <head>
        <title>Inventory Management New Entry</title>
        <link href    = "/css/main.css" rel="stylesheet">
        <link href    = "/css/invCreate.css" rel="stylesheet">
        <link href    = "/css/invHome.css" rel="stylesheet">
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
<text> > </text>
<a href               = "InvHome" style="font-family:calibri;font-size:18px;"> Inventory Management </a>

</a><br><br>
<hr class             = "line2">
<div class="grid-container">
<div class="container">
  <img src="/pictures/new.png" alt="New Entry" class="image" style="width:50%">
  <div class="middle">
  <a href="InvCreate" class="btn">New</a>
  </div>
</div>
<div class="container">
  <img src="/pictures/view.png" alt="View Entry" class="image" style="width:50%">
  <div class="middle">
  <a href="InvView" class="btn">View</a>
  </div>
</div>
<div class="container">
  <img src="/pictures/edit.png" alt="Update Entry" class="image" style="width:50%">
  <div class="middle">
  <a href="InvUpdate" class="btn">Update</a>
  </div>
</div> 
<div class="container">
  <img src="/pictures/delete.png" alt="Delete Entry" class="image" style="width:50%">
  <div class="middle">
  <a href="InvDelete" class="btn">Delete</a>
  </div>
</div>
<div class="container">
  <img src="/pictures/reports.png" alt="Reports" class="image" style="width:50%">
  <div class="middle">
  <a href="Reports" class="btn">Reports</a>
  </div>
</div>
<div class="container">
  <img src="/pictures/return.png" alt="Return Items" class="image" style="width:50%">
  <div class="middle">
  <a href="Return" class="btn">Returns</a>
  </div>
</div>
  
</div>


<hr class             = "line2">
</body>

</html>