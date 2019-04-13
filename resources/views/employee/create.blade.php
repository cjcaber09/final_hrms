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
                        {{ csrf_field() }}

                        {{-- @foreach ($errors as $error)
                            <div class="box bg-light-danger">{{$error}}</div>
                        @endforeach --}}
                        
                        <div class="form-group col-md-6 m-t-20">
                            <label for="name">Display Name</label>
                            <input type="text" class="form-control form-control-line" name="name" style="cursor: auto;" required>
                        </div>
                        <div class="form-group col-md-6 m-t-20">
                            <label for="name">Email Address</label>
                            <input type="email" class="form-control form-control-line" name="email" style="cursor: auto;" required>
                        </div>
                        <div class="form-group col-md-6 m-t-20">
                            <label for="name">Password</label>
                            <input type="password" class="form-control form-control-line" name="password" style="cursor: auto;" required>
                        </div>
                        <div class="form-group col-md-6 m-t-20">
                            <label for="name">Confirm Password</label>
                            <input type="password" class="form-control form-control-line" name="confirmpassword" style="cursor: auto;" required>
                        </div>
                        <div class="form-group col-md-6 m-t-20">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection