@extends('Layouts.app')

@section('content')

    <!--header part which shows the path to the current page-->
    <div>
        <br>
        <a href               = "SCHome" style="font-family:calibri;font-size:18px;"> Home  </a>
        <text> > </text>
        <a href               = "/RM" style="font-family:calibri;font-size:18px;"> Room Management </a>

        <a href               = "#useraccount" target="_blank">
        <button class         = "bttn1"><i class="fas fa-user"></i>  My Account</button>
        </a><br><br>
        <hr class             = "line2">
    </div>
  
    <div class="outerMostWrap">
    <div class="container">
    <div class="wrapper1">
        <div class="wrapper2">      
            <div class="row">
                <div class="col-12 text-center pt-5 txtSection">
                    <h1 class="display-one mt-5">Room Management</h1>
                    <p>Welcome to the Hotel Room management section</p>
                    <br>
                    <a href="/RM/roomList" class="btn btn-info btn-lg font-weight-bold"> Room List </a>
                </div>
            </div>
        </div> 
    </div></div></div>
@endsection