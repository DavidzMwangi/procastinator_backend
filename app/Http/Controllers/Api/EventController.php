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

        $data = json_decode($request->getContent());
        foreach ($data->values as $item) {
            $data_item=$item->nameValuePairs;
            if ($data_item->is_synced==false){
                //create a new instance here for the new event
                $event=new Event();

            }else{
                //the event already exist and the user is updating the record
                $event=Event::find($data_item->id);
            }

            $event->name=$data_item->name;
            $event->event_date=$data_item->event_date;
            $event->event_time=$data_item->event_time;
            $event->reminder_date=$data_item->reminder_date;
            $event->reminder_date=$data_item->reminder_date;
            $event->description=$data_item->description;
            $event->is_synced=true;
            $event->is_complete=$data_item->is_complete;
            $event->has_update=false;
            $event->user_id=Auth::id();
            $event->save();



        }
//        $this->validate($request,[
//            'name'=>'required',
//            'event_date'=>'required',
//            'reminder_date'=>'required',
//
//        ]);


        return response()->json([
            'Response' => 'Success'
        ]);

    }


    public function allEvents()
    {
        return response()->json(Event::where('user_id',Auth::id())->get());
    }

    public function toggleEvent(Event $event)
    {
        $event->is_complete=true;
        $event->has_update=false;
        $event->save();

        return response()->json($event);
    }
}
