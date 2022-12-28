@extends('Layouts.app')
@section('content')

      <!--header part which shows the path to the current page-->
      <div>
        <br>
        <a href               = "/" style="font-family:calibri;font-size:18px;"> Home  </a>
        <text> > </text>
        <a href               = "/RM" style="font-family:calibri;font-size:18px;"> Room Management </a>
        <text> > Room List</text>

        <a href  = "#useraccount" target="_blank">
            <button class  = "bttn1"><i class="fas fa-user"></i>  My Account</button>
        </a><br><br>
        <hr class  = "line2">           
    </div>

    <div class="container_index" >
        <div class="wrapper_index">
            <div class="container">
                <div><!--success message of a new room adding will be displayed here-->
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                
                <div>
                    <div class="row ">

                        <a href="/RM/roomList" class=" float-right btn btn-outline-dark btn-sm ml-3  mt-3" style="height: 34px; padding:5px,5px;">Go back</a><br>
                        <form action="/RM/roomList" method="GET" class="float-left">
                            <div class="form-group">
                                
                                <input type="search" name="search" 
                                    style="  box-sizing: border-box;
                                            border: 2px solid #138496;                           
                                            padding-left: 20px;
                                            border-radius: 4px;" 
                                    class=" mt-3 form-control float-left m-1 ml-3 col-lg-7" placeholder="Search rooms..">
                                <span class="form-group-btn">
                                    <button type="submit" class=" mt-3 btn btn-info float-left m-1 col-lg-3 font-weight-bold" >Search</button>
                                </span>
                            </div>
                        </form>

                    </div>
                </div>
        
                <div>
                    <br><br>
                                    
                    <h2 class="float-left">Available Room List</h2>
                    <!--report generating button to get a pdf of available rooms only-->
                    <a class="btn ml-2 float-right btn-danger mt-3 mb-3" href="{{ URL::to('/RM/roomList/list/pdf') }}">Export details of Available Rooms</a>
        
                    <table class="table table-bordered  table-striped mt-3 ">
                        <tr style="background-color: #9fe3de; color: #404040" >
                            <th>RoomNo</th>
                            <th>FloorNo</th>
                            <th>RoomType</th>
                            <th>Description</th>
                            <th width="200px">RoomStatus</th>
                            <th width="220px">Action</th>
                        </tr>
                        @forelse ($rooms as $room) <!--this 'rooms' is the variable that we made inside index() of controller class-->
                            <tr>
                                <td>{{ $room->roomNo}}</td>
                                <td>{{ $room->floorNo}}</td>
                                <td>{{ $room->roomType }}</td>
                                <td>{{ $room->description}}</td>
                                <td style="font-size: 18px;">{{ $room->roomStatus }}</td>
                                <td class="text-center"><a href="./roomList/{{ $room->id }}" class="btn btn-lg btn-outline-info font-weight-bold">Select</a></td>
                            </tr>
                                
                        @empty                       
                            <center><h6 style="font-size: 20px; color: red;">No rooms matched your search</h6></center>
                        @endforelse
        
                    </table>
        
                    {{ $rooms->appends(['search' => request()-> query('search')])->links() }}
                    <!--appends method is also attached with the pagination to make sure that, every pagination will work according to the search query-->
                    <br>

                </div>
            </div>
    </div>
</div>
    @endsection