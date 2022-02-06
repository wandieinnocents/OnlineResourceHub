@extends('backend.layouts_backend.master')

@section('title')

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
                                            <li class="breadcrumb-item active">Bookings</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Page content starts here -->
    
                        <p>{{ $foodmenu_single->foodmenu_price }}</p>
                        <p>{{ $foodmenu_single->foodmenu_price }}</p>
                        <p>{{ $foodmenu_single->foodmenu_price }}</p>
                        <p>{{ $foodmenu_single->foodmenu_price }}</p>

                        






                   

                    </div>
                    <!-- container-fluid -->
                </div>

@endsection