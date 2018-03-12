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
use App\clientadverse;
use DB;
use Carbon\Carbon;
use PDF;
use \Input as Input;

class ReportController extends Controller
{
    public function yearendreport()
    {
      
      
    	// $criminalreport = Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
     //                    ->get();
     //                   $criminalcase = casetobehandled::where([['client_id',$criminalreport->id],['casetype','Criminal']])->get();

     //  $civilreport =    Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
     //                    ->get();
     //                   $civilcase = casetobehandled::where([['client_id',$civilreport->id],['casetype','Civil']])->get();

     //  $laborreport = Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
     //                    ->get();
     //                   $laborcase = casetobehandled::where([['client_id',$laborreport->id],['casetype','Labor']])->get();

     //  $administrativereport = Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
     //                    ->get();
     //                   $administrativecase = casetobehandled::where([['client_id',$administrativereport->id],['casetype','Administrative']])->get();

                       return view('reports.casestables');
                       // ->withcriminalreport($criminalreport)
                       //                                      ->withcriminalcase($criminalcase)
                       //                                      ->withcivilreport($civilreport)
                       //                                      ->withcivilcase($civilcase)
                       //                                      ->withlaborreport($laborreport)
                       //                                      ->withlaborcase($laborcase)
                       //                                      ->withadministrativereport($administrativereport)
                       //                                      ->withadministrativecase($administrativecase)

    }
     public function civilyearendreport()
    {
    	$civilreport = Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
                        ->get();
                       $civilcase = casetobehandled::where([['client_id',$civilreport->id],['casetype','Civil']])->get();

                       return view('reports.civilreport')->withcivilreport($civilreport)
                       										->withcivilcase($civilcase);
    }
     public function laboryearendreport()
    {
    	$laborreport = Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
                        ->get();
                       $laborcase = casetobehandled::where([['client_id',$laborreport->id],['casetype','Labor']])->get();

                       return view('reports.laborreport')->withlaborreport($laborreport)
                       										->withlaborcase($laborcase);
    }
     public function administrativeyearendreport()
    {
    	$administrativereport = Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
                        ->get();
                       $administrativecase = casetobehandled::where([['client_id',$administrativereport->id],['casetype','Administrative']])->get();

                       return view('reports.administrativereport')->withadministrativereport($administrativereport)
                       										->withadministrativecase($administrativecase);
    }
    public function reportprint()
    {
      $criminalreport = Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
                        ->get();
                       $criminalcase = casetobehandled::where([['client_id',$criminalreport->id],['casetype','Criminal']])->get();

                       foreach($criminalcase as $criminal)
                       {
                         $criminalcourts = Court::where('id',$criminal->court_id)->get();
                       }

      $civilreport =    Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
                        ->get();
                       $civilcase = casetobehandled::where([['client_id',$civilreport->id],['casetype','Civil']])->get();

                       foreach($civilcase as $civil)
                       {
                         $civilcourts = Court::where('id',$civil->court_id)->get();
                       }

      $laborreport = Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
                        ->get();
                       $laborcase = casetobehandled::where([['client_id',$laborreport->id],['casetype','Labor']])->get();

                       foreach($laborcase as $labor)
                       {
                         $laborcourts = Court::where('id',$labor->court_id)->get();
                       }

      $administrativereport = Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
                        ->get();
                       $administrativecase = casetobehandled::where([['client_id',$administrativereport->id],['casetype','Administrative']])->get();
                       foreach($administrativecase as $administrative)
                       {
                         $administrativecourts = Court::where('id',$administrative->court_id)->get();
                       }

     foreach($criminalreport as $criminalreports)
     {
      foreach($criminalcase as $criminalcases)
      {
        foreach($civilreport as $civilreports)
        {
          foreach($civilcase as $civilcases)
          {
            foreach($laborreport as $laborreports)
            {
              foreach($laborcase as $laborcases)
              {
                foreach($administrativereport as $administrativereports)
                {
                  foreach($administrativecase as $administrativecases)
                  {
                    foreach($criminalcourts as $criminalcourt)
                    {
                      foreach($civilcourts as $civilcourt)
                      {
                        foreach($laborcourts as $laborcourt)
                        {
                          foreach($administrativecourts as $administrativecourt)
                          {
      $date = Carbon::now();
      $papersize = array(0, 0, 360, 360);
       $pdf = PDF::loadView('reports.', array(
        'criminalcontrolno' => $criminalcases->control_number,
        'criminalpartyrepresented' => $criminalreports->clfname . ' ' . $criminalreports->cllname,
        'criminalgender' => $criminalreports->clgender,
        'criminaltitle' => $criminalcases->title,
        'criminalcourt' => $criminalcourt->name,
        'criminalcaseno' => $criminalcases->caseno,
        'criminalcasename' =>$criminalcases->casename,
        'criminalcasestatus'=>$criminalcases->case_status,
        'civilcontrolno' => $civilcases->control_number,
        'civilpartyrepresented' => $civilreports->clfname . ' ' . $civilreports->cllname,
        'civilgender' => $civilreports->clgender,
        'civiltitle' => $civilcases->title,
        'civilcourt' => $civilcourt->name,
        'civilcaseno' => $civilcases->caseno,
        'civilcasename' =>$civilcases->casename,
        'civilcasestatus'=>$civilcases->case_status,
        'laborcontrolno' => $laborcases->control_number,
        'laborpartyrepresented' => $laborreports->clfname . ' ' . $laborreports->cllname,
        'laborgender' => $laborreports->clgender,
        'labortitle' => $laborcases->title,
        'laborcourt' => $laborcourt->name,
        'laborcaseno' => $laborcases->caseno,
        'laborcasename' =>$laborcases->casename,
        'laborcasestatus'=>$laborcases->case_status,
        'administrativecontrolno' => $administrativecases->control_number,
        'administrativepartyrepresented' => $administrativereports->clfname . ' ' . $administrativereports->cllname,
        'administrativegender' => $administrativereports->clgender,
        'administrativetitle' => $administrativecases->title,
        'administrativecourt' => $administrativecourt->name,
        'administrativecaseno' => $administrativecases->caseno,
        'administrativecasename' =>$administrativecases->casename,
        'administrativecasestatus'=>$administrativecases->case_status,
        'date'=>$date,
       ));
                        }
                       }
                      }
                    }
                  }
                }
              }
            }
         }
        }
      }
     }
       

       return $pdf->stream();

    }
     

}
