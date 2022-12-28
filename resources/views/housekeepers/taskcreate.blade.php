
@extends('housekeepers.layout')

@section('content1')
<a href               = "{{ url('/') }}" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "{{ route('housekeepers.index') }}" style="font-family:calibri;font-size:18px;"> Maintenance Management </a>
<text> > </text>
<a href               = "{{ route('tasks.index') }}" style="font-family:calibri;font-size:18px;">Task List</a>
<text> > New Task</text>
<br>
<hr class             = "line2">
@endsection

@section('content')
<div style="background-image: url({{asset("hsImages/bc3.jpg")}});"><br><br>
  <div class="container" style="opacity:0.99; background-color:white;"><br>

    @if ($errors->any())
        <div class="alert alert-danger">
          <strong> Whoops!There were some problems with your inputs.</strong><br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
    @endif

    <div class="row">
      <div class = "col-lg-12"><br>
        <h3 style="margin-left:50px;"><u><b>Assign Specific Task</b></u></h3>
        <div class="float-right">
          <div class="btn-group">
            <a class="btn btn-outline-primary" href = "{{ route('housekeepers.index') }}">List of Housekeepers</a>
            <a class="btn btn-outline-primary" href = "{{ route('tasks.index') }}">List of Task</a>
            <a class="btn btn-outline-primary" href = "{{ route('housekeepers.index') }}">Back</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>

    <form action = "{{ route('tasks.store') }}" method="POST">
    @csrf

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputID" class="font-weight-bold">Housekeeper ID</label>
          <input type="text" class="form-control" name="housekeeper_id" value = "{{ $housekeeper->housekeeper_id}}" readonly>
        </div>
        <div class="form-group col-md-4">
          <label for="inputFName" class="font-weight-bold">First Name</label>
          <input type="text" class="form-control" name="fisrt_Name" value = "{{ $housekeeper->first_Name}}" readonly>
        </div>
        <div class="form-group col-md-4">
          <label for="inputLName" class="font-weight-bold">Last Name</label>
          <input type="text" class="form-control" name="last_Name" value = "{{ $housekeeper->last_Name}}" readonly>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputRoomNo" class="font-weight-bold" >Room Number</label>
          <input type="text" class="form-control" name="room_ID" placeholder="Enter Room Number" required>
        </div>
      </div>

      <div class="form-group">
          <label for="Textarea" class="font-weight-bold">Special Request/Description</label>
          <textarea  class="form-control" name="description" rows="5"  placeholder="Enter specific task descrition" required></textarea>
      </div>
      

      <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputStatus" class="font-weight-bold">Status</label>
        
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="Radios1" value="Done">
                <label class="form-check-label" for="Radios1">Done</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="Radios2" value="Not Yet" checked>
                <label class="form-check-label" for="Radios2">Not Yet</label>
            </div>
        </div>
      </div><br>
      
      <button type="submit" class="btn btn-primary">Assign</button>
    </form><br><br>
  </div><br><br><br>
</div>
@endsection