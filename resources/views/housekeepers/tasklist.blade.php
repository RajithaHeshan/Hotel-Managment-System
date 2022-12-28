@extends('housekeepers.layout')

@section('content1')
<a href               = "{{ url('/') }}" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "{{ route('housekeepers.index') }}" style="font-family:calibri;font-size:18px;"> Maintenance Management </a>
<text> > Task List</text>
<br>
<hr class             = "line2">
@endsection

@section('content')
<div style="background-image: url({{asset("hsImages/bc4.jpg")}});"><br><br><br><br>
  <div class="container" style="opacity:0.98; background-color:white;"><br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
      <div class = "col-lg-12"><br>
        <h3 style="margin-left:50px;"><u><b>List of Tasks</b></u></h3>
        <div class="float-right">
          <div class="btn-group">
            <a class="btn btn-outline-primary" href = "{{ route('housekeepers.index') }}">List of Housekeepers</a>
            <a class="btn btn-outline-primary" href = "{{ route('housekeepers.index') }}">Back</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>

      <table class="table table-bordered">
          <tr class="table-primary">
            <th>Housekeeper ID</th>
            <th>First Name</th>
            <th>Contact Number</th>
            <th>Gender</th>
            <th>Task ID</th>
            <th>Special Request/Description</th>
            <th>Status</th>
            <th>Room ID</th>
            <th width="156px">Action</th>
          </tr>
          @foreach ($data as $row)
          <tr>
            <td>{{ $row->housekeeper_id }}</td>
            <td>{{ $row->first_Name  }}</td>
            <td>{{ $row->contact_Number  }}</td>
            <td>{{ $row->gender  }}</td>
            <td>{{ $row->task_id }}</td>
            <td>{{ $row->description }}</td>
            <td>{{ $row->status }}</td>
            <td>{{ $row->room_ID }}</td>
            <td>
                  <form action="{{ route('tasks.destroy', $row->task_id) }}" method = "POST">
                      <a  class="btn btn-primary btn-sm" href = "{{ route('tasks.edit',$row->task_id) }}">Edit</a>
                      @csrf
                      @method('DELETE')
                      <button  onclick="return confirm('Are You Sure You Want to delete this task? ');" class="btn btn-danger btn-sm">Delete</button>
                  </form>
            </td>
          </tr>
          @endforeach

      </table><br><br><br>
  </div><br><br><br>
</div>
@endsection