<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use App\documenttype;
use App\Client;

class DocumentController extends Controller
{
    public function showdocuclientreg()
    {
    $type = documenttype::all();

      return view('docuform')->withtype($type);
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
      
      $docu-> clnotarydate = $date;
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

}
