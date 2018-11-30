<?php

namespace App\Http\Controllers\Backend;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    //
    public function __invoke()
    {
        return view('backend.event.new');
    }

    public function newEvent(Request $request)
    {
            $validator=Validator::make($request->all(),[
                'event_name'=>'required',
                'event_date'=>'required',
                'event_time'=>'required',
                'reminder_date'=>'required',
                'reminder_time'=>'required',
                'description'=>'required'
            ]);

            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();

            }

            $event=new Event();
            $event->name=$request->input('event_name');
            $event->event_date=$request->input('event_date');
            $event->event_time=$request->input('event_time');
            $event->reminder_date=$request->input('reminder_date');
            $event->reminder_time=$request->input('reminder_time');
            $event->description=$request->input('description');
            $event->save();


            return redirect()->route('event.new');

    }
}
