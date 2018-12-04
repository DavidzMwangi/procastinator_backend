<?php

namespace App\Http\Controllers\Api;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    //
    public function newEvent(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'event_date'=>'required',
            'reminder_date'=>'required',

        ]);

        $event=new Event();
        $event->name=$request->input('name');
        $event->event_date=$request->input('event_date');
        $event->event_time=$request->input('event_time');
        $event->reminder_date=$request->input('reminder_date');
        $event->reminder_date=$request->reminder_date;
        $event->description=$request->description;
        $event->user_id=Auth::id();
        $event->save();

        return response()->json($event);
    }


    public function allEvents()
    {
        return response()->json(Event::where('user_id',Auth::id())->get());
    }

    public function toggleEvent(Event $event)
    {
        $event->is_complete=false;
        $event->save();

        return response()->json($event);
    }
}
