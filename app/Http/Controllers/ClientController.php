<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Religion;
use App\Education;
use App\Involvement;
use App\Language;
use App\Citizenship;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('cllname','asc')->get();

        $religions = Religion::orderBy('name','asc')->get();
        $educations = Education::orderBy('name','asc')->get();
        $involvements = Involvement::orderBy('name','asc')->get();
        $languages = Language::orderBy('name','asc')->get();
        $citizenships = Citizenship::orderBy('name','asc')->get();
        return view('maintenance.client_table')->withClients($clients)
        ->withReligions($religions)
        ->withEducations($educations)
        ->withInvolvements($involvements)
        ->withLanguages($languages)
        ->withCitizenships($citizenships);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
          

        $client-> clfname = $request->fname;
        $client-> clmname = $request->mname;
        $client-> cllname = $request->lname;
        $client-> clreligion = $request->religion;
        $client-> clcitizenship = $request->Citizenship;
        $client-> claddress = $request->Address;
        $client-> clemail = $request->Email;
        $client-> clmonthly_net_income = $request->Income;
        $client-> cldetained = $request->Detained;
        $client-> cldetained_since = $request->cldetained_since;
        $client-> clbdate = $request->Birthday;
        $client-> clgender = $request->gender;
        $client-> clcivil_status = $request->civilstat;
        $client-> cleducational_attainment = $request->Educational;
        $client-> cllanguage = $request->Language;
        $client-> clcontact_no = $request->Contact;
        $client-> clspouse = $request->clspouse;
        $client-> claddress_of_spouse = $request->claddress_of_spouse;
        $client-> clcontact_no_of_spouse = $request->clcontact_no_of_spouse;
        $client-> clplace_of_detention = $request->clplace_of_detention;
       
        $client->save();

     
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
