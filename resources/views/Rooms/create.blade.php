@extends('Layouts.app')

@section('content')

<!--this form will submit a POST request(with out showing the data in the URL) to /room/create/room route.-->
    <!--header part which shows the path to the current page-->
    <div>
        <br>
        <a href               = "/" style="font-family:calibri;font-size:18px;"> Home  </a>
        <text> > </text>
        <a href               = "/RM" style="font-family:calibri;font-size:18px;"> Room Management </a>
        <text> > Add New Room</text>
            
        <a href               = "#useraccount" target="_blank">
        <button class         = "bttn1"><i class="fas fa-user"></i>  My Account</button>
        </a><br><br>
        <hr class             = "line2">      
    </div>    
    
    <div class="container">

        <div class="row">
            <div class="col-12 pt-2">
                <a href="/RM/roomList" class="btn btn-dark btn-sm float-right">Go back</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-1">
                    <h1 class="display-4">Add Room</h1>
                    <p>Fill and submit this form to create and save the new room</p>
                    <hr class="mb-1">
                </div>
            </div>
        </div>

        <div class="wrapper1">
            <div class="wrapper4">
               
                            <!--if any errors are there in the input data, this alert will shown-->
                            {{-- @if($errors->any())
                                <div class="alert alert-danger">
                                    <strong>something wrong with your input data !!</strong>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}
        
                            <form action="" method="POST" id="form2">
                                @csrf
                                <div class="row">
                                    <div class="control-group col-6 mt-2">
                                        <label for="roomNo" style="color: white">Room No</label>
                                        <input type="text" id="roomNo" class="form-control" name="roomNo"
                                               placeholder="Rxxx" required>
                                    </div>
                                    <div class="control-group col-6 mt-2">
                                        <label for="maxNoOfAdults" style="color: white">Max no of Adults</label>
                                        <input type="number" id="maxNoOfAdults" class="form-control" name="maxNoOfAdults" required>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="control-group col-6 mt-2">
                                        <label for="floorNo" style="color: white">Floor No</label>
                                        <input type="number" id="floorNo" class="form-control" name="floorNo" required>
                                    </div>
                                    <div class="control-group col-6 mt-2">
                                        <label for="maxNoOfChildren" style="color: white">Max no of Children</label>
                                        <input type="number" id="maxNoOfChildren" class="form-control" name="maxNoOfChildren" required>
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="control-group col-6 mt-3">
                                        <label for="noOfBeds" style="color: white">No of Beds</label>
                                        <input type="number" id="noOfBeds" class="form-control" name="noOfBeds" required>
                                    </div>
                                    <div class="control-group col-6 mt-3">
                                        <label for="roomType" style="color: white">Room Type <br></label>
                                        <select  class="form-control" name="roomType" id="roomType">
                                            <option value="single bedroom">Single bedroom</option>
                                            <option value="double bedroom">Double bedroom</option>
                                            <option value="master bedroom">Master bedroom</option>
                                            <option value="family bedroom">Family room</option>   
                                            <option value="other">other</option> 
                                        </select>  
                                    </div>
                                </div>
        
                                <div class="row">
                                    <div class="control-group col-6 mt-3">
                                        <label for="price" style="color: white">Price (Rs:)</label>
                                        <input type="text" class="form-control" step="any" id="price" name="price" placeholder="2000.00" required>
                                    </div>
                                    <div class="control-group col-6 mt-3">
                                        <label for="roomStatus" style="color: white">Room Status </label>
                                        <select  class="form-control" name="roomStatus" id="roomStatus">
                                            <option value="Available">Available</option>
                                            <option value="underRenovation">under Renovation</option>
                                        </select>
                                        <text style="color: white">(if the room is under renovation- set the status as 'Unavailable')</text>
                                    </div>
                                    
                                </div>
        
                                <div class="control-group col-12 ">
                                    <label for="body" style="color: white; ">Room Description</label>
                                    <textarea id="body" class="form-control" name="description" placeholder="Enter the room description here"
                                              rows=""  required></textarea>
                                </div>
                                
                                <br>
                                <div class="row mt-2">
                                    <div class="control-group col-12 text-center">
                                        <button id="btn-submit" class="btn btn-info font-weight-bold btn-lg">
                                            Add Room
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
        
                    </div><br><br>

    </div>

@endsection