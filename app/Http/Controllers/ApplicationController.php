<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{

    public function create(){

        $request = request();
    
        $application = new \App\Models\Application();
        $application->answer = $request->get('answer');
        $application->first_name = $request->get('first_name');
        $application->last_name = $request->get('last_name');
        $application->email = $request->get('email');
        $application->session_id = session()->getId();
        $application->save();
    
        return redirect('/event');

    }

    public function list(){
        $applications = \App\Models\Application::where('answer', 'yes');

        $declinedApplications = \App\Models\Application::where('answer', 'no')->count();
    
        return view('applications',[
            'applications'=> $applications,
            'declinedApplications' => $declinedApplications,
        ]);
    }
}
