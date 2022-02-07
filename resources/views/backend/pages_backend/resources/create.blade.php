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
                                    <h4 class="mb-sm-0 font-size-18">Add Resources</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Resources</li>
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
                                        <h4 class="card-title">Add Resource </h4>
                                        <!-- <p class="card-title-desc">Add Category</p> -->
                                    </div>
                                    <div class="card-body">
                                    <form  action="{{ route('resources.store') }}"  method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Category</label>

                                                    <select name="foodmenu_category_id" class="form-select">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                           
                                                            @endforeach
                                                    </select>

                
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Resource Name</label>
                                                        <input type="text" class="form-control"  name="foodmenu_name" id="validationCustom02" placeholder="Foos name" value="" required>
                                                        
                                                    </div>
                                                </div>

                                
                                            </div>

                                            <!-- ROW 2 -->
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Resource Name</label>
                                                        <input type="text" class="form-control"  name="foodmenu_name" id="validationCustom02" placeholder="Foos name" value="" required>
                                                        
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Permission Status</label>

                                                    <select name="permission_status" class="form-select">
                                                        
                                                            <option value="in_stock" selected >In Stock</option>
                                                            <option value="out_stock">Out Stock</option>
                                                            <option value="excess">Excess</option>
                                                            <option value="almost_done">Almost done</option>
                         
                                                    </select>
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                            </div>
                                            <!-- END OF ROW 2 -->

                                             <!-- ROW 3 -->
                                             <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Resource Name</label>
                                                        <input type="text" class="form-control"  name="foodmenu_name" id="validationCustom02" placeholder="Foos name" value="" required>
                                                        
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Permission Status</label>

                                                    <select name="permission_status" class="form-select">
                                                        
                                                            <option value="in_stock" selected >In Stock</option>
                                                            <option value="out_stock">Out Stock</option>
                                                            <option value="excess">Excess</option>
                                                            <option value="almost_done">Almost done</option>
                         
                                                    </select>
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                            </div>
                                            <!-- END OF ROW 3 -->

                                             <!-- ROW 3 -->
                                             <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Resource Name</label>
                                                        <input type="text" class="form-control"  name="foodmenu_name" id="validationCustom02" placeholder="Foos name" value="" required>
                                                        
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Permission Status</label>

                                                    <select name="permission_status" class="form-select">
                                                        
                                                            <option value="in_stock" selected >In Stock</option>
                                                            <option value="out_stock">Out Stock</option>
                                                            <option value="excess">Excess</option>
                                                            <option value="almost_done">Almost done</option>
                         
                                                    </select>
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                            </div>
                                            <!-- END OF ROW 3 -->

                                             <!-- ROW 4 -->
                                             <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Resource Name</label>
                                                        <input type="text" class="form-control"  name="foodmenu_name" id="validationCustom02" placeholder="Foos name" value="" required>
                                                        
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Permission Status</label>

                                                    <select name="permission_status" class="form-select">
                                                        
                                                            <option value="in_stock" selected >In Stock</option>
                                                            <option value="out_stock">Out Stock</option>
                                                            <option value="excess">Excess</option>
                                                            <option value="almost_done">Almost done</option>
                         
                                                    </select>
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                            </div>
                                            <!-- END OF ROW 4 -->



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Price</label>
                                                        <input type="text" class="form-control"  name="foodmenu_price" id="validationCustom03" placeholder="Price" required>
                                                        
                                                    </div>
                                                </div>
                                              
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Photo</label>
                                                        <input type="file" class="form-control" name="foodmenu_photo" id="validationCustom05" placeholder="Zip" required>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Description</label>
                                                        <textarea class="form-control" name="foodmenu_description" id="exampleFormControlTextarea5" placeholder="Enter Category Description" rows="3"></textarea>
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