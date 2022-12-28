<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <img src= "{{ public_path('images/SSLogo.jpg')}}" class="float-left ml-3" width="160px" height="80px">
    <title>Housekeeper details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <br><h3 style="margin-left:235px;"><u><b>Details of Housekeepers</b></u></h3>
    <h5 style="margin-left:235px;">Shereen Chalet, Kalpitiya</h5><br><br>

        <div style="margin-left:12px; margin-right:12px;">
            <table class="table table-striped table table-bordered">
                <thead>
                    <tr class="table-primary">
                    <th><small><strong>ID</strong></small></th>
                    <th><small><strong>First_Name</strong></small></th>
                    <th><small><strong>Last_Name</strong></small></th>
                    <th><small><strong>NIC</strong></small></th>
                    <th><small><strong>City</strong></small></th>
                    <th><small><strong>Agency</strong></small></th>
                    <th><small><strong>Gender</strong></small></th>
                    <th><small><strong>Contact</strong></small></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($housekeepers as $housekeeper)
                    <tr>
                    <td><small>{{ $housekeeper->housekeeper_id }}</small></td>
                    <td><small>{{ $housekeeper->first_Name }}</small></td>
                    <td><small>{{ $housekeeper->last_Name }}</small></td>
                    <td><small>{{ $housekeeper->nic_Number }}</small></td>
                    <td><small>{{ $housekeeper->city }}</small></td>
                    <td><small>{{ $housekeeper->hired_Agency_Name }}</small></td>
                    <td><small>{{ $housekeeper->gender }}</small></td>
                    <td><small>{{ $housekeeper->contact_Number }}</small></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
</body>

</html>