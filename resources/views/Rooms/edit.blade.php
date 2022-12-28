@extends('layouts.app')
@section('content')
    
    <!--header part which shows the path to the current page-->
    <div>
        <br>
        <a href               = "/" style="font-family:calibri;font-size:18px;"> Home  </a>
        <text> > </text>
        <a href               = "/RM" style="font-family:calibri;font-size:18px;"> Room Management </a>
        <text> > Edit Room Details</text>
        
        <a href               = "#useraccount" target="_blank">
        <button class = "bttn1"><i class="fas fa-user"></i>  My Account</button>
        </a><br><br>
        <hr class             = "line2">
    </div>

    <div class="container">      
        <!--then show the room details-->
        <div>
            <form action="" method="POST">
                @csrf
                @method('PUT') <!--since this is an update, the form method will be changed to PUT -->

                <div class="col-12 pt-2">
                    <a href="/RM/roomList/{{ $room->id }}" class="btn btn-dark btn-sm float-right">Go back</a>
                    <h1 class="display-one text-center">Edit room {{ ($room->roomNo) }}</h1>
                </div>

                <div class="control-group col-12 ">
                    <label for="body">Room Description</label>
                    <textarea id="body" class="form-control" name="description" style="background-color: #e9ecef;"
                              rows="">{{ $room->description }}</textarea>
                </div>
                <hr>
                <div class="row">
                    <div class="control-group col-6 mt-2">
                        <label for="roomNo">Room No</label>
                        <input type="text" id="roomNo" class="form-control" name="roomNo" style="background-color: #e9ecef;"
                               placeholder="Rxxx" value="{{ $room->roomNo }}">
                    </div>
                    <div class="control-group col-6 mt-2">
                        <label for="maxNoOfAdults">Max no of Adults</label>
                        <input type="number" id="maxNoOfAdults" class="form-control" name="maxNoOfAdults" 
                                value="{{ $room->maxNoOfAdults }}" style="background-color: #e9ecef;">
                    </div>
                </div>

                <div class="row">
                    <div class="control-group col-6 mt-2">
                        <label for="floorNo">Floor No</label>
                        <input type="number" id="floorNo" class="form-control" name="floorNo" 
                                value="{{ $room->floorNo }}" style="background-color: #e9ecef;">
                    </div>
                    <div class="control-group col-6 mt-2">
                        <label for="maxNoOfChildren">Max no of Children</label>
                        <input type="number" id="maxNoOfChildren" class="form-control" name="maxNoOfChildren" 
                                value="{{ $room->maxNoOfChildren }}" style="background-color: #e9ecef;">
                    </div>
                </div>

                <div class="row">
                    <div class="control-group col-6 mt-3">
                        <label for="noOfBeds">No of Beds</label>
                        <input type="number" id="noOfBeds" class="form-control" name="noOfBeds"
                                value="{{ $room->noOfBeds }}" style="background-color: #e9ecef;">
                    </div>
                    <div class="control-group col-6 mt-3">
                        <label for="roomType">Room Type <br></label>
                        <select  class="form-control" name="roomType" id="roomType" style="background-color: #e9ecef;">
                            <option selected="selected">{{ $room->roomType }}</option>
                            <option value="single">Single bedroom</option>
                            <option value="double">Double bedroom</option>
                            <option value="master">Master bedroom</option>
                            <option value="family">Family room</option>    
                        </select>  
                    </div>
                </div>

                <div class="row">
                    <div class="control-group col-6 mt-3">
                        <label for="price">Price (Rs:)</label>
                        <input type="text" class="form-control" step="any" id="price" name="price" 
                                value="{{ $room->price }}" style="background-color: #e9ecef;">
                    </div>
                    <div class="control-group col-6 mt-3">
                        <label for="roomStatus">Room Status </label>
                        <select autocomplete="off" class="form-control" name="roomStatus" id="roomStatus" value="{{ $room->roomStatus }}" style="background-color: #e9ecef;">
                            <option selected="selected">{{ $room->roomStatus }}</option>
                            <option value="Available">Available</option>
                            <option value="under Renovation">under Renovation</option>
                        </select>
                        (if the room is under renovation- set the status as 'under Renovation')
                    </div>                   
                </div>
                <br>
                <div class="row mt-2">
                    <div class="control-group col-12 text-center">
                        <button id="btn-submit" class="btn btn-info font-weight-bold btn-lg">
                            Update
                        </button>
                    </div>
                </div><br><br>
            </form>
        </div>
    </div>
 @endsection
