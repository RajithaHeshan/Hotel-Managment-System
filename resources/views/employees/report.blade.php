<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Details Report</title>
    <style>
          th, td {
            font-size: 12px;
            }
            h2 {
              text-align: center;
              }
    </style>
  </head>
  <body>
    <h2>Employee Details Report</h2>
    <br>
    <table class="table table-bordered">
    <thead>
      <tr style="background-color: #b0e796; color: #404040">
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Birth Date</th>
        <th>Address</th>
        <th>Email</th>
        <th>Contact Number</th>
        <th>Position</th>
        <th>Salary</th>
        <th>Last Paid Date</th>
      </tr>
      </thead>
      <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->EmployeeName }}</td>
            <td>{{ $employee->BirthDate }}</td>
            <td>{{ $employee->Address }}</td>
            <td>{{ $employee->Email }}</td>
            <td>{{ $employee->ContactNo }}</td>
            <td>{{ $employee->Position }}</td>
            <td>{{ $employee->Salary }}</td>
            <td>{{ $employee->LastPaidDate }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>