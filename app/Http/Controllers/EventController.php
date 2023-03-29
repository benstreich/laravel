<?php

namespace App\Http\Controllers;
use App\Models\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function create()
    {
        $request = request();

        $request->validate( [
            'title' => 'required|max:255',
            'date' => 'required|max:255',
            'description' => 'required|max:255',
        ], 
            
        );

        $event = new \App\Models\Event();
        $event->title = $request->get('title');
        $event->description = $request->get('description');
        $event->date = $request->get('date');
        $event->save();

        return redirect('/events_logedin');
    }

    public function show($id){
        $event = Event::findOrFail($id);

        return view('event', [
            'event' => $event
            ]);
    }
    
    public function list(){
        $events = Event::all();
        return view('events', [
            'events' => $events
        ]);
    }

    public function listadmin(){
        $events = Event::all();
        return view('events_logedin', [
            'events' => $events
        ]);
    }
}
