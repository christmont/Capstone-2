<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Casee;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cases = Casee::all();

        return view('maintenance.case_table', ['cases' => $cases]);
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
        $case = new Casee;
          

        $case-> clfname = $request->fname;
        $case-> clmname = $request->mname;
        $case-> cllname = $request->lname;
        $case-> clreligion = $request->religion;
        $case-> clcitizenship = $request->Citizenship;
        $case-> claddress = $request->Address;
        $case-> clemail = $request->Email;
        $case-> clmonthly_net_income = $request->Income;
        $case-> cldetained = $request->Detained;
        $case-> cldetained_since = $request->cldetained_since;
        $case-> clbdate = $request->Birthday;
        $case-> clgender = $request->Gender;
        $case-> clcivil_status = $request->civilstat;
        $case-> cleducational_attainment = $request->Educational;
        $case-> cllanguage = $request->Language;
        $case-> clcontact_no = $request->Contact;
        $case-> clspouse = $request->clspouse;
        $case-> claddress_of_spouse = $request->claddress_of_spouse;
        $case-> clcontact_no_of_spouse = $request->clcontact_no_of_spouse;
        $case-> clplace_of_detention = $request->clplace_of_detention;
        $case-> nature_of_request = $request->nature_of_request;
        $case->save();

     
        return redirect('clients');
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
