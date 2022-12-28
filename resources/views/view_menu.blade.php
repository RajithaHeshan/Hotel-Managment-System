<!DOCTYPE HTML>
<html>
    <head>
        <title>Inventory Management - Menus</title>
        
        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="{{ asset('css/diningStyles.css') }}">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- <link href = "/css/invCreate.css" rel="stylesheet"> -->
        <script src = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
    </head>
    <body>
      <header>
        <div class = "header">
          <a href = "#home">
            <img src="{{ asset('pictures/SSLogo.jpg') }}" class="logo" height="80px" width="160px" >
          </a><br>
          <font size = "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
        </div>
      </header>

      <div class = "topnav">
        <a href  = "#RoomBooking">Room Booking</a>
        <a href  = "#Event">Event Management</a>
        <a href  = "#Emp">Employee Management</a>
        <a href  = "../RM">Room Management</a>
        <a href  = "#Maint">Maintenance</a>
        <a href  = "#Dining">Dining</a>
        <a href  = "#Inv">Inventory</a>
        <a href  = "#Fin">Financial</a>
      </div>

      <div class="container-fluid">
        <hr class = "line2"><br>
        <a href = "#home" style="font-family:calibri;font-size:18px;"> Home  </a>
        <text> > </text>
        <a href = "#Inv" style="font-family:calibri;font-size:18px;"> Inventory Management </a>
        <text> > </text>
        <a href = "#New" style="font-family:calibri;font-size:18px;"> New Entry </a>
        <a href = "#useraccount" target="_blank">
        <button class = "bttn1"><i class="fas fa-user"></i>  My Account</button>
        </a><br><br>
        <hr class = "line2">
      </div>

      

      <div class="container-fluid">
        <div class="form-group has-search">
            <span class="fa fa-search form-control-feedback"></span>
            <input type="text" class="form-control w-75" placeholder="Search">
          </div>

          <table class="table table-light">
            <thead class="p-3">
              <tr>
                <th scope="col">Country</th>
                <th scope="col">Category</th>
                <th scope="col">Meal Code</th>
                <th scope="col">Menu</th>
                <th scope="col">Small Poriton Price</th>
                <th scope="col">Medium Poriton Price</th>
                <th scope="col">Laege Poriton Price</th>
                <th scope="col">Edit / Delete </th>
              </tr>
            </thead>
            <tbody>
              @foreach($dinein as $dinein)
              <tr>
                  <td>{{$dinein->country}}</td>
                  <td>{{$dinein->category}}</td>
                  <td>{{$dinein->meal_code}}</td>
                  <td>{{$dinein->menu}}</td>
                  <td>{{$dinein->small_portion_price}}</td>
                  <td>{{$dinein->medium_portion_price}}</td>
                  <td>{{$dinein->large_portion_price}}</td>
                  <td class="text-center">
                      <a href="{{ route('dinein.edit', $dinein->id)}}" class="btn btn-primary btn-sm">Edit</a>
                      <form action="{{ route('dinein.destroy', $dinein->id)}}" method="post" style="display: inline-block">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                  </td>
              </tr>
              @endforeach
          
            </tbody>
          </table>
          <hr class = "line2">
          <div>
            <a href="../dineInReport" class="btn btn-success btn-sm">Download Report</a>
          </div>
      </div>

    </body>

</html>