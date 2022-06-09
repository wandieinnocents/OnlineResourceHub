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

                                                    <select name="resource_category_id" class="form-select @error('resource_category_id') is-invalid @enderror">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <!--  validation error message -->
                                                    @error('resource_category_id')
                                                            <span style="color:red" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Title</label>
                                                        <input type="text" class="form-control @error('title') is-invalid @enderror"  name="title" id="validationCustom02" placeholder="Enter Resource Title" value="" >
                                                        <!--  validation error message -->
                                                        @error('title')
                                                            <span style="color:red" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                
                                            </div>

                                            <!-- ROW 2 -->
                                            <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Audience</label>
                                                        <input type="text" class="form-control @error('audience') is-invalid @enderror"  name="audience" id="validationCustom02" placeholder="Add audience" value="" >
                                                    <!--  validation error message -->
                                                    @error('audience')
                                                            <span style="color:red" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Written Permission</label>

                                                    <select name="written_permission" class="form-select">
                                                        
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                         
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
                                                        <label class="form-label" for="validationCustom02">Written Permission Storage</label>
                                                        <input type="text" class="form-control"  name="written_permission_storage" id="validationCustom02" placeholder="Written Permission Storage" value="" >
                                                        
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Permission Resource Usage </label>

                                                    <select name="permission_status" class="form-select">
                                                        
                                                            <option value="Yes" selected >Yes</option>
                                                            <option value="No">No</option>
                                                           
                         
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
                                                        <label class="form-label" for="validationCustom02">Who to contact for permission</label>
                                                        <input type="text" class="form-control"  name="contact_person_written_permission" id="validationCustom02" placeholder="Who to contact for permission" value="" >
                                                        
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Topic</label>
                                                        <input type="text" class="form-control"  name="topic" id="validationCustom02" placeholder="Enter Topic" value="" >
                                                        
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                            </div>
                                            <!-- END OF ROW 3 -->

                                             <!-- ROW 4 -->
                                             <div class="row">
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Link</label>
                                                        <input type="text" class="form-control"  name="link" id="validationCustom02" placeholder="Enter Link" value="" >
                                                        
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">Created By</label>
                                                        <input type="text" class="form-control"  name="created_by" id="validationCustom02" placeholder="Created By" value="" >
                                                        
                                                    </div>
                                                </div>
                                                <!-- Hidden status on create , visible on update -->
                                            </div>
                                            <!-- END OF ROW 4 -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Partner Organisations</label>
                                                        <input type="text" class="form-control"  name="partner_orgnisations" id="validationCustom03" placeholder="Partner Organisations" >
                                                        
                                                    </div>
                                                </div>
                                              
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">Date</label>
                                                        <input type="date" class="form-control"  name="date" id="validationCustom03" placeholder="Date" >
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="mb-3">
                                                        <label class="form-label" >Description</label>
                                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea5" placeholder="Enter Resource Description" rows="3"></textarea>
                                                    </div>
                                                </div>
                                              
                                                
                                            </div>
                                            
                                            <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Attachment</label>
                                                        <input type="file" class="form-control" name="attachment" id="validationCustom05" placeholder="Attachment" >
                                                        
                                                    </div>
                                             </div>

                                             <!-- thumbnail  -->
                                             <div class="col-md-6">
                                                <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Thumbnail</label>
                                                        <input type="file" class="form-control" name="thumbnail" id="validationCustom05" placeholder="Thumbnail" >
                                                        
                                                    </div>
                                             </div>

                                            </div>


                                            <button class="btn btn-primary" type="submit">Add Resource</button>
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