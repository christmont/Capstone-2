<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\casetobehandled;
use App\Adverse;
use App\clientadverse;
use App\Employee;
use App\employeeclients;
use App\Status;
use App\Decision;
use Auth;
use App\Schedule;
use App\Notary;
use DB;
use App\scheduletype;
use Carbon\Carbon;
use PDF;

class LawyerSideController extends Controller
{
    public function home()
    {
    	return view('lawyer ui.lawyerui');

    	
    }
     public function shownotarytable()
    {
      
     $clientnotary = DB::table('employeeclients')
                      ->where([['employees.id',Auth::user()->id],['clients.nature_of_request','Administration of oath']])
                      ->join('employees','employees.id','=','employeeclients.employee_id')
                      ->join('clients','clients.id','=','employeeclients.client_id')
                      // ->join('notaries','notaries.client_id','=','employeeclients.client_id')
                      ->get();
            foreach($clientnotary as $notary)
            {
         $clientnotaryview = Client::where('id',$notary->client_id)->get();
            }
               
         

        foreach($clientnotary as $client)
        {

          $notaries = Notary::where('client_id',$client->id)
         ->orderBy('created_at','asc')
         ->get();
          
        }
        
       
      
      return view('lawyer ui.notary')->withclientnotary($clientnotary)
                                     ->withclientnotaryview($clientnotaryview);
         
    }
  
     public function showwalkintable()
    {
     $clients = DB::table('employeeclients')
                      ->where([['employees.id',Auth::user()->id],['clients.nature_of_request','Legal Documentation']])
                      ->join('employees','employees.id','=','employeeclients.employee_id')
                      ->join('clients','clients.id','=','employeeclients.client_id')
                      ->get();  
      return view('lawyer ui.walkin')->withClients($clients);
    }
     public function showreqtable()
    {
       $lawyerclients = Auth::user()->id;
      
        $client = DB::table('employeeclients')
                      ->where([['employees.id',Auth::user()->id],['clients.nature_of_request','Representation of quasi-judicial bodies']])
                      ->orwhere([['employees.id',Auth::user()->id],['nature_of_request','Legal Assistance']])
                      ->orwhere([['employees.id',Auth::user()->id],['nature_of_request','Mediation']])
                      ->join('employees','employees.id','=','employeeclients.employee_id')
                      ->join('clients','clients.id','=','employeeclients.client_id')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','employeeclients.client_id')
                      ->get();


     
        
     
          return view('lawyer ui.client_table')->withClient($client);
       
    }
       public function lawyerclientview($id)
    {
        $clients = Client::find($id);
         $cases = casetobehandled::where('client_id',$clients->id)->get();
          $clientadverses = clientadverse::where('client_id',$clients->id)->get();
            foreach($clientadverses as $clientadverse)
            {
              $adverses = Adverse::where('id',$clientadverse->adverse_id)->get();
            }
        return view('lawyer ui.viewer')->withClient($clients)
                             ->withCases($cases)
                             ->withAdverses($adverses);
    }
    public function showmanagecase()
    {
      $allcases = DB::table('employeeclients')
                      ->where([['employees.id',Auth::user()->id],['clients.nature_of_request','Representation of quasi-judicial bodies'],['clients.cl_status','Approved']])
                      ->orwhere([['employees.id',Auth::user()->id],['nature_of_request','Legal Assistance'],['clients.cl_status','Approved']])
                      ->orwhere([['employees.id',Auth::user()->id],['nature_of_request','Mediation'],['clients.cl_status','Approved']])
                      ->join('employees','employees.id','=','employeeclients.employee_id')
                      ->join('clients','clients.id','=','employeeclients.client_id')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','employeeclients.client_id')
                      ->get();
      return view('lawyer ui.managecase')->withAllcases($allcases);
    }
    
    public function editcase($id)
    {
      $editcase = Client::find($id);
     
   
      $clientid = $editcase->id;
      $clients = Client::where('id',$clientid)
                ->with('casetobehandled')
                ->get();
       $clientadverse = clientadverse::where('client_id',$clientid)->get();
      
      foreach($clientadverse as $clientadverses)
      {
        
      $adverses = Adverse::where('id',$clientadverses->adverse_id)->get();
      }
                                                     
                 
      
      $status = Status::all();
      $decision = Decision::all();
      

      return view('lawyer ui.editcase')->withClients($clients)
                             ->withStatus($status)
                             ->withAdverses($adverses)
                             ->withDecision($decision);
    }
     public function showschedule()
    {
       $lawyer = Employee::where('position','Lawyer')
                          ->with('schedules')
                          ->get();
       
        foreach($lawyer as $lawyers)
        {
        $employeeclients = employeeclients::where('employee_id',$lawyers->id)->get();

        foreach($employeeclients as $employeeclient)
        {
      
              }
        
        
  }    $client = Client::where([['nature_of_request','Mediation'],['cl_status','Approved'],['id',$employeeclient->client_id]])
                        ->orwhere([['nature_of_request','Representation of quasi-judicial bodies '],['cl_status','Approved'],['id',$employeeclient->client_id]])
                        ->orwhere([['nature_of_request','Legal Assistance '],['cl_status','Approved'],['id',$employeeclient->client_id]])
                        ->with('casetobehandled')
                        ->get();

        
         return view('lawyer ui.schedules')->withLawyer($lawyer)
                                            // ->withschedules($schedules)
                                            ->withClient($client);      
             
                                        
    }
    public function lawyershowschededit($id)
    {
        
         $schedules = Schedule::find($id);
         
         $scheduletype = scheduletype::all();

     
         $lawyer = Employee::where([['position','Lawyer'],['id',$schedules->employee_id]])
                          ->with('schedules')
                          ->get();

         $client = Client::where([['nature_of_request','Mediation'],['cl_status','Approved'],['id',$schedules->client_id]])
                        ->orwhere([['nature_of_request','Representation of quasi-judicial bodies '],['cl_status','Approved'],['id',$schedules->client_id]])
                        ->orwhere([['nature_of_request','Legal Assistance '],['cl_status','Approved'],['id',$schedules->client_id]])
                        ->with('casetobehandled')
                        ->get();
                       
        return view('lawyer ui.reschedule')->withClient($client)
                                 ->withscheduletype($scheduletype)
                                 ->withlawyer($lawyer)
                                 ->withschedules($schedules);
    }
 

}
