<?php

namespace App\Http\Controllers;

use App\Models\HotelRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF; //this attribute is used to take the DomPDF in service to convert HTML to PDF File in Laravel

class HotelRoomController extends Controller
{
    /**
     * --------------------------------------------------------------------------------------------
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
            public function index(Request $request)
            {

                $search = request()->query('search');//user input word inside the search bar will be assigned to this variable
                $availableRooms = request()->query('searchAvailable'); //name of the showAvailableRooms input btn is 'searchAvailable'

                if($search){
                    //if user has searched anything, then filter the data as follows
                    //$rooms = HotelRoom::where('roomStatus', 'like', "%{$search}%")->paginate(10);//this will check the roomStatus column only
                    $rooms = HotelRoom::where('roomStatus','like',"%{$search}%")
                                            ->orWhere('roomType','like',"%{$search}%")
                                            ->orWhere('roomNo','like',"%{$search}%")
                                            ->orWhere('description','like',"%{$search}%")
                                            ->orWhere('floorNo','like',"%{$search}%")
                                            ->paginate(10);
                    return view('Rooms.index', compact('rooms')) -> with(request()->input('page'));
                }
                elseif($availableRooms){
                    //if user has clicked the 'show available rooms only' button, then available rooms will be filtered and displayed from this
                    $rooms = HotelRoom::where('roomStatus','like', "%{$availableRooms}%")->paginate(10);
                    return view('Rooms.AvailableRooms', compact('rooms')) -> with(request()->input('page'));
                }
                //if any of the search btn or showAvailable rooms btn clicked, the list of all the rooms in the table should be displayed as usual
                else{

                    //show the list of all the hotel rooms when the page loads
                    //$rooms = HotelRoom::all(); //fetch all hotel rooms  from DB
                    $rooms = HotelRoom::latest()->simplePaginate(5);
                                       
                    //pdf report of all the rooms in the DB
                    if($request->has('download'))
                    {
                        $rooms = HotelRoom::latest()->simplePaginate(100);//since the report should contain all the rooms
                        $pdf = PDF::loadView('Rooms.report', compact('rooms')); //retrieve the data in db table
                        return $pdf->download('RoomsPDF.pdf');//use download method to download the pdf
                    }

                    //without just returning raw data of all the rooms, return a view with room data
                    return view('Rooms.index', compact('rooms')) -> with(request()->input('page'));
                    //return view('Rooms.index', ['rooms' => $rooms]);
                }
 
            }

            public function availableRoomsPDF(){
                //retrieve all records from db
                $rooms = HotelRoom::where('roomStatus','like', "%available%")->paginate(100);

                //share data to view
                view()->share('rooms', $rooms);
                $pdf = PDF::loadView('Rooms.report', $rooms); //Rooms.index means the index.blade file in the Rooms folder

                //download PDF file with download method
                return $pdf->download('AvailableRooms.pdf');
           }

    /**
     * --------------------------------------------------------------------------------------------
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
            public function create()
            {
                //show form to create a new room
                return view('Rooms.create');
            }
    /**
     * ---------------------------------------------------------------------------------------
     * Store a newly created resource in storage.
     *use 'POST' http verb to store the data
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
            public function store(Request $request)
            {//this method will save the room details inside the DB and redirect the user to the created room page
                //1) validate the input fields of the form
                $request-> validate([
                    'roomNo' => 'required|string',
                    'floorNo' => 'required',
                    'roomType' => 'required', 
                    'noOfBeds' => 'required',
                    'maxNoOfChildren' => 'required',
                    'maxNoOfAdults' => 'required',
                    'roomStatus' => 'required|String',
                    'description' => 'required', 
                    'price' => 'required'
                ]);
                //2) create a new room by retrieving the user input fields data using name of each field
                $newRoom = HotelRoom::create($request->all());
                
                //3) redirect the usee and send friendly message
                return redirect('RM/roomList/'. $newRoom->id)->with('success', 'Room added to the system successfully!');
                //return redirect('roomList')->with('success', 'room added to the system successfully!');
                //return redirect()-route('Rooms.index')->with('success', 'Room added successfully');
            }
    /**
     * ------------------------------------------------------------------------------------------
     * Display the specified resource.
     *
     * @param  \App\Models\HotelRoom  $hotelRoom
     * @return \Illuminate\Http\Response
     */
            public function show(HotelRoom $hotelRoom)
            {
                //show the details of a room
                //return $hotelRoom; //returns the fetched room
                //this will fetch the room instance of HotelRoom model belongs to the ID comes with the $hotelRoom variable

                //**without just returning the raw data, show it through a view called 'show' */
                return view('Rooms.show', ['room' => $hotelRoom,]);
            }

    /**
     * ----------------------------------------------------------------------------------------
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HotelRoom  $hotelRoom
     * @return \Illuminate\Http\Response
     */
            public function edit(HotelRoom $hotelRoom)
            {
                //show form to edit the the room with all the details
                return view('Rooms.edit', ['room' => $hotelRoom,]);
            }

    /**
     * ------------------------------------------------------------------------------------------
     * Update the specified resource in storage.
     *use 'PUT'or 'PATCH' verb to update data
    
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\HotelRoom  $hotelRoom
    * @return \Illuminate\Http\Response
    */
            public function update(Request $request, HotelRoom $hotelRoom)
            {
                 //1) validate the input fields of the form to check whether user has deleted any or not
                 $request-> validate([
                    'roomNo' => 'required|string',
                    'floorNo' => 'required',
                    'roomType' => 'required', 
                    'noOfBeds' => 'required',
                    'maxNoOfChildren' => 'required',
                    'maxNoOfAdults' => 'required',
                    'roomStatus' => 'required|String',
                    'description' => 'required', 
                    'price' => 'required'
                ]);
                //save the edited room
                $hotelRoom->update($request->all());  //update method is used here to send the updated data into DB

                //redirect to the View room page with updated details and show the successful msg
                return redirect('RM/roomList/'.$hotelRoom->id)->with('success', 'Room details updated successfully');
            }

    /**
     * ---------------------------------------------------------------------------------------------
     * Remove the specified resource from storage.
     *use DELETE http verb to delete a room

     * @param  \App\Models\HotelRoom  $hotelRoom
     * @return \Illuminate\Http\Response
     */
            public function destroy(HotelRoom $hotelRoom)
            {
                //delete a room
                $hotelRoom->delete();

                return redirect('RM/roomList')->with('success', 'Room was Deleted !');
            }

}
