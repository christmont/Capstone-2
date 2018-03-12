<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;
use App\Client;
class DatatableController extends Controller
{
     public function clientdatatable()
    {
        $clients = Client::all();
        
       return view('maintenance.case_table')->withClients($clients);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getClients()
    {
        //$client = Client::all();
        //return Datatables::of($client)
        //  ->make(true);
}
}
