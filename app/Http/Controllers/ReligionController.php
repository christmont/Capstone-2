<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Religion;

class ReligionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $religions = Religion::all();

        return view('maintenance.religion_table', ['religions' => $religions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('maintenance.religion_register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $religion = new Religion;
          

        $religion-> name = $request->name;
        $religion-> clients_id = $request->clients_id;
        $religion->save();

     
        return redirect('religions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
 
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
        $religion = Religion::find($id);

        $religion-> name = $request->input('name');
        $religion-> clients_id = $request->input('clients_id');
       
        $religion->save();

        return redirect('religions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $religion = Religion::find($id);
        
        $religion->delete();
        //Flashy::success('Succesfully deleted event');
        return redirect('religions');
    }
}
