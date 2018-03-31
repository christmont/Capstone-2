<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\documenttype;
use App\Client;
use App\Court;

class DocumentController extends Controller
{
    public function showdocuclientreg()
    {
    $type = documenttype::all();
    $court = Court::all();

      return view('docuform')->withtype($type)
                              ->withcourt($court);
    }
     public function docuclientreg(Request $request)
    {
      $date = Carbon::now();
      $docu = new Client;
      $docu-> nature_of_request = 'Legal Documentation';
      $docu-> clfname = $request->fname;
      $docu-> clmname = $request->mname;
      $docu-> cllname = $request->lname;
      $docu-> claddress = $request->Address;
      $docu-> clcity = $request->city;
      $docu-> clctcno = $request->ctcno;
      $docu-> clemail = $request->Email;
      $docu-> clcontact_no = $request->Contact;
      $docu-> clspouse = $request->spouse;
      $docu-> clnotarydate = $date;
      $docu-> documenttype = $request->document;
      $docu-> court = $request->court;
      $docu-> ctcdate = $request->ctcdate;
      $docu-> cl_status = "Walkin";
      $docu->save();

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
        public function petitionprint($id)
    {
       $client = Client::find($id);

         

      

 
      
  
       $papersize = array(0, 0, 360, 360);
       $pdf = PDF::loadView('forms.petition', array(
        'name' => $client->clfname . ' ' . $client->clmname . ' ' . $client->cllname,
        'citizen' => $client->clcitizenship,
        'civilstat' => $client->clcivil_status,
        'spouse' => $client->clspouse,
        'address' => $client->claddress,
        'ctcno' =>$client->ctcno,
        'email' => $client->email,
        'cldate' => $client->clnotarydate,
        'clcity' => $client->clcity,
        'court' => $client->court,
        'ctcdate'=> $client->ctcdate,
        
        

       ));

     

       return $pdf->download($client->clfname . '_' . $client->cllname . '_petition.pdf');
                                     
    }


}
