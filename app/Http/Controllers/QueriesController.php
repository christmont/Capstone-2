<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\casetobehandled;
use App\employeeclients;
use App\Employee;
use DB;


class QueriesController extends Controller
{
    public function mostcasetype()
    {
      $mostcasetype = DB::table('casetobehandleds')
                 ->select('nature_of_case', DB::raw('count(casename) as count'))
                 ->groupBy('nature_of_case')
                 ->get();
    		return $mostcasetype;				
    			return view('Queries.mostcaseshandled')->withmostcasetype($mostcasetype);
    	
    	
    }
    public function pendingcase()
    {
       $pending = DB::table('clients')
                      ->whereNull('casetobehandleds.decision')
                      ->join('casetobehandleds','casetobehandleds.client_id','=','clients.id')
                      ->get();
      
      return view('Queries.pendingcases')->withpending($pending);
    }
}
