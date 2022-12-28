<!DOCTYPE HTML>
<html>
    <head>
        <title>Inventory Management View Entries</title>
        <link href    = "/css/main.css" rel="stylesheet">
        <link href    = "/css/table.css" rel="stylesheet">
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
<text> > </text>
<a href               = "InvView" style="font-family:calibri;font-size:18px;"> View Entries </a>

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
</tr>
@foreach ($items as $item)
<tr>
  <td>{{ $item['item_ID'] }}</td>
  <td>{{ $item['item_Name'] }}</td>
  <td>{{ $item['item_Type'] }}</td>
  <td>{{ $item['supplier_Name'] }}</td>
  <td>{{ $item['unit_Price'] }}</td>
  <td>{{ $item['quantity'] }}</td>
  <td>{{ $item['description'] }}</td>
</tr>
@endforeach
</table>
</div>

<hr class             = "line2">
</body>

</html>