<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use PDF;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event :: latest()->paginate(5);

        return view('events.index',compact('events'))->with(request()->input('page'));

        //table paginate
    }

    public function exportEventPDF(){
        $events = Event::latest()->paginate(15);
        $pdf=PDF::loadview('events.indexpdf',compact('events'));
        return $pdf->download('Event-list.pdf');

        //generate pdf
    }



    public function eventSearch(){

         //search function 

        $search_text = $_GET['query'];
        $events = Event::where('fname','Like', '%'.$search_text.'%')->orWhere('lname','Like', '%'.$search_text.'%')
        ->orWhere('eventType','Like', '%'.$search_text.'%')->orWhere('nic','Like', '%'.$search_text.'%')
         ->orWhere('title','Like', '%'.$search_text.'%')->orWhere('contact','Like', '%'.$search_text.'%')
         ->orWhere('hallNumber','Like', '%'.$search_text.'%')->orWhere('no','Like', '%'.$search_text.'%')
         ->orWhere('street','Like', '%'.$search_text.'%')->orWhere('city','Like', '%'.$search_text.'%')
         ->orWhere('email','Like', '%'.$search_text.'%')->orWhere('charges','Like', '%'.$search_text.'%')
         ->orWhere('eventday','Like', '%'.$search_text.'%')->orWhere('time','Like', '%'.$search_text.'%')
         ->orWhere('participantNo','Like', '%'.$search_text.'%')->paginate(50);

        return view('events.searchEvent',compact('events'));

       
    }







    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');

        //events create
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'title'=>'required',
            'fname' =>'required',
            'contact' =>'required'
        ]);
     
        //create a new product

        Event::create($request->all());


        //rediret the user and send friendly message
        return redirect() ->route('events.index')->with('success','Event Created Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show',compact('event'));

        //show events
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit',compact('event'));

        //edit events
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //validate the input
        $request->validate([
            'fname' =>'required',
                'contact' =>'required',
                
            ]);
         
            //create a new product
    
            $event->update($request->all());
    
    
            //rediret the user and send friendly message
            return redirect() ->route('events.index')->with('success','Event Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //delete the event
        $event->delete();

        //redirect the user and display success message
        return redirect() ->route('events.index')->with('success','Event Cancelled and Deleted Successfully !');



    }
}
