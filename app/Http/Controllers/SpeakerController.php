<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Speaker;
use App\Models\Shedule;
use App\Models\Event;

class SpeakerController extends Controller
{
    public function addspeaker(){
        return view('speaker.add-speaker');
    }

    public function storespeaker(Request $request){
        
        $speakers = new Speaker();
        $speakers->title = $request->title;
        $speakers->sname = $request->sname;
        $speakers->email = $request->email;
        $speakers->phone = $request->phone;
        if($request->file('image')){
            $file = $request->file('image');
            $fileName = date('YmHi').$file->getClientOriginalName();
            $file->move(public_path('images'),$fileName);
            $speakers['image'] = $fileName;
        }
        $speakers->save();
        return redirect('/admin/add-speaker')->with('speakerAdded','Speaker has been added successfully!');

    }

    public function showspeaker(){
        $speakers = Speaker::all();
        return view('speaker.show_speaker',compact('speakers'));
    }
    
    public function editSpeaker($id){
        $speakers = Speaker::find($id);
        return view('speaker.edit-speaker',compact('speakers'));
    }

    public function updateSpeaker(Request $request, $id){
        $speakers = Speaker::find($id);
        $speakers->title = $request->title;
        $speakers->sname = $request->sname;
        $speakers->email = $request->email;
        $speakers->phone = $request->phone;
        if($request->file('image')){
            $file = $request->file('image');
            $fileName = date('YmHi').$file->getClientOriginalName();
            $file->move(public_path('images'),$fileName);
            $speakers['image'] = $fileName;
        }
        $speakers->save();
        return redirect('/admin/show-speaker');
    }

    public function deleteSpeaker($id){
        $speakers = Speaker::find($id)->delete();
        return redirect('/admin/show-speaker');
    }

    public function index(){
        $speakers = Speaker::OrderBy('id','desc')->get();
        $shedules = Shedule::select('speakers.sname','events.name','events.date',
            'shedules.id','shedules.startt','shedules.endt')
            ->join('speakers','shedules.speaker_id','speakers.id')
            ->join('events','shedules.event_id','events.id')
            ->get();
        return view('event',compact('speakers','shedules'));
    }
}
