@extends('backend.layouts_backend.master')

@section('title')
Add Resource
@endsection

@section('content')

<!-- Main content dashboard  -->
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Resource Category</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Resource Category</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Page content starts here -->



                        <!-- Form -->


                        <div class="row">
                        <div class="col-xl-3">
                            
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Add Resource Category</h4>
                                        <!-- <p class="card-title-desc">Add Category</p> -->
                                    </div>
                                    <div class="card-body">
                                        <form  action="{{ route('resource_categories.store') }}"  method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">Name</label>
                                                        <input type="text" class="form-control" id="validationCustom01"  name="name" placeholder="Ennter Category Name" value="" required>
                                                        <div class="valid-feedback">
                                                            Validation
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Description</label>
                                                        <textarea class="form-control"  name="description" placeholder="Enter Category Description" rows="3"></textarea>
                                                    </div>
                                                </div>

                            
                                                
                                            </div>

                                            <!-- Editor -->

                       
                                            
                                         
                                            <button class="btn btn-primary" type="submit">Add Category</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
        
                        </div>
                        <!-- end row -->

                        <div class="col-xl-3">

                        </div>
                        
                        






                   

                    </div>
                    <!-- container-fluid -->
                </div>

@endsection