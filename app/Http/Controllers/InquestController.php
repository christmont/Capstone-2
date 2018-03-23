<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\casetobehandled;
use App\Employee;
use App\Schedule;
use App\employeeclients;





class InquestController extends Controller
{
    public function showinquestform()
    {
      $clients = Client::where('nature_of_request','Inquest')
      				->with('casetobehandled')
      				->get();
      $lawyer = Employee::where('position','Lawyer')->get();
      $staff = Employee::where('position','Staff')->get();
      foreach($lawyer as $lawyers)
      {
      $schedule = Schedule::where('employee_id',$lawyer->id)->get();
      }
      return view('inquest.form')->withClients($clients)
      						 	 ->withLawyer($lawyer)
      						     ->withStaff($staff)
      						     ->withSchedule($schedule);
      		 	 
      		 
      	
    }
    public function inquestreg(Request $request)
    {
    	 
        $inquest = new Inquest;
        $inquest -> natureofcalls = $request->natureofcalls;
        $inquest -> location = $request->location;
        $inquest -> actiontaken = $request->actiontaken;
        $inquest -> client_id = $request->client;
        $inquest -> lawyer = $request->lawyer;
        $inquest -> staff = $request->staff;
        $inquest -> schedule_id = $request->schedule;
        $inquest->save();
        return redirect('/lawyerside/show');

    }
    public function showinquesttable()
    {
        $inquest = Inquest::all();
        return view('inquest.table')->withInquest($inquest);
    }
    public function printinquest()
    {

    }
}
