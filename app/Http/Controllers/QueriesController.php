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
           
        
    $civilcount  = DB::table('casetobehandleds')
                 ->select(DB::raw('distinct(nature_of_case) as casetype'),'casename', DB::raw('count(casename) as count'))
                 ->where('nature_of_case','Civil')
                 ->groupBy('casetype','casename')
                 ->orderBy('count', 'desc')
                 ->take(1)
              
                 ->get();
   $criminalcount  = DB::table('casetobehandleds')
                 ->select(DB::raw('distinct(nature_of_case) as casetype'),'casename', DB::raw('count(casename) as count'))
                 ->where('nature_of_case','Criminal')
                 ->groupBy('casetype','casename')
                 ->orderBy('count', 'desc')
                 ->take(1)
              
                 ->get();
    $laborcount  = DB::table('casetobehandleds')
                 ->select(DB::raw('distinct(nature_of_case) as casetype'),'casename', DB::raw('count(casename) as count'))
                 ->where('nature_of_case','Labor')
                 ->groupBy('casetype','casename')
                 ->orderBy('count', 'desc')
                 ->take(1)
              
                 ->get();
     $administrativecount  = DB::table('casetobehandleds')
                 ->select(DB::raw('distinct(nature_of_case) as casetype'),'casename', DB::raw('count(casename) as count'))
                 ->where('nature_of_case','Administrative')
                 ->groupBy('casetype','casename')
                 ->orderBy('count', 'desc')
                 ->take(1)
              
                 ->get();
          
          
          
          
           
       
           
  				
    			return view('Queries.mostcaseshandled')->withcriminalcount($criminalcount)
                                                       ->withcivilcount($civilcount)
                                                       ->withlaborcount($laborcount)
                                                       ->withadministrativecount($administrativecount);
    	
    	
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
    public function lawyercase()
    {
     $lawyers = DB::table('employees')
                ->where('position','Lawyer')
                ->get();

      $lawyercase = DB::table('employeeclients')
                 ->select(DB::raw('distinct(concat(efname, emname , elname)) as lawyer'),'casename', DB::raw('count(casename) as count'))
                 ->join('employees','employeeclients.employee_id','=','employees.id')
                 ->join('casetobehandleds','employeeclients.client_id','=','casetobehandleds.client_id')
                 ->groupBy('lawyer','casename')
                 ->orderBy('count', 'desc')
              
                 ->get();
                 
                 return view('Queries.lawyercase')->withlawyercase($lawyercase);
    }
}
