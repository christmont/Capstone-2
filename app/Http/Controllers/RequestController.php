<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use App\Http\Controllers\Controller;
use App\Client;
use App\Involvement;
use App\Category;
use App\Education;
use App\Language;
use App\Position;
use App\casetobehandled;
use App\Adverse;
use App\Citizenship;
use App\Religion;
use App\Employee;
use App\Lawsuit;
use App\Schedule;
use App\courttype;
use App\Court;
use App\Lawyer;
use App\Service;
use App\casetype;
use App\Status;
use Session;
use App\Branch;
use App\Decision;
use App\requeststat;
use App\scheduletype;
use App\employeeclients;
use App\Reason;
use App\Count;
use App\clientadverse;
use DB;
use Carbon\Carbon;
use PDF;
use \Input as Input;

class RequestController extends Controller
{
  

       public function approve($id)
  {
          $approved = Client::find($id);
        $con = "";
        $date = date('F j Y ');
         $day =date('j');
        $year = date('y');
        $month = date('F');
        $approved->cl_status = 'Approved';
        $approved->save();
        
     $cases = casetobehandled::where('client_id',$approved->id)->get();
      foreach ($cases as $key => $case) {
        if ($case->nature_of_case == 'Criminal') 
        {
         $count = Count::orderBy('created_at','asc')->first();
         $number = $count->increment('criminalcount');

         $con = date('Ym',strtotime($case->created_at)) . substr($case->nature_of_case, 0,2). sprintf('00').$count->criminalcount;
         $case ->control_number = $con;
         $case ->save();
        }
        elseif ($case->nature_of_case == 'Civil') 
        {
         $count = Count::orderBy('created_at','asc')->first();
         $number = $count->increment('civilcount');
        
        
        
         $con = date('Ym',strtotime($case->created_at)) . substr($case->nature_of_case, 0,2). sprintf('00').$count->civilcount;
         $case ->control_number = $con;
         $case ->save();
          
        }
        elseif ($case->nature_of_case == 'Labor') 
        {
         $count = Count::orderBy('created_at','asc')->first();
         $number = $count->increment('laborcount');
         $con = date('Ym',strtotime($case->created_at)) . substr($case->nature_of_case, 0,2). sprintf('00').$count->laborcount;
         $case ->control_number = $con;
         $case ->save();
        }
        elseif ($case->nature_of_case == 'Administrative') 
        {
         $count = Count::orderBy('created_at','asc')->first();
         $number = $count->increment('administrativecount');
         $con = date('Ym',strtotime($case->created_at)) . substr($case->nature_of_case, 0,2). sprintf('00').$count->administrativecount;
         $case ->control_number = $con;
         $case ->save();
        }
       
                                        
    
                                        }
      $interviewsheet = Client::where('id',$approved->id)
                        ->with('casetobehandled')
                        ->get();


      $employeeclient = employeeclients::where('client_id',$approved->id)->get();

      foreach ($employeeclient as $key => $employeeclients) 
      {
        $lawyers = Employee::where('id',$employeeclients->employee_id)->get();
                                                           
   foreach($lawyers as $lawyer)
    {
      
   

     foreach ($interviewsheet as $key => $interviewsheets) 
     {
        foreach($interviewsheets->casetobehandled as $case){
        $casename = $case->casename;
        $casetype = $case->nature_of_case;
        $interviewer = $case->interviewer;
        $involvement = $case->clcase_involvement;
        $category = $case->clcomplainant_victim_of;
        $controlno = $case->control_number;
                                                           }
                                            $clientadverse = clientadverse::where('client_id',$approved->id)->get();
                                            
                                                     foreach($clientadverse as $clientadverses)
                                                     {
                                                     $adverse = Adverse::where('id',$clientadverses->adverse_id)->get();

                                                     }
                                              
        foreach($adverse as $adverses)  
        {                                           
        $advtype = $adverses->advprtytype;
        $advname = $adverses->advprtyfname . ' ' . $adverses->advprtymname . ' ' .
        $adverses->advprtylname;
        $advaddr = $adverses->advprtyaddress;
        
     
       $papersize = array(0, 0, 360, 360);
       $pdf = PDF::loadView('forms.interviewsheet', array(
        'name' => $interviewsheets->clfname . ' ' . $interviewsheets->clmname . ' ' . $interviewsheets->cllname,
        'address' => $interviewsheets->claddress,
        'religion' => $interviewsheets->clreligion,
        'citizenship' => $interviewsheets->clcitizenship,
        'email' => $interviewsheets->clemail ,
        'income' => $interviewsheets->clmonthly_net_income,
        'gender' => $interviewsheets->clgender,
        'cstat' => $interviewsheets->clcivil_status,
        'educ' => $interviewsheets->cleducational_attainment,
        'language' => $interviewsheets->cllanguage,
        'contact' => $interviewsheets->clcontact_no,
        'request' => $interviewsheets->nature_of_request,
        'detain' => $interviewsheets->cldetained,
        'detention' => $interviewsheets->clplace_of_detention,
        'detainedsince' => $interviewsheets->cldetained_since,
        'spouse' => $interviewsheets->clspouse,
        'spouseaddr' => $interviewsheets->claddress_of_spouse,
        'spousecon' => $interviewsheets->clcontact_no_of_spouse,
        'casename' => $casename,
        'casetype' => $casetype,
        'interviewer' => $interviewer,
        'involvement' => $involvement,
        'category' => $category,
        'controlno' => $controlno,
        'advtype' => $advtype,
        'advname' => $advname,
        'advaddr' => $advaddr,
        'lawyer' =>  $lawyer->efname . ' ' . $lawyer->emname . ' ' . $lawyer->elname,
        'date'=> $date,
        'day'=>$day,
        'year'=>$year,
        'month'=>$month
        )); 
      }
       
    }   
     } return $pdf->download($interviewsheets->clfname . '_' . $interviewsheets->cllname . '_complete_interview_sheet.pdf');                                                  
    }
   
  }

      
  


      



   

