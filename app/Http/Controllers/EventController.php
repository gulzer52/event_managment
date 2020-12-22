<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Event;

class EventController extends Controller
{
    public function add(){
        return view('event.add-event');
    }

    public function store(Request $request){
        $events = new Event;
        $events->name = $request->name;
        $events->date = $request->date;
        $events->save();
        return redirect('/admin/event')->with('eventAded','Event added has been successfully!');
    }

    public function show(){
        $events = Event::all();
        return view('event.show-event',compact('events'));
    }

    public function editEvent($id){
        $events = Event::find($id);
        return view('event.edit_event',compact('events'));
    }

    public function updateEvent(Request $request, $id){
        $events = Event::find($id);
        $events->name = $request->name;
        $events->date = $request->date;
        $events->save();
        return redirect('/admin/show-event');
    }

    public function deleteEvent($id){
        $events = Event::find($id)->delete();
        return redirect('/admin/show-event');
    }
}
