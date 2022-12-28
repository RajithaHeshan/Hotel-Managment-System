<!DOCTYPE HTML>
<html>
    <head>
        <title>Inventory Management New Entry</title>
        <link href    = "/css/main.css" rel="stylesheet">
        <link href    = "/css/invCreate.css" rel="stylesheet">
        <script src   = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
        <style>
          input[type=submit]{
            width                       : 240px;
            vertical-align              : middle;
            align-content               : center;
            background-color            : #018383;
            color                       : white;
            padding                     : 12px;
            margin                      : 8px 200px;
            border                      : none;
            border-radius               : 10px;
            cursor                      : pointer;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
          }
        </style>
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
<a href               = "InvCreate" style="font-family:calibri;font-size:18px;"> New Entry </a>
<a href               = "#useraccount" target="_blank">

</a><br><br>
<hr class             = "line2">
<div id               = "ssDiv">
  
    <form action      = "InvCreate" method="POST">
      @csrf
      <label for      = "id">Item ID : </label>
      <input type     = "text" id="id" name="ItemID" required><br>
      <label for      = "iName">Item Name : </label>
      <input type     = "text" id="iName" name="ItemName" required><br>
      <label for      = "type">Item Type : </label>
      <select id      = "type" name="ItemType" required>
      <option value   = "electrical">Electrical</option>
      <option value   = "furniture">Furniture</option>
      <option value   = "food">Food</option>
      <option value   = "Stationary">Stationary</option>
      <option value   = "other">other</option>
      </select><br>
      <label for      = "supName">Supplier's Name : </label>
      <input type     = "text" id="supName" name="SuppliersName" required><br>
      <label for      = "uPrice">Unit Price : </label>
      <input type     = "number" id="uPrice" name="UnitPrice" placeholder="Rs." required><br>
      <label for      = "qty">Quantity : </label>
      <input type     = "number" id="qty" name="Quantity" required><br>
      <label for      = "des">Description : </label>
      <input type     = "text" id="des" name="Description" placeholder="More Details.."><br>
      <input type     = "submit" value="Submit">
    </form>
  
</div> 


<hr class             = "line2">
</body>

</html>