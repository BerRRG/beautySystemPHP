<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Model\Calendar as CalendarModel;
use App\Model\Client;
use App\Model\Clinic;
use App\Model\Professional;
use Auth;
use Calendar;
use Validator;

class CalendarController extends Controller
{
    public function index(){
    	$events = CalendarModel::get();
    	$event_list = [];
    	foreach ($events as $key => $event) {
    		$event_list[] = Calendar::event(
                $event->event_name,
                $event->full_day,
                new \DateTime($event->start_date),
                new \DateTime($event->end_date)
            );
    	}
    	$calendar_details = Calendar::addEvents($event_list);

        $clients = Client::all()->pluck('name', 'id')->toArray();
        $clinics = Clinic::all()->pluck('name', 'id')->toArray();
        $professionals = Professional::all()->pluck('name', 'id')->toArray();

        return view('events', compact('calendar_details'))
        ->withClients($clients)
        ->withClinics($clinics)
        ->withProfessionals($professionals);
    }

    public function addEvent(Request $request)
    {
        $client = Client::find($request->input('client_id'));
        $professional = Professional::find($request->input('professional_id'));
        $clinic = Clinic::find($request->input('clinic_id'));


        $validator = Validator::make($request->all(), [
            'start_date' => 'required',
            'end_date' => 'required',
            'end_time' => 'required',
            'start_time' => 'required',
            'clinic_id' => 'required',
            'client_id' => 'required',
            'professional_id' => 'required',
        ]);


        if ($validator->fails()) {
        	\Session::flash('warnning','Favor preencher os campos');
            return Redirect::to('/calendario')->withInput()->withErrors($validator);
        }

        $eventName = $client->name.' - '.$clinic->name;
        $start = $request->input('start_date').' '.$request->input('start_time');
        $end = $request->input('end_date').' '.$request->input('end_time');

        $event = new CalendarModel;
        $event->clinic_id = $clinic->id;
        $event->client_id = $client->id;
        $event->professional_id = $professional->id;
        $event->event_name = $eventName;
        $event->start_date = $start;
        $event->end_date = $end;
        $event->save();

        \Session::flash('success','Cadastrado com sucesso!');
        return Redirect::to('/calendario');
    }


}
