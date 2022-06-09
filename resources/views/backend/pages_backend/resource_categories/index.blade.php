@extends('backend.layouts_backend.master')

@section('title')
All Resource Categories
@endsection

@section('content')

<!-- Main content dashboard  -->


                       
                <div class="page-content">
                    <div class="container-fluid">

                       

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title">Resource Categories</h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                   
                                    <div>
                                        <a href="/resource_categories/create" class="btn bg-primary text-light"><i class="bx bx-plus me-1"></i> Add Category</a>
                                    </div>
                                    
                                   
                                </div>

                            </div>
                        </div>
                        <!-- end row -->





                        <!-- FETCH FEEDBACKS -->

                        <div class="table-responsive mb-4">
                            <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                                <thead>
                                  <tr>
                                    
                                    <th scope="col">#ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th style="width: 150px; min-width: 80px;">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   
                                    
                                @foreach($categories as $category)
                                      <tr>
                                       
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        
                                        <td colspan="6">
                                            <div class="row">
                                             <div class="col-md-4">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#viewCategory{{ $category->id }}" data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                            </div>
                                                
                                            <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCategory{{ $category->id }}" data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                            </div>
                                            
                                            <!-- delete food menu -->
                                            <div class="col-md-4">
                                            <form action="{{ route('resource_categories.destroy',$category->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a >  <button class="btn btn-danger shadow btn-xs sharp"> <span class="fa fa-trash"> </button> </a>  
                                                        
                                            </form>



                                        </div>
                                            </div>
                                        </td>
                                      </tr>

                                      <!-- Edit and Update category -->

                                                      <!-- VIEW DETAILS MODEL -->

                <div class="modal fade" id="viewCategory{{ $category->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">

                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Category Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Name : {{ $category->name }}</p>
                                <hr>
                                <p>Description : {{ $category->description }}</p>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close </button>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF VIEW DETAILS MODEL -->

                <!-- edit   MENU DETAILS MODEL -->
                <div class="modal fade" id="editCategory{{ $category->id }}" tabindex="-1"
                    aria-labelledby="editFoodOrderLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Category Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">


                                <!-- form update food menu items -->

                                <form action="{{ route('resource_categories.update', $category->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Name:</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{  $category->name }}" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Category:</label>
                                        <input type="text" class="form-control" name="description"
                                            value="{{  $category->description }}" id="recipient-name">
                                    </div>
                                   

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <!-- <button  type="submit" class="btn btn-primary">Submit</button> -->
                                        <button class="btn btn-primary" type="submit">Update Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF edit DETAILS MODEL -->


                                      <!-- End of edit and update category -->





















                                    @endforeach
                                </tbody>
                            </table>
                            <!-- end table -->
                        </div>
                        <!-- end table responsive -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                

                        






                   

                    </div>
                    <!-- container-fluid -->
                </div>

@endsection