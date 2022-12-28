@extends('housekeepers.layout')

@section('content1')
<a href               = "{{ url('/') }}"style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > Maintenance Management</text> 
<br>
<hr class             = "line2">
@endsection

@section('content')
<div style="background-image: url({{asset("hsImages/bc1.jpg")}});"><br><br><br><br>
  <div class="container" style="opacity:0.99; background-color:white;"><br>

      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif

      <div class="row">
        <div class = "col-lg-12"><br>
        <h3 style="margin-left:50px;"><u><b>List of Housekeepers</b></u></h3>
          <div class="float-right">
            <div class="btn-group" role="group" aria-label="Basic example">
              <a class="btn btn-outline-primary" href = "{{ route('housekeepers.create') }}">Add Housekeeper</a>
              <a class="btn btn-outline-primary" href = "{{ route('tasks.index') }}">List of Task</a>
              <a class="btn btn-outline-success" href = "{{ URL::to('exportToPdf') }}">Export to PDF</a>
            </div>
          </div>
          </div>
      </div>
      <br><br>

      <table class="table table-bordered">
          <tr class="table-info">
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>NIC</th>
            <th>House No</th>
            <th>Street</th>
            <th>City</th>
            <th>Hired Agency Name</th>
            <th>Gender</th>
            <th>Contact No</th>
            <th width="250px">Action</th>
          </tr>
          @foreach ($housekeepers as $housekeeper)
          <tr>
            <td>{{ $housekeeper->housekeeper_id }}</td>
            <td>{{ $housekeeper->first_Name }}</td>
            <td>{{ $housekeeper->last_Name }}</td>
            <td>{{ $housekeeper->nic_Number }}</td>
            <td>{{ $housekeeper->house_Number }}</td>
            <td>{{ $housekeeper->street }}</td>
            <td>{{ $housekeeper->city }}</td>
            <td>{{ $housekeeper->hired_Agency_Name }}</td>
            <td>{{ $housekeeper->gender }}</td>
            <td>{{ $housekeeper->contact_Number }}</td>
            <td>
                  <form action="{{ route('housekeepers.destroy',$housekeeper->housekeeper_id) }}" method = "POST">
                      <a  class="btn btn-primary btn-sm" href = "{{ route('housekeepers.edit',$housekeeper->housekeeper_id) }}">Edit</a>
                      <a  class="btn btn-info btn-sm" href = "{{ route('housekeepers.show',$housekeeper->housekeeper_id) }}">Task</a>
                      @csrf
                      @method('DELETE')
                      <button onclick="return confirm('Are You Sure You Want to delete this housekeeper? ');" class="btn btn-danger btn-sm">Delete</button>
                  </form>
            </td>
          </tr>
          @endforeach
      </table>
      {{ $housekeepers->links() }} 
      <br><br><br>
  </div><br><br><br>
</div>
@endsection