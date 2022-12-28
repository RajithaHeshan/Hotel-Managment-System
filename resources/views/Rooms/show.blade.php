@extends('layouts.app')
@section('content')
    
    <div>
        <br>
        <a href               = "/" style="font-family:calibri;font-size:18px;"> Home  </a>
        <text> > </text>
        <a href               = "/RM" style="font-family:calibri;font-size:18px;"> Room Management </a>
        <text> > View Room</text>
        
        <a href               = "#useraccount" target="_blank">
        <button class         = "bttn1"><i class="fas fa-user"></i>  My Account</button>
        </a><br><br>
        <hr class             = "line2">
    </div>

    <div class="container">
        <div><!--success message of a new room adding will be displayed here-->
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        </div>

        <div class="col-12 pt-2">
            <a href="/RM/roomList" class="btn btn-dark btn-sm float-right">Go back</a>
            <h1 class="display-one">Room {{ ($room->roomNo) }}</h1>
        </div>
        <div class="carousel">     
            <!--add an image or a carousal of room images-->
            <div id="carouselID" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselID" data-slide-to="0"></li>
                    <li data-target="#carouselID" data-slide-to="1"></li>
                    <li data-target="#carouselID" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-interval="1000">
                    <img class="d-block w-100" src="/images/room1.jpg" alt="our rooms">
                    <!-- <img class="d-block w-100" src="../images/room1.jpg" alt="our rooms"> this didn't work after linking this with github and added a new blade called RM-->
                    <div class="carousel-caption"><h4>our rooms</h4></div>
                  </div>
                  <div class="carousel-item" data-interval="1000">
                    <img class="d-block w-100" src="/images/bath1.jpg" alt="attached bathrooms">
                    <div class="carousel-caption"><h4>attached bathrooms</h4></div>
                  </div>
                  <div class="carousel-item" data-interval="1000">
                    <img class="d-block w-100" src="/images/garden1.jpg" alt="calming view">
                    <div class="carousel-caption"><h4>calming view</h4></div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselID" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselID" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

            <!--then show the room details-->
            <div>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="control-group col-12 ">
                        <label for="body">Room Description</label>
                        <textarea id="body" class="form-control" name="description" rows="" readonly>{{ $room->description }}</textarea>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="control-group col-6 mt-2">
                            <label for="roomNo">Room No</label>
                            <input type="text" id="roomNo" class="form-control" name="roomNo" value="{{ $room->roomNo }}" readonly>
                        </div>
                        <div class="control-group col-6 mt-2">
                            <label for="maxNoOfAdults">Max no of Adults</label>
                            <input type="text" id="maxNoOfAdults" class="form-control" name="maxNoOfAdults" value="{{ $room->maxNoOfAdults }}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="control-group col-6 mt-2">
                            <label for="floorNo">Floor No</label>
                            <input type="text" id="floorNo" class="form-control" name="floorNo" value="{{ $room->floorNo }}" readonly>
                        </div>
                        <div class="control-group col-6 mt-2">
                            <label for="maxNoOfChildren">Max no of Children</label>
                            <input type="text" id="maxNoOfChildren" class="form-control" name="maxNoOfChildren" value="{{ $room->maxNoOfChildren }}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="control-group col-6 mt-3">
                            <label for="noOfBeds">No of Beds</label>
                            <input type="text" id="noOfBeds" class="form-control" name="noOfBeds" value="{{ $room->noOfBeds }}" readonly>
                        </div>
                        <div class="control-group col-6 mt-3">
                            <label for="roomType">Room Type <br></label>
                            <input  type="text" class="form-control" name="roomType" id="roomType" value="{{ $room->roomType }}" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="control-group col-6 mt-3">
                            <label for="price">Price (Rs:)</label>
                            <input type="text" class="form-control" step="any" id="price" name="price" value="{{ $room->price }}" readonly>
                        </div>
                        <div class="control-group col-6 mt-3">
                            <label for="roomStatus">Room Status </label>
                            <input type="text"  class="form-control" name="roomStatus" id="roomStatus" value="{{ $room->roomStatus }}" readonly>
                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="col-12 ">
                <a href="/RM/roomList/{{ $room->id }}/edit" class="btn btn-info btn-lg font-weight-bold m-3 mb-5 float-right">Edit details</a>
            </div>

            <form id="delete-frm" class="float-right" action="" method="POST">
                @method('DELETE') <!--default POST method will be override to this DELETE method-->
                @csrf
                <!--<button class="btn btn-danger btn-lg font-weight-bold  m-3 mb-5">Delete room {{ $room->roomNo}}</button>-->
                <button onclick="return confirm('Are you sure you want to delete this Room? ');" 
                    class="btn btn-danger btn-lg font-weight-bold  m-3 mb-5">Delete room {{ $room->roomNo}}
                </button>

            </form>
    </div>
@endsection
