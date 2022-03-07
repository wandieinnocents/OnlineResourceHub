@extends('backend.layouts_backend.master')

@section('title')

@endsection

@section('extra_styles')

<style>
    body.modal-open { 
  padding-right: 0 !important;
  overflow-y: scroll;
}
</style>

@endsection

@section('content')

<!-- Main content dashboard  -->


                       
                <div class="page-content">
                    <div class="container-fluid">

                       

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title">Resources <span class="text-muted fw-normal ms-2">({{ $count_resources }})</span></h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                   
                                    <div>
                                        <a href="/resources/create" class="btn bg-primary text-light"><i class="bx bx-plus me-1"></i> Add Resource</a>
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
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input" id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th scope="col">#ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Photo</th>
                                   
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th>Download</th>
                                    <th style="width: 150px; min-width: 80px;">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   
                                    
                                @foreach($resources as $resource)
                                      <tr>
                                        <th scope="row">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                                <label class="form-check-label" for="contacusercheck11"></label>
                                            </div>
                                        </th>
                                        <td>{{ $resource->id }}</td>

                                        <td>
                                            <a href="#" class="text-body">{{ $resource->resource_category_r->name }} </a>
                                        </td>
                                        <td>{{ $resource->title }}</td>
                                        <td>  

                                        @if (($resource->attachment))
                                                <a href="{!! asset($resource->attachment) !!}" target="_blank">
                                                    <img class="img-thumbnail avatar-sm rounded-circle me-2" class="user-img" style="width: 100px; height:100px;"
                                                        onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}';"
                                                        src="{{ asset($resource->attachment) }}" alt="preview"
                                                        style="height:120px !important; width:80px !important; margin-left:20px;">
                                                </a>

                                        @else
                                            <p class="text-danger">No Photo</p>
                                        @endif
                                            
                                        
                                        
                                        
                                        <!-- <img src="assets/backend_assets/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">  -->
                                    </td> 
                                      
                                       
                                        <td>{{ $resource->permission_status }}</td>
                                        <td>{{ $resource->permission_status }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="badge badge-soft-primary font-size-11">{{ $resource->permission_status }}</a>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <!-- DOWNLOAD FILE -->
                                            <a href="{!! asset($resource->attachment) !!}" target="_blank">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-whatever="@getbootstrap">
                                            <i class="fas fa-download "></i>
                                        </button></a>

                                        </td>
                                        <td colspan="6">
                                            <div class="row">
                                             <div class="col-md-4">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $resource->id }}" data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                            </div>
                                                
                                            <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editFoodOrder{{ $resource->id }}" data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                            </div>

                                            
                                            
                                            <!-- delete food menu -->
                                            <div class="col-md-4">
                                            <form action="{{ route('resources.update', $resource->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a >  <button class="btn btn-danger shadow btn-xs sharp"> <span class="fa fa-trash"> </button> </a>  
                                                        
                                            </form>



                                        </div>
                                                
                                                
                                               
                                            </div>
                                        </td>
                                      </tr>





                <!-- VIEW DETAILS MODEL -->
                <div class="modal fade" id="exampleModal{{ $resource->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Product Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                               
                                    

                                    <div class="modal-body">

                                    <img src="{{ asset($resource->attachment) }} " style="width: 100%; height:60%;">
                                    <hr>
                                    <p>Food : {{ $resource->title }}</p>
                                    <hr>

                                    <p>Category : {{ $resource->resource_category_r->name }}</p>
                                    <hr>
                                    <p>Status :
                                    <a href="#" class="badge badge-soft-primary font-size-11">{{ $resource->date }}</a>
                                    </p>
                                    <hr>


                                    <p>Price : {{ $resource->title }}</p>
                                    <hr>

                                    <p>Description : {{ $resource->title }}</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close </button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editFoodOrder{{ $resource->id }}" data-bs-whatever="@getbootstrap">Edit Resource</button>
                                    </div>
                                </div>
                              </div>
                 </div>
                <!-- END OF VIEW DETAILS MODEL -->




                <!-- edit  FOOD MENU DETAILS MODEL -->
                <div class="modal fade" id="editFoodOrder{{ $resource->id }}" tabindex="-1" aria-labelledby="editFoodOrderLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Resource Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">


                                        <!-- form update food menu items -->
                                    
                            <form action="{{ route('resources.update', $resource->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                                            <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Category</label>

                                                    <select name="foodmenu_category_id" class="form-select">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                           
                                                            @endforeach
                                                        </select>

                
                                                    </div>

                                                    <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">permission_status</label>

                                                    <select name="permission_status" class="form-select">
                                                        
                                                        <option value="Yes" selected >Yes</option>
                                                        <option value="No">No</option>
                                                        
           
                                                        
                                                </select>

                
                                                    </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Name:</label>
                                                <input type="text" class="form-control" name="title" value="{{  $resource->title }}" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Topic:</label>
                                                <input type="text" class="form-control" name="topic" value="{{  $resource->topic }}" id="recipient-name">
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Status:</label>
                                                <input type="text" class="form-control" name="foodmenu_name" value="" id="recipient-name">
                                            </div> -->
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Attachment</label>
                                                        <input type="file" class="form-control" name="attachment" value="{{ $resource->attachment }}"  placeholder="Zip">
                                                        
                                                    </div>
                                                </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Description:</label>
                                                <textarea class="form-control" name="topic" value="" id="message-text">{{  $resource->topic }}</textarea>
                                            </div>

                                            <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button  type="submit" class="btn btn-primary">Submit</button> -->
                                        <button class="btn btn-primary" type="submit">Update Resource</button>
                                    </div>


                                        </form>
                                    </div>
                                  

                                </div>
                              </div>
                 </div>
                <!-- END OF edit DETAILS MODEL -->






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