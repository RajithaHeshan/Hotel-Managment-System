<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--use laravel config accessor helper method to accss our app name-->
        <title>Room Management</title> 

        <!--bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--App Header styles-->
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/otherStyles.css">
      
    </head>

    <body>

        <header>
            <div class            = "header">
            <a href               = "#home">
              <img src            = "/images/SSLogo.jpg" class="logo" height="80px" width="160px" >
            </a><br>
                <font size           = "18" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
            </div>
        </header>
        
        <div class            = "topnav">
          <a href             = "/index">Room Booking</a>
          <a href             = "/eventHome">Event Management</a>
          <a href             = "{{ route('employees.index') }}">Employee Management</a>
          <a href             = "#RoomMana" style="background-color: rgb(37, 161, 145);">Room Management</a>
          <a href             = "{{ route('housekeepers.index') }}">Maintenance</a>
          <a href             = "{{ route('dinein.create') }}">Dining</a>
          <a href             = "/InvHome">Inventory</a>
          <a href             = "/users">Financial</a>  
        </div>

        <section>
            @yield('content') <!--this is a blade directive used to bring each content from child views to the layout to load the complete child view-->
        </section>

    
        <!--JS CDN-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src   = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
 

        <!--link the jQuery file-->
        <script src="js/jQuery.js"></script>
        <script src="js/myScripts.js"></script>
    </body>
</html>