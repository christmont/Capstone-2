<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Citizenship;

class CitizenshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citizenships = Citizenship::all();

        return view('maintenance.citizenship_table', ['citizenships' => $citizenships]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('maintenance.citizenship_reg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $citizenship = new Citizenship;
          

        $citizenship-> name = $request->name;
        $citizenship-> clients_id = $request->clients_id;
        $citizenship->save();

     
        return redirect('citizenships');
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
         $citizenship = Citizenship::find($id);

        $citizenship-> name = $request->input('name');
        $citizenship-> clients_id = $request->input('clients_id');
       
        $citizenship->save();

        return redirect('citizenships');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $citizenship = Citizenship::find($id);
        
        $citizenship->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('citizenships');
    }
}
