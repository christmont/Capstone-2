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

class RegisterController extends Controller
{
   
       public function showemp()
    {
        $employees = Employee::all();
        $positions = Position::all();

        return view('maintenance.employee_table')->withPositions($positions)->withEmployees($employees);
    }
        public function showempregister()
    {
       $positions = Position::all();
       $courts = Court::all();
        return view('maintenance.employee_register')->withPositions($positions)
                                                    ->withCourts($courts);
    }

    public function empregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'efname'=>'required',
               ));

         $employee = new Employee;
          

        $employee-> efname = $request->efname;
        $employee-> emname = $request->emname;
        $employee-> elname = $request->elname;
        $employee-> email = $request->email;

        $employee-> position = $request->position;
        
       
        $employee-> contact = $request->contact;
        $employee-> password = bcrypt($request->password);
        $employee-> court_id = $request->court;

        
        $employee->save();
       
     
        
        Session::flash('message', 'The employee was successfuly added! aye.'); 
        Session::flash('alert-class', 'alert-danger'); 

   
       return redirect('/employee/show');

    } 
    public function showreason()
    {

        $reasons = reason::all();
        return view('maintenance.reason_table')->withreasons($reasons);
    }
     public function showreasonregister()
    {

       
        return view('maintenance.reason_register');
    }

    public function reasonregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $reason = new Reason;
     
       
        $reason-> name = $request->name;

        $reason-> clients_id = $request->clients_id;
       
       
        $reason->save();
       
     
        return redirect('/reason/show');
        

   
            //return redirect()->route('interviewees.create');

    }

      public function showscheduletype()
    {

        $scheduletypes = scheduletype::all();
        return view('maintenance.scheduletype_table')->withscheduletypes($scheduletypes);
    }
     public function showscheduletyperegister()
    {

       
        return view('maintenance.scheduletype_register');
    }

    public function scheduletyperegister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $scheduletype = new scheduletype;
     
       
        $scheduletype-> name = $request->name;
        $scheduletype-> schedule_id = $request->schedule_id;
       
       
        $scheduletype->save();
       
     
        return redirect('/scheduletype/show');
            
  }
     public function showcase()
    {
        $lawsuits = Lawsuit::all();

        return view('maintenance.case_table', ['lawsuits' => $lawsuits]);
    }
     public function showcaseregister()
    {
       $lawsuits = Lawsuit::all();
       $casetype = casetype::all();
        return view('maintenance.case_reg')->withLawsuits($lawsuits)
                                           ->withcasetype($casetype);
    }

    public function caseregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
               ));

         $lawsuit = new Lawsuit;

          $lawsuit-> name = $request->name;
        $lawsuit-> casetype_id = $request->casetype;
        $lawsuit->save();
       
     
        
        Session::flash('message', 'The case was successfuly added! aye.'); 
        Session::flash('alert-class', 'alert-danger'); 

   
       return redirect('/lawsuit/show');

    }  
    public function showlawyer()
    {
  $client = employeeclients::orderBy('created_at','desc')
       ->first();

  $employees = Employee::where([['position','lawyer'],['id',$client->employee_id]])
  ->get();

  
  return view('lawyershow')->withEmployees($employees);
    }     
    
    public function showreqtable()
    {
      $clients = Client::where('cl_status','Pending')->orderBy('cllname','asc')
        ->with('casetobehandled')
        ->get();
       foreach($clients as $client)
       {
        $clientadverse = clientadverse::where('client_id',$client->id)->get();

       
       
       }  
          return view('maintenance.client_table')->withClients($clients);
       
    }
    
   
   
  
        
    



    public function showclientregister()
    {
        $clients = Client::orderBy('cllname','asc')->get();
        $services = Service::orderBy('name','asc')->get();
        $religions = Religion::orderBy('name','asc')->get();
        $educations = Education::orderBy('id','asc')->get();
        $involvements = Involvement::orderBy('name','asc')->get();
        $languages = Language::orderBy('name','asc')->get();
        $citizenships = Citizenship::orderBy('name','asc')->get();
    	   return view('realrequest')->withClients($clients)
        ->withReligions($religions)
        ->withEducations($educations)
        ->withInvolvements($involvements)
        ->withLanguages($languages)
        ->withCitizenships($citizenships)
        ->withservices($services);
    }

    public function clientregister(Request $request)
    {
                //dd('gdgfgf'); 
        	// $this->validate($request, 
         //    [
         //            'fname'=>'required|max:50',
         //            'mname'=>'nullable|max:50',
         //            'lname'=>'required|max:50',
         //            'religion'=>'nullable|max:50',
         //            'Citizenship'=>'required|max:50',
         //            'Address'=>'required|max:200',
         //            'Email'=>'nullable|max:50',
         //            'Income'=>'nullable',
         //            'Detained'=>'required|max:5',
         //            'cldetained_since'=>'nullable|required',
         //            'Birthday'=>'required|date',
         //            'gender'=>'nullable|max:10',
         //            'civilstat'=>'required|max:30',
         //            'Educational'=>'nullable|max:50',
         //            'Language'=>'nullable|max:50',
         //            'Contact'=>'nullable',
         //            'nor'=>'required|max:50',
         //            'spouse_name'=>'nullable|max:50',
         //            'spouse_addr'=>'nullable|max:200',
         //            'spouse_con'=>'nullable|',
         //            'detainedsince'=>'nullable|date',
         //            'detention'=>'nullable|max:100',
                    

         //    ],
         //    [
         //      'fname.required' => 'Walang pangalan',
         //      'lname.required' => 'Walang apelyido',
         //    ]
         //          );

            $client = new Client;
    

        

            $client-> clfname = $request->fname;
            $client-> clmname = $request->mname;
            $client-> cllname = $request->lname;
            $client-> clreligion = $request->religion;
            $client-> clcitizenship = $request->Citizenship;
            $client-> claddress = $request->Address;
            $client-> clemail = $request->Email;
            $client-> clmonthly_net_income = $request->Income;

            $client-> cldetained = $request->detained;
            $client-> cldetained_since = $request->DetainedDate;
            $client-> clbdate = $request->Birthday;
            $client-> clgender = $request->gender;
            $client-> clcivil_status = $request->civilstat;
            $client-> cleducational_attainment = $request->Educational;
            $client-> cllanguage = $request->Language;
            $client-> clcontact_no = $request->Contact;
            $client-> clspouse = $request->spouse;
            $client-> claddress_of_spouse = $request->spouse_addr;
            $client-> clcontact_no_of_spouse = $request->spouse_con;
            $client-> cldetained_since = $request->detainedsince;
            $client-> clplace_of_detention = $request->detention;
            $client-> nature_of_request = $request->nor;
           
            if ($request->nor == 'Legal Advice' ) 
            {
              $lawyer = Employee::where([['position','Lawyer'],['status','1']])->take(1)->InRandomOrder()->get();
              $client->cl_status = "Walkin";
              $client->save();
              $lawyerclient = Client::orderBy('created_at','desc')->take(1)->get();
                foreach ($lawyer as $key => $lawyers) 
                {
                 foreach ($lawyerclient as $key => $lawyerclients) 
                 {
                  $lawyercase = new employeeclients;
                  $lawyercase->client_id = $lawyerclients->id;
                  $lawyercase->employee_id = $lawyers->id;
                  $lawyercase->save();
                  return redirect('/lawyer/show');
                 }

                  
                }

                

            }
           
             elseif ($request->nor == 'Legal Documentation' ) 
            {
              $lawyer = Employee::where([['position','Lawyer'],['status','1']])->take(1)->InRandomOrder()->get();
              $client->cl_status = "Walkin";
              $client->save();
              $lawyerclient = Client::orderBy('created_at','desc')->take(1)->get();
              foreach ($lawyer as $key => $lawyers) 
              {
                 foreach ($lawyerclient as $key => $lawyerclients) 
                 {
                  
                  $lawyercase = new employeeclients;
                  $lawyercase->client_id = $lawyerclients->id;
                  $lawyercase->employee_id = $lawyers->id;
                  $lawyercase->save();
                  return redirect('/lawyer/show');
                 }
            
          
                  
              }

              

            }
            elseif ($request->nor == 'Mediation' || $request->nor == 'Representation of quasi-judicial bodies' || $request->nor == 'Legal Assistance') 
            {
              $client->cl_status = "Pending";
              $client->save();
              $lawyerclient = Client::orderBy('created_at','desc')->take(1)->get();
               $lawyer = Employee::where([['position','Lawyer'],['status','1']])->take(1)->InRandomOrder()->get();
              foreach ($lawyer as $key => $lawyers) 
              {
                 foreach ($lawyerclient as $key => $lawyerclients) 
                 {
                  
                   $lawyercase = new employeeclients;
                  $lawyercase->client_id = $lawyerclients->id;
                  $lawyercase->employee_id = $lawyers->id;
                  $lawyercase->save(); 
                  
                 }

                  
              }

                 return redirect('/casetbh/register');
            }

       }
       public function showcasetbhregister()
       {

          $clients = Client::select('id')->orderBy('id','desc')->get();
          $employees = Employee::where('position','Interviewer')->get();
          $criminal = Lawsuit::where('casetype_id','1')->orderBy('name','asc')->get();
          $civil = Lawsuit::where('casetype_id','2')->orderBy('name','asc')->get();
          $administrative = Lawsuit::where('casetype_id','4')->orderBy('name','asc')->get();
          $labor = Lawsuit::where('casetype_id','3')->orderBy('name','asc')->get();

          $category = Category::orderBy('name','asc')->get();
          $involvements = Involvement::orderBy('name','asc')->get();
          $casetypes = casetype::orderBy('name','asc')->get();
         
           
          return view('maintenance.casereg')->withClients($clients)
          ->withcriminal($criminal)
          ->withcivil($civil)
          ->withadministrative($administrative)
          ->withlabor($labor)
          ->withCategory($category)
          ->withInvolvements($involvements)
          ->withEmployees($employees)
          ->withcasetypes($casetypes);
       }

     public function casetbhregister(Request $request)
     {
        
        // $this->validate($request, array(
        //         'casename'=>'required',
        //         'interviewer'=>'required',
        //         'natureofcase'=>'required',
        //         'nor'=>'required',
        //         'ct'=>'required',
        //         'cc'=>'required',
              
              
        //         ));
          $clients = Client::select('id')->orderBy('created_at','desc')->take(1)->get();
        foreach ($clients as $key => $client) 
        {
            $employeeclients = employeeclients::where('client_id',$client->id)->get();
              foreach($employeeclients as $employeeclient)
              {
               $lawyer = Employee::where([['id',$employeeclient->employee_id],['position','Lawyer']])->get();

                  foreach($lawyer as $lawyers)
                  {
                    $courts = Court::where('id',$lawyers->court_id)->get();
                  }
              }

                foreach ($courts as $key => $court) 
                {
              
            
          
        
            
            $casetobehandled = new casetobehandled;
         
       
          if($request->casetype == 'Criminal')
         {
          
         $casetobehandled-> casename = $request->criminal;
         }
        elseif($request->casetype == 'Civil')
         {
          
          $casetobehandled-> casename = $request->civil ;
         }
        elseif($request->casetype == 'Labor')
         {
         
          $casetobehandled-> casename = $request->labor ;
         }
         elseif($request->casetype == 'Administrative')
         {
          
          $casetobehandled-> casename = $request->administrative;
         };
        $casetobehandled-> interviewer = $request->employee;
         $casetobehandled-> nature_of_case =$request->casetype;
       
        $casetobehandled-> clcase_involvement = $request->involvement;
        $casetobehandled-> clcomplainant_victim_of = $request->Category;
       
      
             $casetobehandled-> client_id = $client->id;
             $casetobehandled-> court_id = $court->id;
       
                }
        }
       
       
        $casetobehandled->save();
       
        return redirect('/adverse/register');
     }
        
        
     public function showadverseregister()
    {
        $casetbh = casetobehandled::orderBy('created_at','desc')->first();

        $religions = Religion::orderBy('name','asc')->get();
        $educations = Education::orderBy('name','asc')->get();
        $accussed = Involvement::orderBy('name','asc')->where([['name','!=','Accused'],['name','!=','Defendant']])->get();
        $attacker = Involvement::orderBy('name','asc')->where([['name','!=','Petitioner'],['name','!=','Plaintiff']])->get();
        $languages = Language::orderBy('name','asc')->get();
        $citizenships = Citizenship::orderBy('name','asc')->get();
        return view('maintenance.adversereg')
        ->withReligions($religions)
        ->withEducations($educations)
        ->withaccussed($accussed)
        ->withattacker($attacker)
        ->withLanguages($languages)
        ->withCitizenships($citizenships)
        ->withcasetbh($casetbh);
    }
   
        //return redirect()->route('interviewees.create');

    
     public function adverseregister(Request $request)
     {
              //dd('gdgfgf'); 
              // $this->validate($request, array(
              //         'fname'=>'required',
              //         'mname'=>'required',
              //         'lname'=>'required',
              //         'address'=>'required',
                      
              //         'atype'=>'required',
                    
                    
              //         ));


               
                $adverse = new Adverse;
             $client = Client::orderBy('created_at','desc')->first();
             $casetbh = casetobehandled::orderBy('created_at','desc')->first();
             $clientadverse = new clientadverse;
                       
           
              $adverse-> advprtyfname = $request->fname;
              $adverse-> advprtymname = $request->mname;
              $adverse-> advprtylname = $request->lname;
              $adverse-> advprtyaddress = $request->addr;
              
              if($casetbh->clcase_involvement == 'Accused' || $casetbh->clcase_involvement == 'Defendant' ) 
              {

           
                $adverse-> advprtytype = $request->accussed;
              }
              elseif($casetbh->clcase_involvement == 'Petitioner' || $casetbh->clcase_involvement == 'Plaintiff')
              {
               $adverse-> advprtytype = $request->attacker;
              }
              
      
              $adverse->save();
              $adverseid = Adverse::orderBy('created_at','desc')->first();
             $clientadverse->client_id = $client->id;
             $clientadverse->adverse_id = $adverseid->id;
             $clientadverse->save();

                return redirect('/client/show');
       
       

     
       
       

      
     
        
        

   
              //return redirect()->route('interviewees.create');

     }
     public function showposition()
    {

        $positions = Position::all();
        return view('maintenance.position')->withPositions($positions);
    }
     public function showpositionregister()
    {

       
        return view('maintenance.position_register');
    }

    public function positionregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $position = new Position;
     
       
        $position-> name = $request->name;
       
       
        $position->save();
       
     
        return redirect('/position/show');
        

   
            //return redirect()->route('interviewees.create');

    }

     public function showcasestatus()
    {

        $status = Status::all();
        return view('maintenance.casestatus_table')->withStatus($status);
    }
     public function showcasestatusregister()
    {

       
        return view('maintenance.casestatus_register');
    }

    public function casestatusregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $status = new Status;
     
       
        $status-> name = $request->name;
       
       
        $status->save();
       
     
        return redirect('/casestatus/show');
        

   
        //return redirect()->route('interviewees.create');

    }

    public function shownat()
    {

        $services = Service::all();
        return view('maintenance.natureofrequest_table')->withservices($services);
    }
     public function shownatregister()
    {

       
        return view('maintenance.natureofrequest_register');
    }

    public function natregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $service = new Service;
     
       
        $service-> name = $request->name;
       
       
        $service->save();
       
     
        return redirect('/natureofrequest/show');
        

   
        //return redirect()->route('interviewees.create');

    }

    public function showcasetype()
    {

        $casetypes = CaseType::all();
        return view('maintenance.casetype_table')->withcasetypes($casetypes);
    }
     public function showcasetyperegister()
    {

       
        return view('maintenance.casetype_register');
    }

    public function casetyperegister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $casetype = new CaseType;
     
       
        $casetype-> name = $request->name;
       
       
        $casetype->save();
       
     
        return redirect('/casetype/show');
        

   
        //return redirect()->route('interviewees.create');

    }

    public function showcitizenship()
    {

        $citizenships = Citizenship::all();
        return view('maintenance.citizenship_table')->withcitizenships($citizenships);
    }
     public function showcitizenshipregister()
    {

       
        return view('maintenance.citizenship_register');
    }

    public function citizenshipregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $citizenship = new Citizenship;
     
       
        $citizenship-> name = $request->name;
       
       
        $citizenship->save();
       
     
        return redirect('/citizenship/show');
        

   
        //return redirect()->route('interviewees.create');

    }

     public function showrel()
    {

        $religions = Religion::all();
        return view('maintenance.religion_table')->withReligions($religions);
    }
     public function showrelregister()
    {

       
        return view('maintenance.religion_register');
    }

    public function relregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $religion = new Religion;
     
       
        $religion-> name = $request->name;
       
       
        $religion->save();
       
     
        return redirect('/religion/show');
        

   
        //return redirect()->route('interviewees.create');

    }

     public function showeducation()
    {

        $education = Education::all();
        return view('maintenance.education')->withEducations($education);
    }

     public function showeducationregister()
    {

       
        return view('maintenance.education_reg');
    }

    public function elregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required', 
               
              
                ));

            $el = new Education;
     
       
        $el-> name = $request->name;
       
       
       
        $el->save();
       
     
        
        

   
       return redirect('/education/show');

    }
     public function showlanguage()
    {
        $languages = Language::all();
        return view('maintenance.ls')->withLanguages($languages);
    }
     public function showlanguageregister()
    {
     
        return view('maintenance.ls_reg');
    }

    public function lsregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
               
              
                ));

            $language = new Language;
     
       
        $language-> name = $request->name;
       
       
        $language->save();
       
     
        
        

   
       return redirect('/language/show');

    }
     public function showcasecategory()
    {
       $category = Category::all();
        return view('maintenance.casecategory')->withCategory($category);
    }
    public function showcasecategoryregister()
    {
        
        return view('maintenance.casecategory_reg');
    }

    public function ccregister(Request $request)
    {
        //dd('gdgfgf'); sd
        $this->validate($request, array(
                'name'=>'required',
                
              
                ));

            $cc = new Category;
     
       
        $cc-> name = $request->name;
        
       
        $cc->save();
       
     
        
        

   
       return redirect('/casecategory/show');

    }
     public function showcaseinvolvement()
    {
        $involvements = Involvement::all();
        return view('maintenance.caseinvolvement')->withInvolvements($involvements);
    }
     public function showcaseinvolvementregister()
    {
       
        return view('maintenance.caseinvolvement_reg');
    }

    public function ciregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
               
              
                ));

            $ci = new Involvement;
     
       
        $ci-> name = $request->name;
      
       
        $ci->save();
       
     
        
        

   
       return redirect('/caseinvolvement/show');

    }
     public function schedule()
    {   
      
     
        $lawyer = Employee::where('position','Lawyer')
                          ->with('schedules')
                          ->get();
       
        foreach($lawyer as $lawyers)
        {
        $employeeclients = employeeclients::where('employee_id',$lawyers->id)->get();

        foreach($employeeclients as $employeeclient)
        {
      
              }
          
        
  }    $client = Client::where([['nature_of_request','Mediation'],['cl_status','Approved'],['id',$employeeclient->client_id]])
                        ->orwhere([['nature_of_request','Representation of quasi-judicial bodies '],['cl_status','Approved'],['id',$employeeclient->client_id]])
                        ->orwhere([['nature_of_request','Legal Assistance '],['cl_status','Approved'],['id',$employeeclient->client_id]])
                        ->with('casetobehandled')
                        ->get();

        
         return view('maintenance.schedules')->withLawyer($lawyer)
                                            // ->withschedules($schedules)
                                            ->withClient($client);
       
       
      
        
    }
     public function showschedule()
    {
       $lawyer = Employee::where('position','Lawyer')->get();
       $scheduletype = scheduletype::all();
       $client = Client::select('*')
                        ->where([['nature_of_request','Mediation'],['cl_status','Approved']])
                        ->orwhere([['nature_of_request','Representation of quasi-judicial bodies '],['cl_status','Approved']])
                        ->with('casetobehandled')
                        ->get();

      foreach($client as $clients)
      {
        $controlno = casetobehandled::where('client_id',$clients->id)->get();
        
      }
               return view('createschedule')->withLawyer($lawyer)
                                            ->withscheduletype($scheduletype)
                                            ->withclient($client);
    }

    public function scheduleregister(Request $request)
    {
        //dd('gdgfgf'); 
        // $this->validate($request, array(
                // 'name'=>'required',
               
              
                // ));

            $sched= new Schedule;
     
       
       
        $sched-> type = $request->schedtype;
        $sched-> start =$request->start;
        $sched-> end =$request->end;
          
        $sched-> client_id =$request->client;
        $sched-> employee_id = $request->lawyer;
        $sched-> controlno = $request->con;
       
        $sched->save();
       
     
        
        

   
       return redirect('/schedule/show');

    }
     public function showcourttype()
    {
        $courttypes = courttype::all();
        return view('maintenance.courttype')->withcourttypes($courttypes);
    }
        public function showcourttyperegister()
    {
       $courttypes = courttype::all();
        return view('maintenance.courttype_reg')->withcourttypes($courttypes);
    }

    public function courttyperegister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                'name'=>'required',
               
              
                ));

            $ct = new courttype;
     
       
        $ct-> name = $request->name;
      
       
        $ct->save();
       
     
        
        

   
       return redirect('/courttype/show');

    }



     public function showcourt()
     {
        $courts = Court::all();
        $courttypes = courttype::all();
        $branches = Branch::all();
        return view('maintenance.court')->withCourts($courts)
                                        ->withcourttypes($courttypes)
                                        ->withBranch($branches);
     }
     public function showcourtregister()
    {
       $courttypes = courttype::all();
       $branches = Branch::all();
        return view('maintenance.court_reg') ->withcourttypes($courttypes)
                                             ->withBranches($branches);
    }

    public function courtregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                // 'name'=>'required',
                // 'type'=>'required',
              
                ));

            $cou = new Court;
     
       
        $cou-> name = $request->name;
        $cou-> court_type = $request->type;
        $cou-> branch = $request->branch;
      
       
        $cou->save();
       
     
        
        

   
       return redirect('/court/show');

    }

     public function showbranch()
     {
        $branch = Branch::all();
        return view('maintenance.branch')->withBranch($branch);
     }

    public function showbranchregister()
    {
       $branch = Branch::all();
        return view('maintenance.branch_reg') ->withBranches($branch);
    }

    public function branchregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                // 'name'=>'required',
                // 'type'=>'required',
              
                ));

            $bra = new Branch;
     
       
        $bra-> name = $request->name;
        
      
       
        $bra->save();
       
     
        
        

   
       return redirect('/branch/show');

    }

    public function showreqstat()
    {
        $requeststat = requeststat::all();
        return view('maintenance.requeststat')->withrequeststat($requeststat);
    }

    public function showreqstatregister()
    {
       $requeststat = requeststat::all();
        return view('maintenance.reqstat_reg') ->withrequeststats($requeststat);
    }

    public function reqstatregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                // 'name'=>'required',
                // 'type'=>'required',
              
                ));

            $req = new requeststat;
     
       
        $req-> name = $request->name;
        
      
       
        $req->save();
       
     
        
        

   
       return redirect('/reqstat/show');

    }
     public function showdecision()
    {
        $decision = Decision::all();
        return view('maintenance.decision')->withDecision($decision);
    }

    public function showdecisionregister()
    {
       $decision = Decision::all();
        return view('maintenance.decision_reg') ->withDecisions($decision);
    }

    public function decisionregister(Request $request)
    {
        //dd('gdgfgf'); 
        $this->validate($request, array(
                // 'name'=>'required',
                // 'type'=>'required',
              
                ));

            $decision = new Decision;
     
       
        $decision-> name = $request->name;
        
      
       
        $decision->save();
       
     
        
        

   
       return redirect('/decision/show');

    }
    public function shownotaryclientreg()
    {
      return view('notaryform');
    }
     public function notaryclientreg(Request $request)
    {
      $date = Carbon::now();
      $notary = new Client;
      $notary-> nature_of_request = 'Administration of oath';
      $notary-> clfname = $request->fname;
      $notary-> clmname = $request->mname;
      $notary-> cllname = $request->lname;
      $notary-> claddress = $request->Address;
      $notary-> clcity = $request->city;
      $notary-> clctcno = $request->ctcno;
      $notary-> clnotarydate = $date;
      $notary-> cl_status = "Walkin";
      $notary->save();

      $lawyer = Employee::where('position','Lawyer')->take(1)->InRandomOrder()->get();
             
              $lawyerclient = Client::orderBy('created_at','desc')->take(1)->get();
              foreach ($lawyer as $key => $lawyers) 
              {
                 foreach ($lawyerclient as $key => $lawyerclients) 
                 {
                  
                  $lawyercase = new employeeclients;
                  $lawyercase->client_id = $lawyerclients->id;
                  $lawyercase->employee_id = $lawyers->id;
                  $lawyercase->save();
                  return redirect('/lawyer/show');
                 }
              }

    }






}

