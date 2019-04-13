@extends('layouts.app')
@section('content')

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-12 row">
                        @if ($employees->count() == 0)
                        <div class="card">
                            <div class="card-body">
                                <div>No data has been saved.</div>
                            </div>
                        </div>
                        @endif
                        <div class="col-lg-10">
                                {{$employees}}
                        </div>
                        
                        
                        @foreach ($employees as $employee)
                        
                            <div class="col-md-6 col-lg-6 col-xlg-4 ">
                                <div class="card card-body ">
                                        
                                    <div class="row m-b-20">
                                        <div class="col-md-4 col-lg-3 text-center ">
                                            <a href="app-contact-detail.html"><img src="../assets/images/users/1.jpg" alt="user" class="img-circle img-responsive"></a>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <h3 class="box-title m-b-0">{{$employee->employee_name}}</h3> <small>{{$employee->employee_email}}</small><br>
                                            <small>Started Date: {{ date('M / d / Y', strtotime($employee->created_at)) }}</small>
                                        </div>
                                    </div>
                                    {{-- <div class="row button-group" style="color:white !important">
                                        <div class="col-md-3 col-lg-3" >
                                            <a class="col-lg-12 btn waves-effect waves-light btn-block btn-primary">Edit</a>
                                            
                                            <a class="col-lg-12 btn waves-effect waves-light btn-block btn-primary">Delete</a>
                                        </div>
                                        <div class="col-md-3 col-lg-3" >
                                            <a class="col-lg-12 btn waves-effect waves-light btn-block btn-primary">Edit</a>
                                        </div>
                                         --}}
                                    <div class="button-group " >
                                        <a href="employee" class="btn waves-effect waves-light btn-primary">Edit</a>
                                        <a href={{ route('employee.show', ['id'=>$employee->id]) }} class="btn waves-effect waves-light btn-success">View</a>
                                        <a href="employee" class="btn waves-effect waves-light btn-warning">Suspend</a>
                                        {{-- <a href="employee" class="btn waves-effect waves-light btn-danger">Delete</a> --}}
                                    </div>
                                </div>
                            </div>

                            
                        @endforeach
                </div>
            </div>
@endsection