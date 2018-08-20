<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeaveApplication;
use Illuminate\View\View;

class LeaveController extends Controller
{
    public function submitapp(Request $request){
        $application = new LeaveApplication();
        $application->description = $request->description;
//        dd($request->teamlead);
        $application->teamLead = $request->teamlead;
        $application->startDate = $request->startdate;
        $application->endDate = $request->enddate;
        $application->project = $request->project;
        $application->agentId = $request->agentId;
        $application->accepted = null;
        $application->save();
        return redirect()->route('agent.dashboard');
    }
    //

}
