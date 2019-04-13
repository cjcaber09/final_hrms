@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="card">
                <div class="col-lg-12 col-md-12 m-t-10"><img src="../assets/images/big/img1.jpg" class="img-responsive radius">
                </div>
                        <div class="card-body">
                            <small class="text-muted">Name</small>
                            <h5>{{$employee->employee_name}}</h5>
                                <small class="text-muted">Email address </small>
                                <h6>{{$employee->employee_email}}</h6>
                                <small class="text-muted ">Phone</small>
                                <h6>{{isset($detail->emp_detail_phone) ? $detail->emp_detail_phone : 'Not configured yet'}}</h6>
                                <small class="text-muted ">Address</small>
                                <h6>{{isset($detail->emp_detail_address) ? $detail->emp_detail_address : 'Not configured yet'}}</h6>
                                <br>
                                    @if($employee->employee_status =='active')
                                    <h5 class="btn waves-effect waves-light btn-block btn-success">Active</h5>
                                    @else
                                    <h5 class="btn waves-effect waves-light btn-block btn-danger">Disabled</h5>
                                    @endif
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card">
            <div class="card-body">
                    <div class="page-title m-b-5">Personal Informations</div>
                <div class="row">
                    <div class="col-lg-4">
                        <small class="text-muted">First Name</small>
                        <h5>{{isset($detail->emp_detail_fname) ? $detail->emp_detail_fname : 'Not configured yet'}}</h5>
                    </div>
                    <div class="col-lg-4">
                        <small class="text-muted">Middle Name </small>
                        <h5>{{isset($detail->emp_detail_mname) ? $detail->emp_detail_mname : 'Not configured yet'}}</h5>
                    </div>
                    <div class="col-lg-4">
                        <small class="text-muted">Last Name</small>
                        <h5>{{isset($detail->emp_detail_lname) ? $detail->emp_detail_lname : 'Not configured yet'}}</h6>
                    </div>
                </div>
                <div class="row">
                        <div class="col-lg-4">
                            <small class="text-muted">Personal Email</small>
                            <h5>{{isset($detail->emp_detail_email) ? $detail->emp_detail_email : 'Not configured yet'}}</h5>
                        </div>
                        <div class="col-lg-4">
                            <small class="text-muted">Bank Number</small>
                            <h5>{{isset($detail->emp_detail_bank) ? $detail->emp_detail_bank : 'Not configured yet'}}</h5>
                        </div>
                        <div class="col-lg-4">
                            <small class="text-muted">Position</small>
                            <h5>{{isset($detail->emp_detail_position) ? $detail->emp_detail_position : 'Not configured yet'}}</h6>
                        </div>
                </div>
                <div class="page-title m-t-30 m-b-5">Goverment Numbers</div>
                <div class="row">
                    
                        <div class="col-lg-3">
                            <small class="text-muted">SSS Number</small>
                            <h5>{{isset($detail->employee_sss) ? $detail->employee_sss : 'Not configured yet'}}</h5>
                        </div>
                        <div class="col-lg-3">
                            <small class="text-muted">TIN Number</small>
                            <h5>{{isset($detail->employee_tin) ? $detail->employee_tin : 'Not configured yet'}}</h5>
                        </div>
                        <div class="col-lg-3">
                            <small class="text-muted">PAG-IBIG Number</small>
                            <h5>{{isset($detail->employee_pagibig) ? $detail->employee_pagibig : 'Not configured yet'}}</h6>
                        </div>
                        <div class="col-lg-3">
                            <small class="text-muted">PhilHealth Number</small>
                            <h5>{{isset($detail->employee_philhealth) ? $detail->employee_philhealth : 'Not configured yet'}}</h6>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="card">
                
                <div class="card-body">
                        <div class="page-title m-b-5">Salary Information</div>
                        <div class="row">
                                <div class="col-lg-12">
                                        <small class="text-muted">First Name</small>
                                        <h5>{{isset($employee->employee_fname) ? $detail->employee_fname : 'Not configured yet'}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <small class="text-muted">Middle Name </small>
                                        <h5>{{isset($employee->employee_mname) ? $detail->employee_mname : 'Not configured yet'}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <small class="text-muted">Last Name</small>
                                        <h5>{{isset($detail->employee_lname) ? $detail->employee_lname : 'Not configured yet'}}</h6>
                                    </div>
                        </div>

                </div>
        </div>
        <div class="card">
                <div class="card-body">
                        <div class="page-title m-b-5">Salary Deductions</div>
                        <div class="row">
                                <div class="col-lg-12">
                                        <small class="text-muted">First Name</small>
                                        <h5>{{isset($employee->employee_fname) ? $detail->employee_fname : 'Not configured yet'}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <small class="text-muted">Middle Name </small>
                                        <h5>{{isset($employee->employee_mname) ? $detail->employee_mname : 'Not configured yet'}}</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <small class="text-muted">Last Name</small>
                                        <h5>{{isset($detail->employee_lname) ? $detail->employee_lname : 'Not configured yet'}}</h6>
                                    </div>
                        </div>

                </div>
        </div>
    </div>
</div>
@endsection