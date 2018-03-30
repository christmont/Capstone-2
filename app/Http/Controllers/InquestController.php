<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\casetobehandled;
use App\Employee;
use App\Schedule;
use App\employeeclients;
use App\Inquest;
use Carbon\Carbon;





class InquestController extends Controller
{
    public function showinquestform()
    {
     
      $lawyer1 = Employee::where('position','Lawyer')->get();
      $lawyer2 = Employee::where('position','Lawyer')->get();
      $staff = Employee::where('position','Administrative Staff')->get();
      foreach($lawyer1 as $lawyers)
      {
      $schedule = Schedule::where('employee_id',$lawyers->id)->get();
      }
      foreach($schedule as $schedules)
      {
        $clients = Client::where([['nature_of_request','Inquest'],['id',$schedule->client_id]])
              ->with('casetobehandled')
              ->get();
      }
      
      return view('inquest.form')->withClients($clients)
      						 	 ->withLawyer1($lawyer1)
                     ->withlawyer2($lawyer2)
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
        $inquest -> employee_id = $request->lawyer1;
        $inquest -> lawyer = $request->lawyer2;
        $inquest -> staff = $request->assistant;
        $inquest -> schedule_id = $request->schedule;
        $inquest->save();
        return redirect('/lawyerside/show');

    }
    public function showinquesttable()
    {
        $inquest = Inquest::all();
        // $lawyer1 = Employee
        $monthnow = date('F',strtotime(Carbon::now()));
        foreach($inquest as $inquests)
        {
          $firstlawyer = Employee::where('id',$inquests->employee_id)->get();
          $secondlawyer = Employee::where('id',$inquests->lawyer)->get();
          $assistant = Employee::where('id',$inquests->assistant)->get();
        }

        $schedule = Schedule::where('type','For Inquest')->get();
        foreach($schedule as $schedules)
        {
        
        $month = date('F',strtotime($schedules->start));
        $date = date('j',strtotime($schedules->start));
        $day = date('l',strtotime($schedules->start));
        
        $year = Carbon::now();
        }
        return view('inquest.inquestschedule')->withInquest($inquest)
                                              ->withschedule($schedule)
                                               ->withyear($year)
                                              ->withmonthnow($monthnow)
                                              ->withfirstlawyer($firstlawyer)
                                              ->withsecondlawyer($secondlawyer)
                                              ->withassistant($assistant);
    }
    public function printinquest()
    {

    }
}
