
@extends('budgets.layout')
@section('content')
<link rel="stylesheet" href="/css/createex.css"/>
<link rel="stylesheet" href="/css/home.css"/>
<div class="bac">
<header>
    
<div class= "header">
<a href= "#home">
<img src= "/pictures/SSLogo.jpg" class="logo" height="80px" width="160px" >
</a><br>
<font size= "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
</div>
</header>
<div class            = "topnav">
    <a href             = "/index">Room Booking</a>
    <a href             = "/eventHome">Event Management</a>
    <a href             = "{{ route('employees.index') }}">Employee Management</a>
    <a href             = "/RM">Room Management</a>
    <a href             = "{{ route('housekeepers.index') }}">Maintenance</a>
    <a href             = "{{ route('dinein.create') }}">Dining</a>
    <a href             = "/InvHome">Inventory</a>
    <a href             = "/users">Financial</a>

</div>
<hr class             = "line2">
<br>
<a href               = "/SCHome" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "#Inv" style="font-family:calibri;font-size:18px;"> Financial Management </a>
<text> > </text>
<a href               = "#New" style="font-family:calibri;font-size:18px;"> New Entry </a>
<a href               = "#useraccount" target="_blank">

</a><br><br>
<hr class             = "line2"> <br><br><br>
<h1><center> Welcome To Financial Management</center></h1><br>

<div id="box5" class="box"><table><tr>
<td><a class="btn btn-primary4" href="{{ route('budgets.index') }}" target="_blank"> Plan Budget</a> </td>
<td><a class="btn btn-primary5" href="{{ route('expenditures.index') }}" target="_blank"> Input Expenditures</a> </td>
<td><a class="btn btn-primary6" href="{{ route('incomes.index') }}" target="_blank"> Input Incomes</a></td></tr> </table>
</div> <br><br><br>
</div>
@endsection