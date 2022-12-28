<!DOCTYPE HTML>
<html>
    <head>
        <title>Inventory Report</title>
        <script src   = "https://kit.fontawesome.com/85c9cbf9ed.js" crossorigin="anonymous"></script>
        <style>
            header {
                overflow                    : hidden;
                background-color            : #464040;
                padding                     : 30px 10px;
                text-align: center;
            }
            header a {
                float                       : left;
                color                       : white;
                text-align                  : center;
                padding                     : 15px;
                text-decoration             : none;
                font-size                   : 18px;
                line-height                 : 30px;
                border-radius               : 6px;
            }
            table {
                margin            : auto;
                justify-content   : center;
                width             : 100%;
            }
            table,th,td {
                border            : 2px solid #000000;
                border-collapse   : collapse;
            }
            th,td {
                padding           : 10px;
            }
            th {
                text-align        : center;
                background-color  : #847979;
                font-family       : 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight       : bolder;
            }
            td {
                text-align        : center;
                background-color  : white;
                font-family       : 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight       : lighter;
            }
            caption{
                font-size: 20px;
                font-family       : 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
    <header>
<div class            = "header">
  <img src            = {{public_path("/pictures/SSLogo.jpg")}} height="80px" width="160px" >
<br>
	<font size           = "25" style="font-family:century gothic;" color="white" align="center"> Shereen Chalet <b> Kalpitiya </b> </font>
</div>
</header>
        <hr class     = "line2">

        <table>
            <caption>Return Item Report</caption>
            <tr>
              <th>Item ID</th>
              <th>Item Name</th>
              <th>Fault</th>
              <th>More Details</th>
              <th>Supplier Name</th>
              <th>Date</th>
            </tr>
            @foreach ($items as $item)
            <tr>
              <td>{{ $item['item_ID'] }}</td>
              <td>{{ $item['item_Name'] }}</td>
              <td>{{ $item['reason'] }}</td>
              <td>{{ $item['more_Details'] }}</td>
              <td>{{ $item['supplier_Name'] }}</td>
              <td>{{ $item['updated_at'] }}</td>
            </tr> 
            @endforeach
            </table>
            <hr class = "line2">
           

    </body>
</html>