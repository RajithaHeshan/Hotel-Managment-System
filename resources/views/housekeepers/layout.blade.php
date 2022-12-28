<!DOCTYPE html>
<html>
<head>
        <title>Maintenance Management</title>
        <link href    = "{{asset("css/main.css")}}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src   = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
        
</head>
<body>
<header>
<div class            = "header">
<a href               = "{{ url('/') }}">
  <img src            = "{{asset("images/SSLogo.jpg")}}" class="logo" height="80px" width="160px">
</a><br>
	<font size        = "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b></font>
</div>
</header>
<div class            = "topnav">
  <a href             = "{{ url('index') }}">Room Booking</a>
  <a href             = "{{ url('/eventHome') }}">Event Management</a>
  <a href             = "{{ route('employees.index') }}">Employee Management</a>
  <a href             = "../RM">Room Management</a>
  <a href             = "{{ route('housekeepers.index') }}">Maintenance</a>
  <a href             = "{{ route('dinein.index') }}">Dining</a>
  <a href             = "{{ url('InvHome') }}">Inventory</a>
  <a href             = "{{ url('/users') }}">Financial</a>
</div>
<br>
<div>
  @yield('content1')
</div>
<div>
  @yield('content')
</div>
</body>

</html>