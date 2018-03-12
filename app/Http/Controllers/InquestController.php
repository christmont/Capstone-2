<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Client;
use casetobehandled;
use Employee;
use Schedule;





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
        // $inquest = new Inquest;
        // $inquest = 
    }
    public function showinquesttable()
    {
        // $inquest = 
        return view('inquest.table');
    }
    public function printinquest()
    {

    }
}
