<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DineIn List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="text-center">
        <h5>DineIn List</h5>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr class="table-danger">
            <th scope="col">Country</th>
            <th scope="col">Category</th>
            <th scope="col">Meal Code</th>
            <th scope="col">Menu</th>
            <th scope="col">Small Poriton Price</th>
            <th scope="col">Medium Poriton Price</th>
            <th scope="col">Laege Poriton Price</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($dineinlist as $report)
            <tr>
                <td>{{ $report->country }}</td>
                <td>{{ $report->category }}</td>
                <td>{{ $report->meal_code }}</td>
                <td>{{ $report->menu }}</td>
                <td>{{ $report->small_portion_price }}</td>
                <td>{{ $report->medium_portion_price }}</td>
                <td>{{ $report->large_portion_price }}</td>
            </tr>
            @endforeach
        </tbody>
        </table>

  </body>
</html>