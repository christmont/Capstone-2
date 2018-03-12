<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\casetobehandled;
use App\Adverse;
use App\clientadverse;
use App\Employee;
use App\employeeclients;
use Auth;
use App\Schedule;

class LawyerSideController extends Controller
{
    public function home()
    {
    	return view('lawyer ui.lawyerui');

    	
    }
     public function shownotarytable()
    {
      
      $lawyerclients = employeeclients::select('*')
                         ->where('employee_id',Auth::user()->id)->get();
      
        foreach ($lawyerclients as $key => $lawyerclient) 
        {
         
      
     
      
      
       $clients = Client::select('*')
         ->where([['nature_of_request','Administration of oath'],['id',$lawyerclient->client_id],['cl_status','Walkin']])
         ->orderBy('cllname','asc')
         ->get();
        
       
      }
         return view('lawyer ui.notary')->withClients($clients);
    }
     public function showwalkintable()
    {
      $clients = Client::where('nature_of_request','Legal Documentation')->orderBy('cllname','asc')
      ->get();
  
      return view('lawyer ui.walkin')->withClients($clients);
    }
     public function showreqtable()
    {
       $lawyerclients = Auth::user()->id;
      $employeeclients = 
      $clients = Client::where('cl_status','Pending')->orderBy('cllname','asc')
        ->with('casetobehandled')
        ->get();
       foreach($clients as $client)
       {
        $clientadverse = clientadverse::where('client_id',$client->id)->get();

       
       
       }  
          return view('lawyer ui.client_table')->withClients($clients);
       
    }
    public function showmanagecase()
    {
      $allcases = Client::where('cl_status','Approved')
      ->with('casetobehandled')
      ->with('adverse')
      ->get();
      return view('lawyer ui.managecase')->withAllcases($allcases);
    }
    public function editcase($id)
    {
      $editcase = Client::find($id);
     
   
      $clientid = $editcase->id;
      $clients = Client::where('id',$clientid)
                ->with('casetobehandled')
                ->with('adverse')
                ->get();
      
      
      $status = Status::all();
      

      return view('lawyer ui.editcase')->withClients($clients)
                             ->withStatus($status);
    }
     public function showschedule()
    {
        $schedules = Employee::select('*')
        ->where('id',Auth::user()->id)->with('schedules')->get();
        
        return view('lawyer ui.schedules')->withSchedules($schedules);
    }
}
