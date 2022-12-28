<!DOCTYPE HTML>
<html>
    <head>
        <title>Inventory Management New Entry</title>
        <link href    = "/css/main.css" rel="stylesheet">
        <link href    = "/css/table.css" rel="stylesheet">
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
  <a href             = "#RoomBooking">Room Booking</a>
  <a href             = "#Event">Event Management</a>
  <a href             = "#Emp">Employee Management</a>
  <a href             = "#RoomMana">Room Management</a>
  <a href             = "#Maint">Maintenance</a>
  <a href             = "#Dining">Dining</a>
  <a href             = "#Inv">Inventory</a>
  <a href             = "#Fin">Financial</a>

</div>
<hr class             = "line2">
<br>
<a href               = "SCHome" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "InvHome" style="font-family:calibri;font-size:18px;"> Inventory Management </a>
<text> > </text>
<a href               = "InvUpdate" style="font-family:calibri;font-size:18px;"> Update Entry </a>

</a><br><br>
<hr class             = "line2">

<table>
    <tr>
      <th>Item ID</th>
      <th>Item Name</th>
      <th>Item Type</th>
      <th>Supplier Name</th>
      <th>Unit Price</th>
      <th>Quantity</th>
      <th>Description</th>
      <th>Update</th>
    </tr>
    @foreach($items as $item)
    <tr>
      <td>{{$item['item_ID']}}</td>
      <td>{{$item['item_Name']}}</td>
      <td>{{$item['item_Type']}}</td>
      <td>{{$item['supplier_Name']}}</td>
      <td>{{$item['unit_Price']}}</td>
      <td>{{$item['quantity']}}</td>
      <td>{{$item['description']}}</td>
      <td>
          <a href={{"edit/".$item['id']}}>Update</a>
      </td>
    </tr>
    @endforeach
  </table>
  

<hr class             = "line2">
</body>

</html>