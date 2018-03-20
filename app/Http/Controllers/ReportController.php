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
      

    // 	$criminalreport = Client::where([['nature_of_request','Mediation'],['cl_status','Approved']])
    //                     ->orWhere('nature_of_request','Representation of quasi-judicial bodies')
    //                     ->get();
    //                     foreach($criminalereport as $criminalreports)
    //                     {
    //                    $criminalcase = casetobehandled::where([['client_id',$criminalreports->id],['nature_of_case','Criminal']])->get();
    //                     }

    //                    foreach($criminalcase as $criminal)
    //                    {
    //                      $criminalcourts = Court::where('id',$criminal->court_id)->get();
    //                    }

    // $laborreport = Client::where([['nature_of_request','Mediation'],['cl_status','Approved']])
    //                     ->orWhere('nature_of_request','Representation of quasi-judicial bodies')
    //                     ->get();
    //                     foreach($laborreport as $laborreports)
    //                     {
    //                    $laborcase = casetobehandled::where([['client_id',$laborreports->id],['nature_of_case','Labor']])->get();
    //                     }

    //                    foreach($laborcase as $labor)
    //                    {
    //                      $laborcourts = Court::where('id',$labor->court_id)->get();
    //                    }
    // $civilreport = Client::where([['nature_of_request','Mediation'],['cl_status','Approved']])
    //                     ->orWhere('nature_of_request','Representation of quasi-judicial bodies')
    //                     ->get();
    //                     foreach($civilreport as $civilreports)
    //                     {
    //                    $civilcase = casetobehandled::where([['client_id',$civilreports->id],['nature_of_case','Civil']])->get();
    //                     }

    //                    foreach($civilcase as $civil)
    //                    {
    //                      $civilcourts = Court::where('id',$civil->court_id)->get();
    //                    } 
     $criminalreport = DB::table('clients')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['casetobehandleds.nature_of_case','Criminal'],['clients.cl_status','Approved']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['casetobehandleds.nature_of_case','Criminal'],['clients.cl_status','Approved']])
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                      ->get();
                    
                      foreach($criminalreport as $criminalreports)
                      {
        $criminalcourts = DB::table('courts')
                             ->where('id',$criminalreports->court_id)
                             ->get();
                            
                      }
         $civilreport = DB::table('clients')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['casetobehandleds.nature_of_case','Civil'],['clients.cl_status','Approved']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['casetobehandleds.nature_of_case','Civil'],['clients.cl_status','Approved']])
                      ->get();
                    
                      foreach($civilreport as $civilreports)
                      {
        $civilcourts = DB::table('courts')
                             ->where('id',$civilreports->court_id)
                             ->get();
                            
                      }
              $laborreport = DB::table('clients')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['casetobehandleds.nature_of_case','Labor'],['clients.cl_status','Approved']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['casetobehandleds.nature_of_case','Labor'],['clients.cl_status','Approved']])
                      ->get();
                   
                     
                      foreach($laborreport as $laborreports)
                      {
                $laborcourts = DB::table('courts')
                             ->where('id',$laborreports->court_id)
                             ->get();
                            
                      }      

      $administrativereport = DB::table('clients')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['casetobehandleds.nature_of_case','Administrative'],['clients.cl_status','Approved']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['casetobehandleds.nature_of_case','Administrative'],['clients.cl_status','Approved']])
                      ->get();
                     
                      foreach($administrativereport as $administrativereports)
                      {
        $administrativecourts = DB::table('courts')
                             ->where('id',$administrativereports->court_id)
                             ->get();
                            
                      }
               // Client::all();    
               //     foreach($administrativereport as $administrativereports)
               //     {
               //     $administrativeclients = Client::where([['id',$administrativereports->id],['nature_of_request','Representation of quasi-judicial bodies'],['cl_status','Approved']])
               //          ->get();
               //     }   
               //          foreach($administrativereport as $administrativereports)
               //          {
               //         $administrativecase = casetobehandled::where([['nature_of_case','Administrative']])->get();
                      
               //          }

               //         foreach($administrativecase as $administrative)
               //         {
               //           $administrativecourts = Court::select('name')->get();
                         
               //         }
                          

                       return view('reports.casestables')
                                                            ->withadministrativereport($administrativereport)
                                                            // ->withadministrativecase($administrativecase)
                                                             ->withadministrativecourts($administrativecourts) 
                                                             ->withcriminalreport($criminalreport)
                                                             ->withcivilreport($civilreport) 
                                                             ->withlaborreport($laborreport)
                                                             ->withlaborcourts($laborcourts)
                                                             ->withcivilcourts($civilcourts)
                                                             ->withcriminalcourts($criminalcourts)
                                                            ;

                                                            
                                                            // ->withcriminalcase($criminalcase)
                                                             
                                                            // ->withcivilcase($civilcase)
                                                            
                                                            // ->withlaborcase($laborcase)
                                                            
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
      // $criminalreport = Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
      //                   ->get();
      //                  $criminalcase = casetobehandled::where([['client_id',$criminalreport->id],['casetype','Criminal']])->get();

      //                  foreach($criminalcase as $criminal)
      //                  {
      //                    $criminalcourts = Court::where('id',$criminal->court_id)->get();
      //                  }

      // $civilreport =    Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
      //                   ->get();
      //                  $civilcase = casetobehandled::where([['client_id',$civilreport->id],['casetype','Civil']])->get();

      //                  foreach($civilcase as $civil)
      //                  {
      //                    $civilcourts = Court::where('id',$civil->court_id)->get();
      //                  }

      // $laborreport = Client::where('nature_of_request','Mediation'||'Representation of quasi-judicial bodies')
      //                   ->get();
      //                  $laborcase = casetobehandled::where([['client_id',$laborreport->id],['casetype','Labor']])->get();

      //                  foreach($laborcase as $labor)
      //                  {
      //                    $laborcourts = Court::where('id',$labor->court_id)->get();
      //                  }
             $criminalreport = DB::table('clients')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['casetobehandleds.nature_of_case','Criminal'],['clients.cl_status','Approved']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['casetobehandleds.nature_of_case','Criminal'],['clients.cl_status','Approved']])
                      ->get();
                      
                     
                      foreach($criminalreport as $criminalreports)
                      {
        $criminalcourts = DB::table('courts')
                             ->where('id',$criminalreports->court_id)
                             ->get();
                      }     
                      
         $civilreport = DB::table('clients')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['casetobehandleds.nature_of_case','Civil'],['clients.cl_status','Approved']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['casetobehandleds.nature_of_case','Civil'],['clients.cl_status','Approved']])
                      ->get();
                     
                      foreach($civilreport as $civilreports)
                      {
        $civilcourts = DB::table('courts')
                             ->where('id',$civilreports->court_id)
                             ->get();
                      }    
                      
               $laborreport = DB::table('clients')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['casetobehandleds.nature_of_case','Labor'],['clients.cl_status','Approved']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['casetobehandleds.nature_of_case','Labor'],['clients.cl_status','Approved']])
                      ->get();
                   
                     
                      foreach($laborreport as $laborreports)
                      {
                $laborcourts = DB::table('courts')
                             ->where('id',$laborreports->court_id)
                             ->get();
                            
                      }         
                            

      $administrativereport = DB::table('clients')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['casetobehandleds.nature_of_case','Administrative'],['clients.cl_status','Approved']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['casetobehandleds.nature_of_case','Administrative'],['clients.cl_status','Approved']])
                      ->get();
                      
                     
                      foreach($administrativereport as $administrativereports)
                      {
        $administrativecourts = DB::table('courts')
                             ->where('id',$administrativereports->court_id)
                             ->get();
                             
                      }
                            
                             foreach($laborreport as $laborreports)
                      {
        $laborcourts = DB::table('courts')
                             ->where('id',$laborreports->court_id)
                             ->get();
                      }
                             
                      
                   
                 
               

                      
      // $administrativereport = Client::where([['nature_of_request','Mediation'],['cl_status','Approved']])
      //                   ->orWhere('nature_of_request','Representation of quasi-judicial bodies')
      //                   ->get();
      //                   foreach($administrativereport as $administrativereports)
      //                   {
      //                  $administrativecase = casetobehandled::where([['client_id',$administrativereports->id],['nature_of_case','Administrative']])->get();
      //                   }

      //                  foreach($administrativecase as $administrative)
      //                  {
      //                    $administrativecourts = Court::where('id',$administrative->court_id)->get();
      //                  }

     // foreach($criminalreport as $criminalreports)
     // {
     //  foreach($criminalcase as $criminalcases)
     //  {
     //    foreach($civilreport as $civilreports)
     //    {
     //      foreach($civilcase as $civilcases)
     //      {
     //        foreach($laborreport as $laborreports)
     //        {
     //          foreach($laborcase as $laborcases)
              //{
                // foreach($administrativereport as $administrativereports)
                // {
                  // foreach($administrativecase as $administrativecases)
                  // {
                    // foreach($criminalcourts as $criminalcourt)
                    // {
                    //   foreach($civilcourts as $civilcourt)
                    //   {
                    //     foreach($laborcourts as $laborcourt)
                    //     {
                          // foreach($administrativecourts as $administrativecourt)
                          // {

      $date = date('F j Y',strtotime(Carbon::now()));
      $year = date('Y',strtotime(Carbon::now()));
      
       $pdf = PDF::loadView('reports.yearend', [
                                                'criminalclients'=>$criminalreport,
                                                'criminalcourts'=>$criminalcourts,
                                                'administrativeclients'=>$administrativereport,
                                                'administrativecourts'=>$administrativecourts,
                                                'laborclients'=>$laborreport,
                                                'laborcourts'=>$laborcourts,
                                                'civilclients'=>$civilreport,
                                                'civilcourts'=>$civilcourts,


        // 'administrativecases'=>$administrativecases,
        // 'criminalcontrolno' => $criminalcases->control_number,
        // 'criminalpartyrepresented' => $criminalreports->clfname . ' ' . $criminalreports->cllname,
        // 'criminalgender' => $criminalreports->clgender,
        // 'criminaltitle' => $criminalcases->title,
        // 'criminalcourt' => $criminalcourt->name,
        // 'criminalcaseno' => $criminalcases->caseno,
        // 'criminalcasename' =>$criminalcases->casename,
        // 'criminalcasestatus'=>$criminalcases->case_status,
        // 'civilcontrolno' => $civilcases->control_number,
        // 'civilpartyrepresented' => $civilreports->clfname . ' ' . $civilreports->cllname,
        // 'civilgender' => $civilreports->clgender,
        // 'civiltitle' => $civilcases->title,
        // 'civilcourt' => $civilcourt->name,
        // 'civilcaseno' => $civilcases->caseno,
        // 'civilcasename' =>$civilcases->casename,
        // 'civilcasestatus'=>$civilcases->case_status,
        // 'laborcontrolno' => $laborcases->control_number,
        // 'laborpartyrepresented' => $laborreports->clfname . ' ' . $laborreports->cllname,
        // 'laborgender' => $laborreports->clgender,
        // 'labortitle' => $laborcases->title,
        // 'laborcourt' => $laborcourt->name,
        // 'laborcaseno' => $laborcases->caseno,
        // 'laborcasename' =>$laborcases->casename,
        // 'laborcasestatus'=>$laborcases->case_status,
        // 'administrativecontrolno' => $administrativecases->control_number,
        // 'administrativepartyrepresented' => $administrativereports->clfname . ' ' . $administrativereports->cllname,
        // 'administrativegender' => $administrativereports->clgender,
        // 'administrativetitle' => $administrativecases->title,
        // 'administrativecourt' => $administrativecourt->name,
        // 'administrativecaseno' => $administrativecases->caseno,
        // 'administrativecasename' =>$administrativecases->casename,
        // 'administrativecasestatus'=>$administrativecases->case_status,
        'date'=>$date,
        'year'=>$year,
       ]);
         //                }
         //               }
         //              }
         //            }
         //         }
          //      }
         //      }
         //    }
         // }
       
        
       return $pdf->stream();

    }
    public function courtcase()
    {
      $mtccase = DB::table('clients')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['clients.cl_status','Approved'],['casetobehandleds.court_id','2']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['clients.cl_status','Approved'],['casetobehandleds.court_id','2']])
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                     ->get();
                     
                      foreach($mtccase as $mtccases)
                      {
        $mtc = DB::table('courts')
                             ->where([['id',$mtccases->court_id]])
                             ->get();
                            
                      }
       $rtccase = DB::table('clients')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['clients.cl_status','Approved'],['casetobehandleds.court_id','3']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['clients.cl_status','Approved'],['casetobehandleds.court_id','3']])
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                     ->get();
                     
                      foreach($rtccase as $rtccases)
                      {
        $rtc = DB::table('courts')
                             ->where([['id',$rtccases->court_id]])
                             ->get();
                            
                      }

         $sbcase = DB::table('clients')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['clients.cl_status','Approved'],['casetobehandleds.court_id','1']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['clients.cl_status','Approved'],['casetobehandleds.court_id','1']])
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                     ->get();
                     
                      foreach($sbcase as $sbcases)
                      {
        $sb = DB::table('courts')
                             ->where([['id',$sbcases->court_id]])
                             ->get();
                            
                      }
   
     
        return view('reports.bycourt')->withmtccase($mtccase)
                                      ->withmtc($mtc)
                                      ->withsbcase($sbcase)
                                      ->withsb($sb)
                                      ->withrtccase($rtccase)
                                      ->withrtc($rtc);

    }
    public function printcasecourt()
    {
      $mtccase = DB::table('clients')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['clients.cl_status','Approved'],['casetobehandleds.court_id','2']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['clients.cl_status','Approved'],['casetobehandleds.court_id','2']])
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                     ->get();
                     
                      foreach($mtccase as $mtccases)
                      {
        $mtc = DB::table('courts')
                             ->where([['id',$mtccases->court_id]])
                             ->get();
                            
                      }
       $rtccase = DB::table('clients')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['clients.cl_status','Approved'],['casetobehandleds.court_id','3']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['clients.cl_status','Approved'],['casetobehandleds.court_id','3']])
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                     ->get();
                     
                      foreach($rtccase as $rtccases)
                      {
        $rtc = DB::table('courts')
                             ->where([['id',$rtccases->court_id]])
                             ->get();
                            
                      }

         $sbcase = DB::table('clients')
                      ->where([['clients.nature_of_request','Representation of quasi-judicial bodies'],['clients.cl_status','Approved'],['casetobehandleds.court_id','1']])
                      ->orWhere([['clients.nature_of_request','Mediation'],['clients.cl_status','Approved'],['casetobehandleds.court_id','1']])
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                     ->get();
                     
                      foreach($sbcase as $sbcases)
                      {
        $sb = DB::table('courts')
                             ->where([['id',$sbcases->court_id]])
                             ->get();
                            
                      }
                      $date = date('F j Y',strtotime(Carbon::now()));
      $year = date('Y',strtotime(Carbon::now()));
      
       $pdf = PDF::loadView('reports.casecourt', [
                                                'mtccase'=>$mtccase,
                                                'mtc'=>$mtc,
                                                'sbcase'=>$sbcase,
                                                'sb'=>$sb,
                                                'rtccase'=>$rtccase,
                                                'rtc'=>$rtc,
                                                'date'=>$date,
                                                'year'=>$year,
       ]);
        return $pdf->stream();
    }
}