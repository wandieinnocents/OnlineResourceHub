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
                                    <h5 class="card-title">Food Menu <span class="text-muted fw-normal ms-2">({{ $count_drinkmenus }})</span></h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                   
                                    <div>
                                        <a href="/drinkmenus/create" class="btn bg-primary text-light"><i class="bx bx-plus me-1"></i> Add Drink</a>
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
                                    <th style="width: 150px; min-width: 80px;">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                   
                                    
                                @foreach($drinkmenus as $drinkmenu)
                                      <tr>
                                        <th scope="row">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                                <label class="form-check-label" for="contacusercheck11"></label>
                                            </div>
                                        </th>
                                        <td>{{ $drinkmenu->id }}</td>

                                        <td>
                                            <a href="#" class="text-body">{{ $drinkmenu->drinkmenu_category_r->drinkmenu_category_name }} </a>
                                        </td>
                                        <td>{{ $drinkmenu->drinkmenu_name }}</td>
                                        <td>  

                                        @if (($drinkmenu->drinkmenu_photo))
                                                <a href="{!! asset($drinkmenu->drinkmenu_photo) !!}" target="_blank">
                                                    <img class="img-thumbnail avatar-sm rounded-circle me-2" class="user-img" style="width: 100px; height:100px;"
                                                        onerror="if (this.src != '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}') this.src = '{{ asset('assets/backend_assets/assets/images/users/avatar-2.jpg') }}';"
                                                        src="{{ asset($drinkmenu->drinkmenu_photo) }}" alt="preview"
                                                        style="height:120px !important; width:80px !important; margin-left:20px;">
                                                </a>

                                        @else
                                            <p class="text-danger">No Photo</p>
                                        @endif
                                            
                                        
                                        
                                        
                                        <!-- <img src="assets/backend_assets/assets/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle me-2">  -->
                                    </td> 
                                      
                                       
                                        <td>{{ $drinkmenu->drinkmenu_price }}</td>
                                        <td>{{ $drinkmenu->drinkmenu_description }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="#" class="badge badge-soft-primary font-size-11">{{ $drinkmenu->drinkmenu_status }}</a>
                                                
                                            </div>
                                        </td>
                                        <td colspan="6">
                                            <div class="row">
                                             <div class="col-md-4">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $drinkmenu->id }}" data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                            </div>
                                                
                                            <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editFoodOrder{{ $drinkmenu->id }}" data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                            </div>
                                            
                                            <!-- delete food menu -->
                                            <div class="col-md-4">
                                            <form action="{{ route('drinkmenus.update', $drinkmenu->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a >  <button class="btn btn-danger shadow btn-xs sharp"> <span class="fa fa-trash"> </button> </a>  
                                                        
                                            </form>



                                        </div>
                                                
                                                
                                               
                                            </div>
                                        </td>
                                      </tr>





                <!-- VIEW DETAILS MODEL -->
                <div class="modal fade" id="exampleModal{{ $drinkmenu->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Product Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                               
                                    

                                    <div class="modal-body">

                                    <img src="{{ asset($drinkmenu->drinkmenu_photo) }} " style="width: 100%; height:60%;">
                                    <hr>
                                    <p>Food : {{ $drinkmenu->drinkmenu_name }}</p>
                                    <hr>

                                    <p>Category : {{ $drinkmenu->drinkmenu_category_r->drinkmenu_category_name }}</p>
                                    <hr>
                                    <p>Status :
                                    <a href="#" class="badge badge-soft-primary font-size-11">{{ $drinkmenu->drinkmenu_status }}</a>
                                    </p>
                                    <hr>


                                    <p>Price : {{ $drinkmenu->drinkmenu_price }}</p>
                                    <hr>

                                    <p>Description : {{ $drinkmenu->drinkmenu_description }}</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close </button>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editFoodOrder{{ $drinkmenu->id }}" data-bs-whatever="@getbootstrap">Edit Food</button>
                                    </div>
                                </div>
                              </div>
                 </div>
                <!-- END OF VIEW DETAILS MODEL -->




                <!-- edit  FOOD MENU DETAILS MODEL -->
                <div class="modal fade" id="editFoodOrder{{ $drinkmenu->id }}" tabindex="-1" aria-labelledby="editFoodOrderLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Product Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">


                                        <!-- form update food menu items -->
                                    
                            <form action="{{ route('drinkmenus.update', $drinkmenu->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                                            <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Category</label>

                                                    <select name="drinkmenu_category_id" class="form-select">
                                                        @foreach($drinkmenu_categories as $drinkmenu_category)
                                                            <option value="{{ $drinkmenu_category->id }}">{{ $drinkmenu_category->drinkmenu_category_name }}</option>
                                                           
                                                            @endforeach
                                                        </select>

                
                                                    </div>

                                                    <div class="mb-3">
                                                    <label class="form-label" for="validationCustom01">Status</label>

                                                    <select name="drinkmenu_status" class="form-select">
                                                        
                                                        <option value="in_stock" selected >In Stock</option>
                                                        <option value="out_stock">Out Stock</option>
                                                        <option value="excess">Excess</option>
                                                        <option value="almost_done">Almost done</option>
           
                                                        
                                                </select>

                
                                                    </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Name:</label>
                                                <input type="text" class="form-control" name="drinkmenu_name" value="{{  $drinkmenu->drinkmenu_name }}" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Price:</label>
                                                <input type="text" class="form-control" name="drinkmenu_price" value="{{  $drinkmenu->drinkmenu_price }}" id="recipient-name">
                                            </div>
                                            <!-- <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Status:</label>
                                                <input type="text" class="form-control" name="foodmenu_name" value="" id="recipient-name">
                                            </div> -->
                                            <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">Photo</label>
                                                        <input type="file" class="form-control" name="drinkmenu_photo" value="{{ $drinkmenu->drinkmenu_photo }}"  placeholder="Zip">
                                                        
                                                    </div>
                                                </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Description:</label>
                                                <textarea class="form-control" name="drinkmenu_description" value="" id="message-text">{{  $drinkmenu->drinkmenu_description }}</textarea>
                                            </div>

                                            <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <!-- <button  type="submit" class="btn btn-primary">Submit</button> -->
                                        <button class="btn btn-primary" type="submit">UpdateFood</button>
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