<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\casetobehandled;
use App\Adverse;
use App\clientadverse;
use App\Employee;
use App\Court;
use App\employeeclients;
use DB;

class CasehistoryController extends Controller
{
    public function showcasehistory()
    {
      // $casehistory = DB::table('employeeclients')
      //               ->select('clients.*','employees.*','casetobehandleds.*')
      //               ->where('casetobehandleds.decision','Dismissed')
      //               ->orwhere('casetobehandleds.decision','Acquital')
      //               ->orwhere('casetobehandleds.decision','Conviction')
      //               ->join('clients','clients.id','=','employeeclients.client_id')
      //               ->join('employees','employees.id','=','employeeclients.client_id')
      //               ->join('casetobehandleds','casetobehandleds.client_id','=','employeeclients.client_id')
      //               ->get();

                    // return $casehistory;

      // $court = DB::table('courts')
      //                ->select('employees.*','courts.*')
      //               ->join('casetobehandleds','casetobehandleds.court_id','=','courts.id')
      //               ->join('employees','courts.id','=','employees.court_id')
      //               ->get();



        $casehistory = casetobehandled::where('decision','!=',null)
                              ->with('client')
                              ->get();
                             
                      foreach ($casehistory as $key => $casehist) 
                      {
                       
                      
                  
                      
                
    					  	
    					  		$court = Court::where('id',$casehist->court_id)->get();
                    $employeeclient = employeeclients::where('client_id',$casehist->id)->get();


    					  	
    				
    				  			foreach ($employeeclient as $key => $employeeclients) 
                                {
                                    $lawyer = Employee::where([['position','Lawyer'],['id',$employeeclients->employee_id]])->get();
                                    
                                }
                  
    				          }
    		return view('casehistory.showcasehistory')->withcasehistory($casehistory)
    											      ->withcourt($court)
                                                      ->withlawyer($lawyer)               ;
    }
    
    public function view($id)
    {
    	     $casehistory = casetobehandled::where('decision','!=',null)
                              ->with('client')
                              ->get();
                
                            foreach($casehistory as $case)
                            {
                                $court = Court::where('id',$case->court_id)->get();
                               
                                $employeeclient = employeeclients::where('client_id',$case->id)->get();
                               
                            
                    
                                foreach ($employeeclient as $key => $employeeclients) 
                                {
                                    $lawyer = Employee::where([['position','Lawyer'],['id',$employeeclients->employee_id]])->get();
                                    
                                }
                                $clientadverse = clientadverse::where('client_id',$case->client_id)->get();
                                foreach($clientadverse as $clientadverses)
                                {
                                  $adverse = Adverse::where('id',$clientadverses->adverse_id)->get();
                                }
                            }
                    
            return view('casehistory.view')->withcasehistory($casehistory)
                                          ->withCourt($court)
                                          ->withadverse($adverse)
                                          ->withLawyer($lawyer);
    }
    					  	
    				
    		

    }
    






