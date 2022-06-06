@extends('backend.layouts_backend.master')

@section('title')

@endsection

@section('content')

<!-- Main content dashboard  -->
<div class="page-content">
                    <div class="container-fluid">

                    <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title">Users <span class="text-muted fw-normal ms-2">88</span></h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                   
                                    <div>
                                        <a href="{{ route('users.create') }}" class="btn bg-primary text-light"><i class="bx bx-plus me-1"></i> Add User</a>
                                    </div>
                                    
                                   
                                </div>

                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Page content starts here -->

                      
    

                        

    <!-- User profile  -->

    <div class="row">
                        <div class="col-md-3">

                        </div>

                        <div class="col-md-6">
                        <div class="card text-center">
                                    <div class="card-body">
                                       
                                        
                                        <div class="mx-auto mb-4">
                                            <img src="{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}" alt="" class="avatar-xl rounded-circle img-thumbnail">
                                        </div>
                                        <h5 class="font-size-16 mb-1"><a href="#" class="text-dark"> {{ $user->name }}</a></h5>
                                        <p class="text-muted mb-2"> {{ $user->email }}</p>
                                        <p class="text-muted mb-2"> <strong>********</strong> </p>
                                        
                                        
                                    </div>

                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-success text-truncate"><i class="uil uil-user me-1"></i> Email</button>
                                        <!-- Edit user -->
                                        <button type="button" class="btn btn-primary text-truncate"><i class="uil uil-envelope-alt me-1"></i>
                                        @can('user-edit')
                                        <a class="text-white" href="{{ route('users.edit',$user->id) }}">
                                          Edit</a>
                                       @endcan
                                        </button>
                                    
                                    
                                       

                                    </div>
                                </div>                           
                            
                        </div>

                        </div>

                        <div class="col-md-3">

                        </div>
            </div>
                        

    <!-- End of user profile -->






                   

                    </div>
                    <!-- container-fluid -->
                </div>

@endsection