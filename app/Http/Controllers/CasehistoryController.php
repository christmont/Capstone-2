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
        $casehistory = DB::table('clients')
                      ->select('clients.*')
                      ->where([['clients.cl_status','Approved'],['clients.nature_of_request','Mediation']])
                      ->orWhere([['clients.cl_status','Approved'],['clients.nature_of_request','Representation of quasi-judicial bodies']])
                      ->get();
                      foreach ($casehistory as $key => $casehist) 
                      {
                       
                      
                    $case = DB::table('casetobehandleds')
                      ->whereNotNull('decision')
                      ->where([['casetobehandleds.case_status','Promulgation'],['casetobehandleds.client_id','=',$casehist->id]])
                      ->orWhere([['casetobehandleds.case_status','Promulgation'],['casetobehandleds.client_id','=',$casehist->id]])
                      ->get(); 
                     
                      
                
    					  	foreach($case as $caseh)
    					  	{
    					  		$court = Court::where('id',$caseh->court_id)->get();
                    $employeeclient = employeeclients::where('client_id',$caseh->id)->get();


    					  	
    				
    				  			foreach ($employeeclient as $key => $employeeclients) 
                                {
                                    $lawyer = Employee::where([['position','Lawyer'],['id',$employeeclients->employee_id]])->get();
                                    
                                }
                  }
    				          }
    		return view('casehistory.showcasehistory')->withcasehistory($casehistory)
    												                      ->withCourt($court)
                                                  ->withLawyer($lawyer);
    }
    
    public function view($id)
    {
    	   $casehistory = DB::table('clients')
                      ->whereNotNull('decision')
                      ->where([['casetobehandleds.case_status','Promulgation'],['clients.cl_status','Approved'],['clients.nature_of_request','Mediation'],['clients.id',$id]])
                      ->orWhere([['casetobehandleds.case_status','Promulgation'],['clients.cl_status','Approved'],['clients.nature_of_request','Representation of quasi-judicial bodies
                      '],['clients.id',$id]])
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                      ->get();
                
                            foreach($casehistory as $case)
                            {
                                $court = Court::where('id',$case->court_id)->get();
                               
                                $employeeclient = employeeclients::where('client_id',$case->id)->get();
                                return $employeeclient;

                            
                    
                                foreach ($employeeclient as $key => $employeeclients) 
                                {
                                    $lawyer = Employee::where([['position','Lawyer'],['id',$employeeclients->employee_id]])->get();
                                    return $lawyer;
                                }
                            }
                    
            return view('casehistory.view')->withcasehistory($casehistory)
                                                      ->withCourt($court)
                                                      ->withLawyer($lawyer);
    }
    					  	
    				
    		

    }
    






