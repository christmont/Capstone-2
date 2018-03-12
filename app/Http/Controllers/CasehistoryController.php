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

class CasehistoryController extends Controller
{
    public function showcasehistory()
    {
    	$clients = Client::where('cl_status','Approved')
    					 ->get();
    				foreach($clients as $client)
    				{
                         $case = casetobehandled::where([['client_id',$client->id],['decision','Acquited||Convicted']])->get();
    					$clientadverse = clientadverse::where('client_id',$client->id)->get();
    					  foreach($clientadverse as $clientadverses)
    					  {
    					  	$adverse = Adverse::where('id',$clientadverses->adverse_id)->get();
    					  		$employeeclient = employeeclients::where('client_id',$client->id)->get();
    					  			foreach($employeeclient as $employeeclients)
    					  			{
    					  				$lawyers = Employee::where([['id',$employeeclients->employee_id],['position','Lawyer']])->get();
    					  			}
    					  	foreach($client->casetobehandled as $case)
    					  	{
    					  		$court = Court::where('id',$case->court_id)->get();
    					  	}
    					  }
    					  	
    					  			
    				}
    		return view('casehistory.showcasehistory')->withClients($clients)
                                                      ->withCase($case)
    												  ->withAdverse($adverse)
    												  ->withLawyers($lawyers)
    												  ->withCourt($court);
    }
    
    public function view($id)
    {
    	$clients = Client::find($id);
    				$case = casetobehandled::where([['client_id',$clients->id],['decision','Acquited'||'Convicted']])->get();
    					$clientadverse = clientadverse::where('client_id',$clients->id)->get();
    					  foreach($clientadverse as $clientadverses)
    					  {
    					  	$adverse = Adverse::where('id',$clientadverses->adverse_id)->get();
    					  		$employeeclient = employeeclients::where('client_id',$clients->id)->get();
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
