<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee_User;
use Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;

class EmployeeController extends Controller
{
    
    public function __construct(){
        $employees = Employee_User::orderBy('id','desc')->paginate(9);
        
        view::share('employees',$employees);
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = new Employee_User;
        return view('employee.index')->with(['PTitle'=>'Employee List']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create')->with(['PTitle'=>'Create Employee Login']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee_User;
        $input = [
            'Display_Name' => $request->input('name'),
            'employee_email' => $request->input('email'),
            'Password' => $request->input('password'),
            'Confirm_Password' => $request->input('confirmpassword')
        ];
        $rules = [
            'Display_Name' => 'required|max:25',
            'employee_email' => 'required|email|max:50|unique:employee_users',
            'Password' => 'required',
            'Confirm_Password' => 'required|same:Password'
        ];
        $messages = [
            'required' => 'This Form must have be filled',
            'email' => 'This Form must be an email',
            'unique' => 'This Email has been used',
            'same' => 'The Password and Confirm Password must match'

        ];
        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->messages());
           
        } else {
            $id = $employee::create([
                'employee_detail' => '0',
                'employee_status' => 'active',
                'employee_name' => $request->input('name'),
                'employee_email' => $request->input('email'),
                'employee_password' => bcrypt($request->input('password'))
            ])->id;
            
            
            return $id;
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = new Employee_User;
        $data= $employee::find($id);
        
        return view('employee.view')->with(['PTitle'=>'View Employee Data','employee'=>$data]);
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
        $employee = Employee_User::find($id);
    }
    
}
