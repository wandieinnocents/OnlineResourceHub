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
                                    <h4 class="mb-sm-0 font-size-18">Drinks</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Drinks</li>
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
                                        <h4 class="card-title">Add Drink </h4>
                                        <!-- <p class="card-title-desc">Add Category</p> -->
                                    </div>
                                    <div class="card-body">
                                    <form  action="{{ route('drinkmenus.store') }}"  method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Category</label>

                                                    <select name="drinkmenu_category_id" class="form-select">
                                                        @foreach($drinkmenu_categories as $drinkmenu_category)
                                                            <option value="{{ $drinkmenu_category->id }}">{{ $drinkmenu_category->drinkmenu_category_name }}</option>
                                                           
                                                            @endforeach
                                                    </select>

                
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Drink Name</label>
                                                        <input type="text" class="form-control"  name="drinkmenu_name" id="validationCustom02" placeholder="Driink name" value="" required>
                                                        
                                                    </div>
                                                </div>

                                                <!-- Hidden status on create , visible on update -->
                                                <div class="col-md-1" hidden>
                                                    <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Status</label>

                                                    <select name="drinkmenu_status" class="form-select">
                                                        
                                                            <option value="in_stock" selected >In Stock</option>
                                                            <option value="out_stock">Out Stock</option>
                                                            <option value="excess">Excess</option>
                                                            <option value="almost_done">Almost done</option>
               
                                                            
                                                    </select>

                
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Price</label>
                                                        <input type="text" class="form-control"  name="drinkmenu_price" id="validationCustom03" placeholder="Price" required>
                                                        
                                                    </div>
                                                </div>
                                              
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Photo</label>
                                                        <input type="file" class="form-control" name="drinkmenu_photo" id="validationCustom05" placeholder="Zip" required>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Description</label>
                                                        <textarea class="form-control" name="drinkmenu_description" id="exampleFormControlTextarea5" placeholder="Enter Category Description" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            <button class="btn btn-primary" type="submit">Add Food</button>
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