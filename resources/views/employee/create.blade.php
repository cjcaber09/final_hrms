@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @foreach ($errors->all() as $error)
                        <div class="box bg-light-danger">* {{$error}}</div>
                    @endforeach
                    <form class="form-material row" method="POST" action={{ route('employee.store') }}>
                        <div class="col-lg-12">
                            <div class="page-title font-weight-bold ">Login Information</div>
                            
                        </div>
                        {{ csrf_field() }}

                        {{-- @foreach ($errors as $error)
                            <div class="box bg-light-danger">{{$error}}</div>
                        @endforeach --}}
                        
                        <div class="form-group col-md-6 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="name" style="cursor: auto;" placeholder="Display Name" required>
                        </div>
                        <div class="form-group col-md-6 m-t-20">
                            
                            <input type="email" class="form-control form-control-line" name="email" style="cursor: auto;" placeholder="Email Address" required>
                        </div>
                        <div class="form-group col-md-6 m-t-20">
                            
                            <input type="password" class="form-control form-control-line" name="password" style="cursor: auto;" placeholder="Password" required>
                        </div>
                        <div class="form-group col-md-6 m-t-20">
                            
                            <input type="password" class="form-control form-control-line" name="confirmpassword" style="cursor: auto;" placeholder="Confirm Password" required>
                        </div>
                        <div class="col-lg-12">
                            <div class="page-title font-weight-bold">Fixed Deductions </div>
                            
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="sssDeduction" style="cursor: auto;" placeholder="SSS Deduction" >
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="pagibigDeduction" style="cursor: auto;" placeholder="Pagibig Deduction" >
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="philhealthDeduction" style="cursor: auto;" placeholder="Philhealth Deduction" >
                        </div>
                        <div class="col-lg-12">
                            <div class="page-title font-weight-bold">Salary</div>
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="Salary" style="cursor: auto;" placeholder="Monthly Rate" >
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="attendanceInsentive" style="cursor: auto;" placeholder="Attendance Insentive" >
                        </div>
                        <div class="col-lg-12">
                            <div class="page-title font-weight-bold">Goverment Numbers And Bank Number</div>
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="sssNumber" style="cursor: auto;" placeholder="SSS Number" >
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="pagibigNumber" style="cursor: auto;" placeholder="Pagibig Number" >
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="philhealthNumber" style="cursor: auto;" placeholder="Philhealth Number" >
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="tinNumber" style="cursor: auto;" placeholder="Tin Number" >
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="bdoNumber" style="cursor: auto;" placeholder="BDO Number" >
                        </div>
                        <div class="col-lg-12">
                            <div class="page-title font-weight-bold">Department and Position</div>
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="Department" style="cursor: auto;" placeholder="Department" >
                        </div>
                        <div class="form-group col-md-3 m-t-20">
                            
                            <input type="text" class="form-control form-control-line" name="Position" style="cursor: auto;" placeholder="Position" >
                        </div>
                        <div class="form-group col-md-12 m-t-20">
                            <button type="text" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection