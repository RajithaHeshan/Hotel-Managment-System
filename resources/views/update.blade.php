<!DOCTYPE HTML>
<html>
    <head>
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
<div id               = "ssDiv">
  
    <form action      = "/edit" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $data['id'] }}">
      <label for      = "id">Item ID : </label>
      <input type     = "text" id="id" name="ItemID" value="{{$data['item_ID']}}" ><br>
      <label for      = "iName">Item Name : </label>
      <input type     = "text" id="iName" name="ItemName" value="{{$data['item_Name']}}" ><br>
      <label for      = "type">Item Type : </label>
      <select id      = "type" name="ItemType" value="{{$data['item_Type']}}" >
      <option value   = "electrical">Electrical</option>
      <option value   = "furniture">Furniture</option>
      <option value   = "food">Food</option>
      <option value   = "Stationary">Stationary</option>
      <option value   = "other">other</option>
      </select><br>
      <label for      = "supName">Supplier's Name : </label>
      <input type     = "text" id="supName" name="SuppliersName" value="{{$data['supplier_Name']}}" ><br>
      <label for      = "uPrice">Unit Price : </label>
      <input type     = "number" id="uPrice" name="UnitPrice" value="{{$data['unit_Price']}}" placeholder="Rs." ><br>
      <label for      = "qty">Quantity : </label>
      <input type     = "number" id="qty" name="Quantity" value="{{$data['quantity']}}" required><br>
      <label for      = "des">Description : </label>
      <input type     = "text" id="des" name="Description" value="{{$data['description']}}" placeholder="More Details.."><br>
      <input type     = "submit" value="Update">
    </form>
  
</div> 


<hr class             = "line2">
</body>

</html>