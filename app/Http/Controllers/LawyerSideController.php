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
use App\Inquest;
use DB;
use App\scheduletype;
use Carbon\Carbon;
use PDF;
use App\Court;


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
                      ->where([['employees.id',Auth::user()->id],['clients.nature_of_request','Legal Documentation'],['clients.cl_status','Walkin']])
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
    
    public function lawyereditcase($id)
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
        // $lawyer = Employee::where([['position','Lawyer'],['id',Auth::user()->id]])
  //                         ->with('schedules')

  //                         ->get();

    
          
     
       
  //       foreach($lawyer as $lawyers)
  //       {
          
  //         {
  //             $schedule = Schedule::where([['type','Hearing'],['employee_id',$lawyers->id]])
  //                        ->with('employee')
  //                         ->get();
  //         }
  //       $employeeclients = employeeclients::where('employee_id',$lawyers->id)->get();

  //       foreach($employeeclients as $employeeclient)
  //       {
  //     $client = Client::where([['nature_of_request','Mediation'],['cl_status','Approved'],['id',$employeeclient->client_id]])
  //                       ->orwhere([['nature_of_request','Representation of quasi-judicial bodies '],['cl_status','Approved'],['id',$employeeclient->client_id]])
  //                       ->orwhere([['nature_of_request','Legal Assistance '],['cl_status','Approved'],['id',$employeeclient->client_id]])
  //                       ->with('casetobehandled')
  //                       ->get();
  //       foreach($client as $clients)
  //       {
  //         foreach($clients->casetobehandled as $case)
  //         {

  //           $courts = Court::where('id',$case->court_id)->get();
  //         }
  //       }
  //       }
          
        
  // }    
      $hearingsched = DB::table('schedules')
                      ->where([['employees.id',Auth::user()->id],['clients.nature_of_request','Representation of quasi-judicial bodies'],['clients.cl_status','Approved'],['schedules.type','Hearing']])
                      ->orwhere([['employees.id',Auth::user()->id],['nature_of_request','Legal Assistance'],['clients.cl_status','Approved'],['schedules.type','Hearing']])
                      ->orwhere([['employees.id',Auth::user()->id],['nature_of_request','Mediation'],['clients.cl_status','Approved'],['schedules.type','Hearing']])
                      ->join('employees','schedules.employee_id','=','employees.id')
                      ->join('clients','schedules.client_id','=','clients.id')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','schedules.client_id')
                      
                      ->get();
        
    foreach($hearingsched as $hearingscheds)
    {
       $schedule = Schedule::where([['type','Hearing'],['employee_id',$hearingscheds->employee_id]])->get();
    }
      
        
      
         return view('lawyer ui.schedules')->withhearingsched($hearingsched)
                                           ->withschedule($schedule);
                                        
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
     public function monthly()
    {
      $lawyer = Auth::user()->efname . ' ' . Auth::user()->emname . ' ' . Auth::user()->elname;
      
        $monthlyreports = DB::table('employeeclients')
                      ->where([['employees.id',Auth::user()->id],['clients.nature_of_request','Representation of quasi-judicial bodies']])
                      ->orwhere([['employees.id',Auth::user()->id],['nature_of_request','Legal Assistance']])
                      ->orwhere([['employees.id',Auth::user()->id],['nature_of_request','Mediation']])
                      ->join('employees','employees.id','=','employeeclients.employee_id')
                      ->join('clients','clients.id','=','employeeclients.client_id')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','employeeclients.client_id')
                      ->get();
         foreach($monthlyreports as $monthlyreport)
                      {
        $courts = DB::table('courts')
                             ->where('id',$monthlyreport->court_id)
                             ->get();
                      }     

       $date = date('F j Y',strtotime(Carbon::now()));
      $month = date('F',strtotime(Carbon::now()));
      
       $pdf = PDF::loadView('reports.monthly', [
                                                'monthlyreports'=>$monthlyreports,
                                                'courts'=>$courts,
                                                'month'=>$month,
                                                 'date'=>$date,
                                                 'lawyer' =>$lawyer,
        
       ]);
        return $pdf->stream();
 

}

public function lawyerschededit($id, Request $request)
    {
       
 
        $sched = Schedule::find($id);

        $sched-> employee_id = $request->lawyer;
        $sched-> type = $request->schedtype;
        $sched-> start = $request->start;
        $sched-> end = $request->end;
        $sched-> client_id = $request->client;
        $sched-> controlno =$request->con;
        $sched->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/lawyerschedule/show');
    }

    public function lawyerupdatecase(Request $request,$id)
    {
     $client = Client::find($id);
            $client-> clfname = $request->cfname;
            $client-> clmname = $request->cmname;
            $client-> cllname = $request->clname;
      
            $client-> clreligion = $request->religion;
            $client-> clcitizenship = $request->citizenship;
            $client-> claddress = $request->Address;
            $client-> clemail = $request->Email;
            $client-> clmonthly_net_income = $request->Income;

            $client-> cldetained = $request->detain;
            $client-> cldetained_since = $request->DetainedDate;
            $client-> clbdate = $request->Birthday;
            $client-> clgender = $request->gender;
            $client-> clcivil_status = $request->cstat;
            $client-> cleducational_attainment = $request->educ;
            $client-> cllanguage = $request->language;
            $client-> clcontact_no = $request->Contact;
            $client-> clspouse = $request->clspouse;
            $client-> claddress_of_spouse = $request->claddress_of_spouse;
            $client-> clcontact_no_of_spouse = $request->clcontact_no_of_spouse;
            $client-> clplace_of_detention = $request->DetainedPlace;
            $client-> nature_of_request = $request->nor;

            $client ->save();
      
       $clientid = $client->id;
    $date = Carbon::now();
      $updatecase = casetobehandled::where('client_id',$clientid)->get(); 
        
      foreach ($updatecase as $key => $value) 
      {
        
      
      $value-> caseno = $request->caseno;
      $value-> title = $request->casetitle;
      $value-> casename = $request->lawsuit;
      $value-> interviewer = $request->interviewer;
      $value-> clcomplainant_victim_of = $request->casecategory;
      $value-> nature_of_case = $request->casetype;
      $value-> clcase_involvement = $request->involvement;
      $value-> case_status = $request->casestatus2;
      $value-> decision = $request->decision;
      if($request->casestatus2 == 'Arraignment')
      {
      $value-> arraignmentDate = $date;
      }
      elseif ($request->casestatus2 == 'Preliminary Conference') 
      {
      $value-> prelimconfDate = $date;
      }
      elseif ($request->casestatus2 == 'Pre-trial') 
      {
      $value-> pretrialDate = $date;
      }
       elseif ($request->casestatus2 == 'Initial Trial') 
      {
      $value-> inittrialdate = $date;
      }
       elseif ($request->casestatus2 == 'Trial Proper(Prosecution Evidence)') 
      {
      $value-> prosecevidence = $date;
      }
      elseif ($request->casestatus2 == 'Trial Proper(Defense Evidence)') 
      {
      $value-> defevidence = $date;
      }
      elseif ($request->casestatus2 == 'Promulgation') 
      {
      $value-> promulgation = $date;
      }
      $value ->save();
      }
      $clientadverse = clientadverse::where('client_id',$clientid)->get();
                                        foreach($clientadverse as $clientadverses)
                                        {
                                        $updateadverses = Adverse::where('id',$clientadverses->id)->get();

                                        }
      
      foreach ($updateadverses as $updateadverse) 
      { 

      $updateadverse->advprtytype = $request->type;
      $updateadverse->advprtyfname = $request->fname;
      if(!empty($request->mname)){
      $updateadverse->advprtymname = $request->mname;
                                }
      $updateadverse->advprtylname = $request->lname;
      $updateadverse->advprtyaddress = $request->addr;
      $updateadverse->save();
      }
      
      
      
      
      return redirect('/lawyershow/managecase');
         


    }
    public function inquestshow()
    {
      $inquest = Inquest::select('*')
                          ->orwhere('employee_id',Auth::user()->id)
                          ->orwhere('lawyer',Auth::user()->id)
                          ->get();
        
        foreach($inquest as $inquests)
        {
          $firstlawyer = Employee::where('id',$inquests->employee_id)->get();
          $secondlawyer = Employee::where('id',$inquests->lawyer)->get();
          $assistant = Employee::where('id',$inquests->assistant)->get();
          $client = Client::where('id',$inquests->client_id)->with('casetobehandled')->get();

        }

        $schedule = Schedule::where('id',$inquests->schedule_id)->get();
        foreach($schedule as $schedules)
        {
        
        $month = date('F',strtotime($schedules->start));
        $date = date('j',strtotime($schedules->start));
        $day = date('l',strtotime($schedules->start));
        
        $year = Carbon::now();
        }
       
        return view('inquest.table')->withInquest($inquest)
                                              ->withschedule($schedule)
                                              ->withfirstlawyer($firstlawyer)
                                              ->withsecondlawyer($secondlawyer)
                                              ->withassistant($assistant)
                                              ->withclient($client);
    }
    public function lawyerinquestedit($id ,Request $request)
    {
      
    $inquest = Inquest::where('schedule_id', '=', $id)->get();
       
        foreach($inquest as $inquests)
        {
        $inquests -> natureofcalls = $request->noc;

        $inquests -> location = $request->location;
           
        
       
          
        
        
       if($request->noc == 'Legal Advice')
        {
        $inquests-> actiontaken = "Adviced";
        }
        else
        {
        $inquests-> actiontaken = "Assisted";
        }
       
        $inquests -> client_id = $request->client;
        
     
          
        
        $inquests -> employee_id = $request->lawyer1;
        $inquests -> lawyer = $request->lawyer2;
        $inquests -> staff = $request->assistant;
        $inquests -> schedule_id = $request->schedule;
        $inquests->save();
        return redirect('/inquest/show');

        }
    

    }
      public function lawyershowinquestedit($id)
    {

      
       

        $inquest = Inquest::where('schedule_id', '=', $id)->get();

        foreach($inquest as $inquests)
        {
            

            $schedule = Schedule::where('id',$inquests->schedule_id)->get();
           
        }
       $clients = Client::where('cl_status','For Inquest')
                  ->get();  

    $lawyer1 = Employee::where('position','Lawyer')->get();

      $lawyer2 = Employee::where('position','Lawyer')->get();
      $staff = Employee::where('position','Administrative Staff')->get();
        return view('lawyer ui.inquestedit')->withinquest($inquest)

                                   ->withclients($clients)
                                   ->withlawyer1($lawyer1)
                                   ->withlawyer2($lawyer2)
                                   ->withstaff($staff)
                                   ->withschedule($schedule);

    }
}
