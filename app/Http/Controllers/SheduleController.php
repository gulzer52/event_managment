<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Speaker;
use App\Models\Event;
use App\Models\Shedule;

class SheduleController extends Controller
{
    public function createShedule(){
        $speakers = Speaker::all();
        $events = Event::all();
        return view('shedule.shedule',compact('speakers','events'));
    }

    public function sheduleStore(Request $request){
        $speakers = Speaker::all();
        $events = Event::all();
        $shedules = new Shedule;
        $shedules->speaker_id = $request->speaker_id;
        $shedules->event_id = $request->event_id;
        $shedules->startt = $request->startt;
        $shedules->endt = $request->endt;
        $shedules->save();
        return redirect('admin/shedule');
    }

    public function viewShedule(Request $request){
        $shedules = Shedule::select('speakers.sname','events.name','events.date',
            'shedules.id','shedules.startt','shedules.endt')
            ->join('speakers','shedules.speaker_id','speakers.id')
            ->join('events','shedules.event_id','events.id')
            ->get();
        return view('shedule.show_shedule',compact('shedules'));    
    }
     
    public function deleteShedule($id){
        $shedules = Shedule::find($id)->delete();
        return redirect('admin/shedule-show');
    }

    
}
