@extends('backend.layouts_backend.master')

@section('title')

@endsection

@section('content')

<!-- Main content dashboard  -->
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title">Add Users <span class="text-muted fw-normal ms-2"></span></h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                   
                                    <div>
                                        <a href="{{ route('users.index') }}" class="btn bg-primary text-light"><i class="bx bx-plus me-1"></i> All Users</a>
                                    </div>
                                    
                                   
                                </div>

                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Page content starts here -->

              <div class="row">
                        <div class="col-md-3">

                        </div>

                        <div class="col-md-6">
                            <!-- Add user section -->
                            <div class="justify-content-center">
                                
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="card">
                            

                                <div class="card-body">
                                    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
                                        <div class="form-group">
                                            <strong>Name:</strong>
                                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                        </div>
                                        <div class="form-group">
                                            <strong>Email:</strong>
                                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                        </div>
                                        <div class="form-group">
                                            <strong>Password:</strong>
                                            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                        </div>
                                        <div class="form-group">
                                            <strong>Confirm Password:</strong>
                                            {!! Form::password('password_confirmation', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                        </div>
                                        <div class="form-group">
                                            <strong>Role:</strong>
                                            {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>

                        </div>

                        <div class="col-md-3">

                        </div>
            </div>
                        






                   

                    </div>
                    <!-- container-fluid -->
                </div>

@endsection