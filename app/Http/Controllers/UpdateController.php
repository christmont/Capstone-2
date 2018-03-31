<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Language;
use App\Education;
use App\Involvement;
use App\Category;
use App\Position;
use App\courttype;
use App\Court;
use App\Schedule;
use App\Lawsuit;
use App\Employee;
use App\Lawyer;
use App\Religion;
use App\Citizenship;
use App\Service;
use App\casetype;
use App\Status;
use App\Branch;
use App\requeststat;
use App\Decision;
use Session;
use App\Client;
use App\Reason;
use App\scheduletype;
use App\Inquest;


class UpdateController extends Controller
{
    public function showclientedit($id)
    {
    	$client = Client::find($id);
    	return view('client_edit')->withClients($client);
    }

    public function edit($id, Request $request)
    {
    	$this->validate($request, [
            
        ]);

        $client = Client::find($id);
    	$client->name = $request->name;
    	$client->mobilenumber = $request->mobilenumber;
    	$client->email = $request->email;
    	$client->idcard = $request->idcard;
    	$client->save();

    	//Flashy::success('Succesfully edited guest', '#');
        return redirect('/client/register');
    }

    public function showlangugeedit($id)
    {
        $language = Language::find($id);
        return view('maintenance.ls_edit')->withLanguages($language);
    }
   

    public function languageedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $language = Language::find($id);

        $language-> name = $request->name;
       
        $language->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/language/show');
    }
    public function showempedit($id)
    {
        $employee = Employee::find($id);
        return view('maintenance.ls_edit')->withEmployees($employee);
    }
   

    public function empedit($id, Request $request)
    {
             $this->validate($request, array(
                    'efname'=>'required',
                   ));

             $employee = Employee::find($id);
              

            $employee-> efname = $request->efname;
            $employee-> emname = $request->emname;
            $employee-> elname = $request->elname;
            $employee-> email = $request->email;
            // $employee = Employee::select('id')->orderBy('id','desc')->take(1)->first();
            // foreach ($employee as $key => $value) {
            //      if ($request->position = "Lawyer"||"lawyer") {
            //    $lawyer = new Lawyer;
            //    $lawyer-> employees_id = $value['id'];

            //     $lawyer->save();
            // }
            // }
           
            $employee-> position = $request->position;

           
            $employee-> contact = $request->contact;
            
            $employee->save();
           
         
            
            Session::flash('message', 'The employee was successfuly added! aye.'); 
            Session::flash('alert-class', 'alert-danger'); 

       
           return redirect('/employee/show');
    }
    public function showeducedit($id)
    {
        $education = Education::find($id);
        return view('maintenance.education_edit')->withEducations($education);
    }
     
     public function educedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $educ = Education::find($id);

        $educ-> name = $request->name;
       
        $educ->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/education/show');
    }
    public function showinvoedit($id)
    {
        $involvement = Involvement::find($id);
        return view('maintenance.caseinvolvement_edit')->withInvolvements($involvement);
    }
     public function invoedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $invo = Involvement::find($id);

        $invo-> name = $request->name;
       
        $invo->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/caseinvolvement/show');
    }
    public function showreleedit($id)
    {
        $religions = Religion::find($id);
        return view('maintenance.religion_edit')->withReligions($religions);
    }
    public function reledit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $rel = Religion::find($id);

        $rel-> name = $request->name;
       
        $rel->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/religion/show');
    }

    public function showcasetypeedit($id)
    {
        $casetypes = Casetype::find($id);
        return view('maintenance.casetype_edit')->withCasetypes($casetypes);
    }
    public function casetypeedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $rel = Casetype::find($id);

        $rel-> name = $request->name;
       
        $rel->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/casetype/show');
    }

     public function showcasestatusedit($id)
    {
        $status = Status::find($id);
        return view('maintenance.casestatus_edit')->withStatus($status);
    }
    public function casestatusedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $rel = Status::find($id);

        $rel-> name = $request->name;
       
        $rel->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/casestatus/show');
    }

    public function shownateedit($id)
    {
        $services = Service::find($id);
        return view('maintenance.service_edit')->withServices($services);
    }
    public function natedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $nat = Service::find($id);

        $nat-> name = $request->name;
       
        $nat->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/natureofrequest/show');
    }


    public function showcitizeneedit($id)
    {
        $citizenships = Citizenship::find($id);
        return view('maintenance.citizenship_edit')->withCitizenships($citizenships);
    }
    public function citizenedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $cit = Citizenship::find($id);

        $cit-> name = $request->name;
       
        $cit->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/citizenship/show');
    }

    public function showccedit($id)
    {
        $category = Category::find($id);
        return view('maintenance.casecategory_edit')->withCategory($category);
    }
    public function ccedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $cc = Category::find($id);

        $cc-> name = $request->name;
       
        $cc->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/casecategory/show');
    }
    public function showctedit($id)
    {
        $courttype = courttype::find($id);
        return view('maintenance.courttype_edit')->withcourttypes($courttype);
    }
     public function showcaseedit($id)
    {
        $lawsuit = Lawsuit::find($id);
        return view('maintenance.case_edit')->withLawsuits($lawsuit);
    }
     public function caseedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $lawsuit = Lawsuit::find($id);

        $lawsuit-> name = $request->name;
        $lawsuit-> casetobehandleds_id = $request->casetobehandleds_id;
       
        $lawsuit->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/lawsuit/show');
    }
    public function ctedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $ct = courttype::find($id);

        $ct-> name = $request->name;
       
        $ct->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/courttype/show');
    }
    public function showcouedit($id)
    {
        $court = Court::find($id);
        $courttypes = courttype::all();
        return view('maintenance.court_edit')->withCourts($court)
        ->withcourttypes($courttypes);
    }
    public function couedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'type'=>'required',
        ]);
 
        $cou = Court::find($id);

        $cou-> name = $request->name;
        $cou-> type = $request->type;
       
        $cou->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/court/show');
    }
    public function showschededit($id)
    {
        
         $schedules = Schedule::find($id);
         
         $scheduletype = scheduletype::all();

     
         $lawyer = Employee::where([['position','Lawyer'],['id',$schedules->employee_id]])
                          ->with('schedules')
                          ->get();

         $client = Client::where([['nature_of_request','Mediation'],['cl_status','Approved'],['id',$schedules->client_id]])
                        ->orwhere([['nature_of_request','Representation of quasi-judicial bodies '],['cl_status','Approved'],['id',$schedules->client_id]])
                        ->orwhere([['nature_of_request','Legal Assistance '],['cl_status','Approved'],['id',$schedules->client_id]])
                        ->with('casetobehandled')
                        ->get();
         $inquest = Client::where([['nature_of_request','Inquest'],['id',$schedules->client_id]])->get();
                       
        return view('reschedule')->withClient($client)
                                 ->withscheduletype($scheduletype)
                                 ->withlawyer($lawyer)
                                 ->withschedules($schedules)
                                 ->withInquest($inquest);
    }
      public function schededit($id, Request $request)
    {
       
 
        $sched = Schedule::find($id);

        $sched-> employee_id = $request->lawyer;
        $sched-> type = $request->schedtype;
        $sched-> start = $request->start;
        $sched-> end = $request->end;
        if($request->schedtype == 'Hearing')
        {
        $sched-> client_id = $request->client;
        }
        elseif($request->schedtype == 'For Inquest')
        {
        $sched-> client_id = $request->inquest;    
        }
        $sched-> controlno =$request->con;
        $sched->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/schedule/show');
    }
    public function branchedit($id, Request $request)
    {
        $this->validate($request, [
           
        ]);
 
        $branch = Branch::find($id);

        $branch-> name = $request->name;
        $branch->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/branch/show');
    }
    public function reqstatedit($id, Request $request)
    {
        $this->validate($request, [
           
        ]);
 
        $reqstat = requeststat::find($id);

        $reqstat-> name = $request->name;
        $reqstat->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/reqstat/show');
    }
    public function decisionedit($id, Request $request)
    {
        $this->validate($request, [
           
        ]);
 
        $decision = Decision::find($id);

        $decision-> name = $request->name;
        $decision->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/decision/show');
    }
     public function scheduletypeedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $scheduletype = scheduletype::find($id);

        $scheduletype-> name = $request->name;

        $scheduletype-> schedule_id = $request->schedule_id;
       
        $scheduletype->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/scheduletype/show');
    }
    public function reasonedit($id, Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
 
        $reason = Reason::find($id);

        $reason-> name = $request->name;

        $reason-> clients_id = $request->clients_id;
       
        $reason->save();
        
        //Flashy::success('Succesfully edited guest', '#');
       return redirect('/reason/show');
    }
    public function showinquestedit($id)
    {
        $inquest = Inquest::where('schedule_id',$id)->get();
        foreach($inquest as $inquests)
    {
        $clients = Client::where([['nature_of_request','Inquest'],['id',$inquests->client_id]])
                    ->get();
      
      $lawyer1 = Employee::where('id',$inquests->employee_id)->get();
      $lawyer2 = Employee::where('id',$inquests->lawyer)->get();
      $staff = Employee::where('id',$inquests->assistant)->get();
      
      $schedule = Schedule::where('id',$inquests->schedule_id)->get();
    }
        
    
        return view('inquest.form')->withinquest($inquest)
                                   ->withclients($clients)
                                   ->withlawyer1($lawyer1)
                                   ->withlawyer2($lawyer2)
                                   ->withstaff($staff)
                                   ->withschedule($schedule);

    }




    
}

