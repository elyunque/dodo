<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Employee;

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

        return view('employee.index', ['employees' => $employees]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = Employee::find($id);

        return view('employee.edit', ['employees' => $employees]);   
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
        $validator = Validator::make($request->all(), [
            'ssn' => 'required|numeric|unique:employees,ssn,'.$id,
            'firstname' => 'required|alpha|max:60',
            'lastname' => 'required|alpha|max:60',
            'identification' => 'required|numeric|unique:employees,identification,'.$id,
            'birthday' => 'required|date',
            'email_home' => 'email',
            'email_related' => 'email',
            'email_extra' => 'email',          
        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        } else {

                $employee = Employee::find($id);

                $employee->ssn = $request->input('ssn');
                $employee->firstname = $request->input('firstname');
                $employee->lastname = $request->input('lastname');
                $employee->identification = $request->input('identification');
                $employee->birthday = $request->input('birthday');
                $employee->phone_home = $request->input('phone_home');
                $employee->phone_mobile = $request->input('phone_mobile');
                $employee->phone_related = $request->input('phone_related');
                $employee->phone_extra = $request->input('phone_extra');
                $employee->address_home = $request->input('address_home');
                $employee->address_extra = $request->input('address_extra');
                $employee->email_home = $request->input('email_home');
                $employee->email_extra = $request->input('email_extra');
                $employee->related_info = $request->input('related_info');

                $employee->save();

                return redirect('employee');  
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('destroy');
    }
}
