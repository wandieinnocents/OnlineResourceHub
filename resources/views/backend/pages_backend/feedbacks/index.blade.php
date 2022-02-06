@extends('backend.layouts_backend.master')

@section('title')

@endsection

@section('content')

<!-- Main content dashboard  -->


                       
                <div class="page-content">
                    <div class="container-fluid">

                       

                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title">Customer Feedback <span class="text-muted fw-normal ms-2">(1)</span></h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                   
                                    <div>
                                        <a href="#" class="btn bg-primary text-light"><i class="bx bx-plus me-1"></i> Add Feedback</a>
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
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Description</th>
                                    <th style="width: 150px; min-width: 80px;">Action</th>
                                  </tr>
                                </thead>
                                <!-- Fetch data from database -->
                                @foreach($feedbacks as $feedback)
                                <tbody>
                                   
                                    
                                      <tr>
                                        <th scope="row">
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                                <label class="form-check-label" for="contacusercheck11"></label>
                                            </div>
                                        </th>
                                        <td>{{ $feedback->id }}</td>
                                        <td>
                                            <a href="#" class="text-body">{{ $feedback->name }}</a>
                                        </td>
                                        <td>{{ $feedback->subject }}</td>
                                        <td>{{ $feedback->email }}</td>
                                        <td>{{ $feedback->phone }}</td>
                                        <td>{!! Str::limit($feedback->description, 60, ' ...') !!}</td>
                                        
                                        <td colspan="6">
                                             <div class="row">
                                             <div class="col-md-4">
                                             <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $feedback->id }}" data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                            </div>
                                                
                                            <!-- <div class="col-md-4">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editFoodOrder" data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                            </div>  -->
                                            
                                            <!-- delete food menu -->
                                            <div class="col-md-4">
                                            <form action="{{ route('contact.destroy', $feedback->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a >  <button class="btn btn-danger shadow btn-xs sharp"> <span class="fa fa-trash"> </button> </a>  
                                                        
                                            </form>



                                        </div>
                                            </div>
                                        </td>
                                      </tr>
                                </tbody>


                <!-- VIEW DETAILS MODEL -->
                <div class="modal fade" id="exampleModal{{ $feedback->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Feedback Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                               
                                    

                                    <div class="modal-body">
                                    <p>Name : {{ $feedback->name }}</p>
                                    <hr>
                                    <p>Email : {{ $feedback->email }}</p>
                                    <hr>
                                    <p>Subject : {{ $feedback->subject }}</p>
                                    <hr>
                                    <p>Phone : {{ $feedback->phone }}</p>
                                    <hr>

                                    <p>Description : {{ $feedback->description }}</p>
                                    

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close </button>
                                    </div>
                                </div>
                              </div>
                 </div>
                <!-- END OF VIEW DETAILS MODEL -->





                                @endforeach
                                <!-- End fetch data from DB -->



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