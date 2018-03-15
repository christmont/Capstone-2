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
                      ->whereNotNull('decision')
                      ->where([['casetobehandleds.case_status','Promulgation'],['clients.cl_status','Approved'],['clients.nature_of_request','Mediation']])
                      ->orWhere([['casetobehandleds.case_status','Promulgation'],['clients.cl_status','Approved'],['clients.nature_of_request','Representation of quasi-judicial bodies
                      ']])
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                      ->get();
          
    					  	foreach($casehistory as $case)
    					  	{
    					  		$court = Court::where('id',$case->court_id)->get();
                                $employeeclient = employeeclients::where('client_id',$case->id)->get();
    					  	}
    				
    				  			foreach ($employeeclient as $key => $employeeclients) 
                                {
                                    $lawyer = Employee::where([['position','Lawyer'],['id',$employeeclients->employee_id]])->get();
                                }
    				
    		return view('casehistory.showcasehistory')->withcasehistory($casehistory)
    												  ->withCourt($court)
                                                      ->withLawyer($lawyer);
    }
    
    public function view($id)
    {
    	$clients = Client::find($id);

    				$case = casetobehandled::where([['client_id',$clients->id],['decision','Acquited']])
                                            ->orwhere('decision','Dismissed')
                                            ->orwhere('decision','Conviction')
                                            ->get();

                   $employeeclient = employeeclients::where('client_id',$clients->id)->get();
                                
    					$clientadverse = clientadverse::where('client_id',$clients->id)->get();
                      
    					  foreach($clientadverse as $clientadverses)
    					  {

    					  	$adverse = Adverse::where('id',$clientadverses->adverse_id)->get();

                               
    					  			foreach($employeeclient as $employeeclients)
    					  			{
    					  				$lawyers = Employee::where([['id',$employeeclients->employee_id],['position','Lawyer']])->get();
    					  			}
    					  	foreach($clients->casetobehandled as $case)
    					  	{
    					  		$court = Court::where('id',$case->court_id)->get();
    					  	}
    					  }
    					  	
    				
    		return view('casehistory.view')->withClients($clients)
                                                      ->withCase($case)
    												  ->withAdverse($adverse)
    												  ->withLawyers($lawyers)
    												  ->withCourt($court);
    }
    





}
