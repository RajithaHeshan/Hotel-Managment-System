<!DOCTYPE HTML>
<html>
    <head>
        <link href="/css/index.css" rel="stylesheet">
        <title>Inventory Management New Entry</title>
        <link href    = "/css/main.css" rel="stylesheet">
        <link href    = "/css/invCreate.css" rel="stylesheet">
        <script src   = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <header>
<div class            = "header">
<a href               = "#home">
  <img src            = "/pictures/SSLogo.jpg" class="logo" height="80px" width="160px" >
</a><br>
	<font size           = "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
</div>
</header>
<div class            = "topnav">
  <a href             = "">Room Booking</a>
  <a href             = "#Event">Event Management</a>
  <a href             = "#Emp">Employee Management</a>
  <a href             = "../RM">Room Management</a>
  <a href             = "#Maint">Maintenance</a>
  <a href             = "#Dining">Dining</a>
  <a href             = "#Inv">Inventory</a>
  <a href             = "#Fin">Financial</a>

</div>
<hr class             = "line2">
<br>
<a href               = "../SCHome" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "#index" style="font-family:calibri;font-size:18px;"> Room Booking Management </a>
<text> > </text>
<a href               = "#create" style="font-family:calibri;font-size:18px;"> New Entry </a>
<a href               = "#useraccount" target="_blank">

</a><br><br>
<hr class             = "line2">

<table border="1">
<tr>
    <td>Customer ID</td>
    <td>Name</td>
    <td>Contact No</td>
    <td>Email</td>
    <td>Address</td>
    <td>Booking ID</td>
    <td>Room ID</td>
    <td>Checked In Date</td>
    <td>Checked Out Date</td>
    <td>Operation</td>
    
</tr>
@foreach ($customers as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->cus_name}}</td>
    <td>{{$item->contact_No}}</td>
    <td>{{$item->email}}</td>
    <td>{{$item->address}}</td>
    <td>{{$item->book_ID}}</td>
    <td>{{$item->room_ID}}</td>
    <td>{{$item->checked_in}}</td>
    <td>{{$item->checked_out}}</td>
    <td><a href={{"deletelist/".$item['id']}}><i class="fa fa-trash"></i></a>
        <a href={{"editlist/".$item['id']}}><i class="fa fa-edit"></i></a>
    </td>
  
</tr>
@endforeach
</table>
<div class="b_container">
<a class="addbtn" href="/create">Add details</a>
<a class="rep_btn" href="/bookPdf">Generate Report</a>
</div>


<hr class             = "line2">
</body>

</html>