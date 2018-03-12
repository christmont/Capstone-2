<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lawsuit;

class LawsuitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawsuits = Lawsuit::all();

        return view('maintenance.case_table', ['lawsuits' => $lawsuits]);
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
        $lawsuit = new Lawsuit;
          

        $lawsuit-> name = $request->name;
        $lawsuit-> casetobehandleds_id = $request->casetobehandleds_id;
        $lawsuit->save();

     
        return redirect('lawsuits');
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
        $lawsuit = Lawsuit::find($id);

        $lawsuit-> name = $request->input('name');
        $lawsuit-> casetobehandleds_id = $request->input('casetobehandleds_id');
       
        $lawsuit->save();

        return redirect('lawsuits');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lawsuit = Lawsuit::find($id);
        
        $lawsuit->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('lawsuits');
    }
}