    public function deny($id)
    {

        $denied = Client::find($id);
        $denied->cl_status = 'Denied';
        $dates = date('F j Y ');
        $denied->save();
        $reason = Reason::all();

        return view('forms.deny')->withDenied($denied)
                                 ->withReason($reason)
                                 ->withDate($dates);
        // $papersize = array(0, 0, 360, 360);
        // $pdf = PDF::loadView('forms.deny', array(
        // 'name' => $denied->clfname . ' ' . $denied->clmname . ' ' . $denied->cllname,
        // 'address' =>$denied->claddress,
        // 'reason' =>$denied->reason,
        // 'date'=>$date
        
        // ));
        
        
        
        

        
        // return $pdf->download($denied->firstname . '_' . $denied->lastname . '_denied.pdf');
      

        


    }
    public function denysubmit($id, Request $request)
    {
      $date = date('F j Y ');
      $denied = Client::find($id);
      $denied->reason = $request->reason_id;
      $denied->save();

      $papersize = array(0, 0, 360, 360);
        $pdf = PDF::loadView('forms.deny2', array(
        'name' => $denied->clfname . ' ' . $denied->clmname . ' ' . $denied->cllname,
        'address' =>$denied->claddress,
        'reason' =>$denied->reason,
        'date'=>$date
        
        ));
        
        
        
        

        
        return $pdf->download($denied->firstname . '_' . $denied->lastname . '_denied.pdf');

    }



    public function print($id)
    {
       $client = Client::find($id);

         

      

 
      
  
       $papersize = array(0, 0, 360, 360);
       $pdf = PDF::loadView('pdf.affidavit', array(
        'name' => $client->clfname . ' ' . $client->clmname . ' ' . $client->cllname,
        'citizen' => $client->clcitizenship,
        'civilstat' => $client->clcivil_status,
        'spouse' => $client->clspouse,
        'address' => $client->claddress,
        
        

       ));

     

       return $pdf->download($client->clfname . '_' . $client->cllname . '_affidavit.pdf');
        return redirect('/home');                                
    }
    public function transfer($id)
    {

        return view('casedistribution');
    }
    public function showlawyers()
    {
        
      $employees = Employee::where('position','Lawyer')
                            ->get();
                            
      return view('lawyers')->withEmployees($employees);
    }
    public function availablelawyer($id, Request $request )
    {
      $employee = Employee::where('id',$request->lawyer)->get();
      $handlecase = $request->canhandlecase;
      foreach($handlecase as $handlecases)
      {
        
        foreach($employee as $employees)
        {
      $employees -> status = $handlecases;
      $employees ->save();
        }
      }
      return redirect('/home');
    }
    public function approvedtbl()
    {
        $clients = Client::where('cl_status','Approved')
        ->orderBy('cllname','asc')
        ->with('casetobehandled')
        ->with('adverse')
        ->get();
        
       
        return view('approvedtbl')->withClients($clients);
    }
    public function approvesheet()
    {
        return view('forms.interviewsheet');
    }

    
    
    
    public function showwalkintable()
    {
      $clients = Client::where('nature_of_request','Legal Documentation')->orderBy('cllname','asc')
      ->get();
  
      return view('maintenance.walkin')->withClients($clients);
    }
    public function shownotarytable()
    {
       $clients = Client::where('nature_of_request','Administration of oath')->orderBy('cllname','asc')
        ->get();
  
         return view('maintenance.notary')->withClients($clients);
    }
  
        
    



 
    public function view($id)
    {
        $clients = Client::find($id);
         $cases = casetobehandled::where('client_id',$clients->id)->get();
          $clientadverses = clientadverse::where('client_id',$clients->id)->get();
            foreach($clientadverses as $clientadverse)
            {
              $adverses = Adverse::where('id',$clientadverse->adverse_id)->get();
            }
        return view('viewer')->withClient($clients)
                             ->withCases($cases)
                             ->withAdverses($adverses);
    }

}


