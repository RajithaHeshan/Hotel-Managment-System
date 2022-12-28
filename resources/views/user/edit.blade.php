<!DOCTYPE HTML>
<html>
    <head>
        <link href="/css/index.css" rel="stylesheet">
        <title>Inventory Management New Entry</title>
        <link href    = "/css/main.css" rel="stylesheet">
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
<a href               = "#home" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "#index" style="font-family:calibri;font-size:18px;"> Room Booking Management </a>
<text> > </text>
<a href               = "#create" style="font-family:calibri;font-size:18px;"> New Entry </a>
<a href               = "#useraccount" target="_blank">

</a><br><br>
<hr class             = "line2">
<div>
    <h2>Update booking details</h2><br>

    <form action="/editlist" method="POST">
      @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
  <div class="box">
  

  <div class="form-group">
    <label for="exampleInputName">Customer Name</label>
    <input type="name" name="cus_name" value="{{$data->cus_name}}"  class="form-control" id="exampleInputName" placeholder="">
  </div>
  <br><br>

  <div class="form-group">
    <label for="exampleInputContactNo">Contact No</label>
    <input type="text" name="contact_No" value="{{$data->contact_No}}" class="form-control" id="exampleInputContactNo" placeholder="">
  </div>
  <br><br>

  <div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input type="email" name="email" value="{{$data->email}}" class="form-control" id="exampleInputEmail" placeholder="">
  </div>
  <br><br>

  <div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <input type="text" name="address" value="{{$data->address}}" class="form-control" id="exampleInputAddress" placeholder="">
  </div>
  <br><br>

  <div class="form-group">
    <label for="exampleInputBookID">Booking ID</label>
    <input type="text" name="book_ID" value="{{$data->book_ID}}" class="form-control" id="exampleInputBookID" placeholder="">
  </div>
  <br><br>

  <div class="form-group">
    <label for="exampleInputRoomID">Room ID</label>
    <input type="text" name="room_ID" value="{{$data->room_ID}}" class="form-control" id="exampleInputRoomID" placeholder="">
  </div>
  <br><br>

  <div class="form-group">
    <label for="exampleInputCIdate">Checked In Date</label>
    <input type="date" name="checked_in" value="{{$data->checked_in}}" class="form-control" id="exampleInputCDdate" placeholder="">
  </div>
  <br><br>

  <div class="form-group">
    <label for="exampleInputCOdate">Check out Date</label>
    <input type="date" name="checked_out" value="{{$data->checked_out}}" class="form-control" id="exampleInputCOdate" placeholder="">
  </div>
  <br><br>
</div>  
  <div class="btn1">
  <button type="submit" class=" btn-primary">Update</button>
</div>
</form>
    </div>


<hr class             = "line2">
</body>

</html>