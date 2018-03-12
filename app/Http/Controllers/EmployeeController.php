<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Position;
use App\Lawyer;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        $positions = Position::orderBy('name','asc')->get();

        return view('maintenance.employee_table')->withEmployees($employees)
        ->withPositions($positions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $employees = Employee::all();
         $positions = Position::orderBy('name','asc')->get();
         return view('maintenance.employee_register')->withEmployees($employees)
        ->withPositions($positions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee;
          

        $employee-> efname = $request->efname;
        $employee-> emname = $request->emname;
        $employee-> elname = $request->elname;
        $employee-> email = $request->email;

        $employee-> position = $request->position;
        $employ = Employee::select('id')->orderBy('id','desc')->take(1)->get();
        foreach ($employ as $key => $value) {
             if ($request->position = "Lawyer"||"lawyer") {
           $lawyer = new Lawyer;
           $lawyer-> employees_id = $value->id;

            $lawyer->save();
        }
        }
       
        $employee-> contact = $request->contact;
        $employee-> clients_id = $request->clients_id;
        
        $employee->save();

     
        return redirect('employees');
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
