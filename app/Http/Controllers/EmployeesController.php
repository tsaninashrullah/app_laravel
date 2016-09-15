<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\EmployeesRequest;

use App\Models\Employees;

use Session;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Employees::paginate(2);
        $employees = Employees::all();
        return view('employees.index')->with('employees', $employees)->with('pagination', $page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeesRequest $request)
    {
        // $validate = EmployeesRequest::make($request->all(), Employees::valid());
        //   if($validate->fails()) {
        //     return back()
        //     ->withErrors($validate)
        //     ->withInput();
        //   } else {
        //     Employees::save($request->all());
        //     return Redirect('employees');
        //   }

        $employee = new Employees();
                
        $employee->name = $request->name;
        $employee->age = $request->age;
        $employee->email = $request->email;
        $employee->address = $request->address;
                
        $employee->save();
        Session::flash('notice', 'Success add employee');
        $employees = Employees::all();
        return redirect('employees')->with('employees', $employees);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employees::find($id);
            return view('employees.show')
        ->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = Employees::find($id);
            return view('employees.edit')
        ->with('employee', $employees);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeesRequest $request, $id)
    {
    $employees = Employees::find($id);
    $employees->update($request->all());
    $employee = Employees::all();
    Session::flash('notice', 'Success update employee');
    return Redirect('employees')->with('employees', $employee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $employees = Employees::all();
    $employee_id = Employees::find($id);
        if ($employee_id->delete()) {
          Session::flash('notice', 'Employee success delete');
          return Redirect('employees')->with('employees', $employees);
        } else {
          Session::flash('error', 'Employee fails delete');
          return Redirect('employees');
        }
    }
}
