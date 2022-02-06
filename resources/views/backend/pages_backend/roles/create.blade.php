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
                    <h5 class="card-title">Users <span class="text-muted fw-normal ms-2">88</span></h5>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                    <div>
                        <a href="{{ route('roles.index') }}" class="btn bg-primary text-light"><i
                                class="bx bx-plus me-1"></i> All Roles</a>
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
                        {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                    
                        <div class="form-group">
                            <strong>Role Name:</strong>
                            
                            {!! Form::text('name', null, array('placeholder' => 'Role Name','class' => 'form-control')) !!}
                        </div>
                        <br>
                        <div class="form-group">
                            <strong>Permission:</strong>
                            <br />
                            @foreach($permission as $value)
                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                {{ $value->name }}</label>
                            <br />
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
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