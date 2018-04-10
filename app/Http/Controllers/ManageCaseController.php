<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\casetobehandled;
use App\approvedcase;
use App\Client;
use App\Adverse;
use App\Status;
use App\clientadverse;
use App\Http\Controllers\Controller;
use App\employeeclients;
use App\Employee;
use App\Decision;
use Carbon\Carbon;
use DB;
class ManageCaseController extends Controller
{
    public function showmanagecase()
    {
      // $allcases = Client::where('cl_status','Approved')
      // ->with('casetobehandled')
      // ->get();
      $allcases = DB::table('clients')
                  ->select('clients.*','casetobehandleds.*')
                  ->where([['cl_status','Approved'],['decision','=',null]])
                  ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                  ->get();
     
      
      // $cases = casetobehandled::where('decision','=',null)->with('client')->get();
    
      // $client = Client::all();
      
    
      return view('managecase') 
                                ->withallcases($allcases)
                                ;
                              
    
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
      

      return view('editcase')->withClients($clients)
                             ->withStatus($status)
                             ->withAdverses($adverses)
                             ->withDecision($decision);
    }
    public function updatecase(Request $request,$id)
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
      $value-> case_status = $request->casestatus;
      $value-> decision = $request->decision;
      if($request->casestatus == 'Arraignment')
      {
      $value-> arraignmentDate = $date;
      }
      elseif ($request->casestatus == 'Preliminary Conference') 
      {
      $value-> prelimconfDate = $date;
      }
      elseif ($request->casestatus == 'Pre-trial') 
      {
      $value-> pretrialDate = $date;
      }
       elseif ($request->casestatus == 'Initial Trial') 
      {
      $value-> inittrialdate = $date;
      }
       elseif ($request->casestatus == 'Trial Proper(Prosecution Evidence)') 
      {
      $value-> prosecevidence = $date;
      }
      elseif ($request->casestatus == 'Trial Proper(Defense Evidence)') 
      {
      $value-> defevidence = $date;
      }
      elseif ($request->casestatus == 'Promulgation') 
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
      
      
      
      
      return redirect('/managecase');
         


    }
    // public function deletecase($id)
    // {
    //   $client = Client::find($id);

    //   $client->delete();
    //     //Flashy::success('Succesfully deleted event');
    //     return redirect('/casetbh/show');
    // }
    public function showcasetransfer($id)
    {
      $casetransfer = Client::find($id);
      
      $cases = Client::where('id',$casetransfer->id)
                              ->with('casetobehandled')
                              ->get();
          
      $employeeclient = employeeclients::where('client_id',$casetransfer->id)
                        ->get();
                      
                        foreach ($employeeclient as $key => $employeeclients) 
                        {
                            $employees = Employee::select('efname','emname','elname')
                                                  ->where('id',$employeeclients->employee_id)
                                                  ->get();
                                                 
                              $replacement = Employee::where('position','Lawyer')
                                            ->get();
                        }

      return view('casedistribution')->withCases($cases)
                                     ->withEmployee($employees)
                                     ->withReplacement($replacement);
                        
   }
   public function casetransfer($id, Request $request)
   {
    $casetransfer = Client::find($id);
    $employeeclients = employeeclients::where('client_id',$casetransfer->id)
                      ->get();
       
            foreach($employeeclients as $employeeclient)
            {
              $employeeclient->employee_id = $request->replace;
              
              $employeeclient->save();
             

            }
          return redirect('/home');
   }
} 

      

