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
        // $test = DB::table('casetobehandleds')
        //     ->select((DB::raw('count(casename)')),'nature_of_case','casename')
            
        //     ->groupBy('nature_of_case','casename')
        //     ->get();
           
        
    $count =  $mostcasetype = DB::table('casetobehandleds')
                 ->select(DB::raw('distinct(nature_of_case) as casetype'),'casename', DB::raw('count(casename) as count'))
                 
                 ->groupBy('casetype','casename')
                 ->orderBy(Db::raw('count(casename)'),'casetype', 'desc')
              
                 ->get();
          
            return $count;
       
           
    
     $mostcasetype = DB::table('casetobehandleds')
                 ->select('nature_of_case', DB::raw('max(casename) as count'))
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
                      ->orderBy('casetobehandleds.updated_at','asc')
                      ->get();
      
      return view('Queries.pendingcases')->withpending($pending);
    }
}
