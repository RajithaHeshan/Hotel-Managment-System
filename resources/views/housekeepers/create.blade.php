@extends('housekeepers.layout')

@section('content1')
<a href               = "{{ url('/') }}" style="font-family:calibri;font-size:18px;"> Home  </a>
<text> > </text>
<a href               = "{{ route('housekeepers.index') }}" style="font-family:calibri;font-size:18px;"> Maintenance Management </a>
<text> > New Housekeeper</text>
<br>
<hr class             = "line2">
@endsection

@section('content')
<div style="background-image: url({{asset("hsImages/bc2.jpg")}});"><br><br>
  <div class="container" style="opacity:0.88; background-color:white;"><br>

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
              <h3 style="margin-left:50px;"><u><b>New Housekeeper</b></u></h3>
              <div class="float-right">
                <div class="btn-group">
                  <a class="btn btn-outline-primary" href = "{{ route('housekeepers.index') }}">List of Housekeepers</a>
                  <a class="btn btn-outline-primary" href = "{{ route('tasks.index') }}">List of Task</a>
                </div>
              </div>
            </div>
          </div>
          <br><br>

            <form action = "{{ route('housekeepers.store') }}" method="POST">
              @csrf

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputFName" class="font-weight-bold" >First Name</label>
                  <input type="text" class="form-control" name="first_Name" placeholder="Enter First Name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputLName" class="font-weight-bold">Last Name</label>
                  <input type="text" class="form-control" name="last_Name" placeholder="Enter Last Name" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputAddress" class="font-weight-bold">Hired Agency Name</label>
                <input type="text" class="form-control" name="hired_Agency_Name" placeholder="Enter Agency Name" required>
              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputNo" class="font-weight-bold">No</label>
                  <input type="text" class="form-control" name="house_Number" placeholder="Enter House No" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputStreet" class="font-weight-bold">Street</label>
                  <input type="text" class="form-control" name="street" placeholder="Enter Street Name" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputCity" class="font-weight-bold">City</label>
                  <input type="text" class="form-control" name="city" placeholder="Enter City Name" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputGender" class="font-weight-bold">Gender</label>
                
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="Radios1" value="Male" required>
                        <label class="form-check-label" for="exampleRadios1">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="Radios2" value="Female" required>
                        <label class="form-check-label" for="exampleRadios2">Female</label>
                    </div>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputNo" class="font-weight-bold">Contact Number</label>
                  <input type="tel" class="form-control" name="contact_Number" placeholder="Enter Contact Number" pattern="[0-9]{10}" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputStreet" class="font-weight-bold">NIC Number</label>
                  <input type="text" class="form-control" name="nic_Number" placeholder="Enter NIC Number (Ex :XXXXXXXXXV)" pattern="[0-9]{9}[V]" required>
                </div>
              </div><br>
  
              <button type="submit" class="btn btn-primary">Submit</button>
            </form><br><br>
  </div><br><br><br>
</div>
@endsection