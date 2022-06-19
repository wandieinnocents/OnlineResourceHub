@extends('backend.layouts_backend.master')

@section('title')
Dashboard
@endsection

@section('content')

<!-- Main content dashboard  -->
<div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Home</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- START OF ROW 1 -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body bg-gradient bg-success">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                            <span class="text-light mb-3 lh-1 d-block ">Resource Categories</span>                                                <h4 class="mb-3 text-light">
                                                    <span class="counter-value" data-target="{{ $resource_categories }}"></span>
                                                </h4>
                                            </div>
        
                                            
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-primary text-success">{{ $resource_categories }}</span>
                                            <span class="ms-1 text-muted font-size-13">Details</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body bg-gradient bg-primary">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-light mb-3 lh-1 d-block text-truncate">Resources</span>
                                                <h4 class="mb-3 text-light">
                                                    <span class="counter-value" data-target="{{ $resources }}"></span>
                                                </h4>
                                            </div>
                                            <!-- <div class="col-6 text-light">
                                                <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div> -->
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-danger text-light">{{ $resources }}</span>
                                            <span class="ms-1 text-light font-size-13">Details</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col-->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body bg-gradient bg-warning">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Users</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="{{ $users }}"></span>
                                                </h4>
                                            </div>
                                            <!-- <div class="col-6">
                                                <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div> -->
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">{{ $users }}</span>
                                            <span class="ms-1 text-muted font-size-13">Details</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body bg-gradient bg-danger">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Roles</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="{{ $roles }}"></span>
                                                </h4>
                                            </div>
                                            <!-- <div class="col-6">
                                                <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div> -->
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-primary text-success">{{ $roles }}</span>
                                            <span class="ms-1 text-light font-size-13">Details</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->    
                        </div>
                        <!-- END OF ROW 1 -->
                        



                    </div>
                    <!-- container-fluid -->
                </div>

@endsection