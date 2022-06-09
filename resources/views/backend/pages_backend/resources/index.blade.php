@extends('backend.layouts_backend.master')

@section('title')
All Resources
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
                                    <th scope="col">#ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Thumbnail</th>
                                   
                                    <th scope="col">Topic</th>
                                    <th scope="col">Created By</th>
                                    <th scope="col">Permission Status</th>
                                    <th scope="col">Description</th>
                                    <th>Resource</th>
                                    <th style="width: 150px; min-width: 80px;">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($resources as $resource)
                                      <tr>
                                        <td>{{ $resource->id }}</td>
                                        <td>{{ $resource->date }}</td>
                                        <td>
                                            <a href="#" class="text-body">{{ $resource->resource_category_r->name }} </a>
                                        </td>
                                        <td>{{ $resource->title }}</td>
                                        <td>  
                                        @if (($resource->thumbnail))
                                                <a href="{!! asset($resource->thumbnail) !!}" target="_blank">
                                                    <img class="img-thumbnail avatar-sm rounded-circle me-2" class="user-img" style="width: 100px; height:100px;"
                                                        onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/default_icon.jpg') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/default_icon.jpg') }}';"
                                                        src="{{ asset($resource->thumbnail) }}" alt="preview"
                                                        style="height:120px !important; width:80px !important; margin-left:20px;">
                                                </a>

                                        @else
                                            <!-- <p class="text-danger">No Photo</p> -->
                                            <img class="img-thumbnail avatar-sm rounded-circle me-2" class="user-img" style="width: 100px; height:100px;" src="{{ asset('assets/backend_assets/assets/images/users/default_icon.jpg') }}">

                                        @endif
                                            
                                        
                                        
                                        
                                        <!-- <img src="assets/backend_assets/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">  -->
                                    </td> 
                                      
                                       
                                        <td>{{ $resource->topic }}</td>
                                        <td>{{ $resource->created_by }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="badge badge-soft-primary font-size-11">{{ $resource->permission_status }}</a>
                                                
                                            </div>
                                        </td>
                                        <td>  {{ \Illuminate\Support\Str::limit($resource->description, 80, $end='...') }}</td>
                                      
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
                                        <h5 class="modal-title" id="exampleModalLabel">Resource Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                               
                                    

                                    <div class="modal-body">
                                    @if (($resource->thumbnail))
                                                <!-- <a href="{!! asset($resource->thumbnail) !!}" target="_blank"> -->
                                                    <img 
                                                        onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/default_icon.jpg') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/default_icon.jpg') }}';"
                                                        src="{{ asset($resource->thumbnail) }}" alt="preview"
                                                        style="height:250px !important; width:500px !important; ">
                                                <!-- </a> -->

                                        @else
                                            <!-- <p class="text-danger">No Photo</p> -->
                                            <img class="user-img" width="500px;" style="height:330px !important;" src="{{ asset('assets/frontend_assets/assets/images/sense/docicon.png') }}">

                                        @endif

                                    <!-- <img class="img-thumbnail avatar-sm rounded-circle me-2" class="user-img" style="width: 100px; height:100px;" src="{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}"> -->

                                    <hr>
                                    <p>Title : {{ $resource->title }}</p>
                                    <hr>

                                    <p>Category : {{ $resource->resource_category_r->name }}</p>
                                
                                    <hr>
                                    <p>Audience : {{ $resource->audience }}</p>

                                    <hr>
                                    <p>Written Permission : {{ $resource->written_permission }}</p>

                                    <hr>
                                    <p>Written Permission Storage : {{ $resource->written_permission_storage }}</p>
                                    <hr>

                                    <p> Permission Resource Usage  : {{ $resource->written_permission_storage }}</p>
                                    <hr>

                                    <p>Who to contact for permission : {{ $resource->contact_person_written_permission }}</p>

                                    <hr>
                                    <p>Topic : {{ $resource->topic }}</p>
                                    

                                    <hr>
                                    <p>Link : {{ $resource->link }}</p>
                                    <hr>


                                    <p>Created By : {{ $resource->created_by }}</p>
                                    <hr>

                                    <p>Date : {{ $resource->date }}</p>
                                    <hr>

                                    

                                    <p>Permission Status :
                                    <a href="#" class="badge badge-soft-primary font-size-11">{{ $resource->permission_status }}</a>
                                    </p>
                                    <hr>


                                    <p>Description : {{ $resource->description }}</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close </button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editFoodOrder{{ $resource->id }}" data-bs-whatever="@getbootstrap">Edit Resource</button>
                                    </div>
                                </div>
                              </div>
                 </div>
                <!-- END OF VIEW DETAILS MODEL -->




                <!-- EDIT RESOURCE MODEL -->
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

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Category</label>

                                    <select name="resource_category_id" class="form-select">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                           
                                            @endforeach
                                    </select>


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Title</label>
                                        <input type="text" class="form-control"  name="title" id="validationCustom02" placeholder="Enter Resource Title" value="{{ $resource->title }}" required>
                                        
                                    </div>
                                </div>

                
                            </div>

                            <!-- ROW 2 -->
                            <div class="row">
                            <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Audience</label>
                                        <input type="text" class="form-control"  name="audience" id="validationCustom02" placeholder="Add audience" value="{{ $resource->audience }}" >
                                        
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
                                        <input type="text" class="form-control"  name="written_permission_storage" id="validationCustom02" placeholder="Written Permission Storage" value="{{ $resource->written_permission_storage }}" >
                                        
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
                                        <input type="text" class="form-control"  name="contact_person_written_permission" id="validationCustom02" placeholder="Who to contact for permission" value="{{ $resource->contact_person_written_permission }}" >
                                        
                                    </div>
                                </div>
                                <!-- Hidden status on create , visible on update -->
                                <div class="col-md-6">
                                <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Topic</label>
                                        <input type="text" class="form-control"  name="topic" id="validationCustom02" placeholder="Enter Topic" value="{{ $resource->topic }}" >
                                        
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
                                        <input type="text" class="form-control"  name="link" id="validationCustom02" placeholder="Enter Link" value="{{ $resource->link }}" >
                                        
                                    </div>
                                </div>
                                <!-- Hidden status on create , visible on update -->
                                <div class="col-md-6">
                                <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Created By</label>
                                        <input type="text" class="form-control"  name="created_by" id="validationCustom02" placeholder="Created By" value="{{ $resource->created_by }}" >
                                        
                                    </div>
                                </div>
                                <!-- Hidden status on create , visible on update -->
                            </div>
                            <!-- END OF ROW 4 -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom03">Partner Organisations</label>
                                        <input type="text" class="form-control"  name="partner_orgnisations" id="validationCustom03" placeholder="Partner Organisations" value="{{ $resource->partner_orgnisations }}">
                                        
                                    </div>
                                </div>
                              
                                <div class="col-md-6">
                                <div class="mb-3">
                                        <label class="form-label" for="validationCustom03">Date</label>
                                        <input type="date" class="form-control"  name="date" id="validationCustom03" placeholder="Date" value="{{ $resource->date }}">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea5" placeholder="Enter Resource Description" rows="3">{{ $resource->description }}</textarea>
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


                            <button class="btn btn-primary" type="submit">Update Resource</button>



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