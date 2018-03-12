<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interviewee;

class IntervieweeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $interviewees = Interviewee::all();

        return view('maintenance.interviewee_table', ['interviewees' => $interviewees]);
    
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
        $interviewee = new Interviewee;
          

        $interviewee-> intfname = $request->intfname;
        $interviewee-> intmname = $request->intmname;
        $interviewee-> intlname = $request->intlname;
        $interviewee-> intrelation = $request->intrelation;
        $interviewee-> intaddress = $request->intaddress;
        $interviewee-> intemail = $request->intemail;
        $interviewee-> intdob = $request->intdob;
        $interviewee-> intcontactno = $request->intcontactno;
        $interviewee-> intgender = $request->intgender;
        $interviewee-> intcivilstatus = $request->intcivilstatus;
        $interviewee->save();

        return redirect('interviewees');
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
