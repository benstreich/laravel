<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function create($id){

        $request = request();
    
        $request->validate([
            'first_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'answer' => ['required', 'max:3', 'min:2'],
        ]);


        $application = new \App\Models\Application();
        $application->answer = $request->get('answer');
        $application->first_name = $request->get('first_name');
        $application->last_name = $request->get('last_name');
        $application->email = $request->get('email');
        $application->event_id = $id;
        $application->save();
    
        return redirect('/event/' .$id . '/applications');

    } 

    public function list($id){
        $applications = \App\Models\Application::where('event_id', $id)->where('answer', 'yes')->get();

        $declinedApplications = \App\Models\Application::where('event_id', $id)->where('answer', 'no')->count();
    
        return view('applications',[
            'event_id' => $id,
            'applications'=> $applications,
            'declinedApplications' => $declinedApplications,
        ]);
    }
}
