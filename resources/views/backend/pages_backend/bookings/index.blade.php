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
                    <h5 class="card-title">Customer Bookings </h5>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                    <div>
                        <a href="#" class="btn bg-primary text-light"><i class="bx bx-plus me-1"></i> All Bookings</a>
                    </div>


                </div>

            </div>
        </div>
        <!-- end row -->





        <!-- FETCH FEEDBACKS -->

        <div class="table-responsive mb-4">
            <table class="table align-middle datatable dt-responsive table-check nowrap"
                style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
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
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th style="width: 150px; min-width: 80px;">Action</th>
                    </tr>
                </thead>
                @foreach($bookings as $booking)
                <tbody>


                    <tr>
                        <th scope="row">
                            <div class="form-check font-size-16">
                                <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                <label class="form-check-label" for="contacusercheck11"></label>
                            </div>
                        </th>
                        <td>{{ $booking->id }}</td>
                        <td>
                            <a href="#" class="text-body">{{ $booking->fullname }}</a>
                        </td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->phone }}</td>
                        <td>{!! Str::limit($booking->description, 60, ' ...') !!}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="#" class="badge badge-soft-primary font-size-11">{{ $booking->status }}</a>

                            </div>
                        </td>
                        <td colspan="6">
                            <div class="row">
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $booking->id }}"
                                        data-bs-whatever="@getbootstrap"><i class=" far fa-eye  "></i></button>
                                </div>

                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editFoodOrder{{ $booking->id }}"
                                        data-bs-whatever="@getbootstrap"><i class="fas fa-pencil-alt "></i></button>

                                </div>

                                <!-- delete food menu -->
                                <div class="col-md-4">
                                    <form action="{{ route('bookings.update',$booking->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a> <button class="btn btn-danger shadow btn-xs sharp"> <span
                                                    class="fa fa-trash"> </button> </a>

                                    </form>



                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>

                <!-- VIEW DETAILS MODEL -->

                <div class="modal fade" id="exampleModal{{ $booking->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">

                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Booking Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Booking Status :
                                    <a href="#" class="badge badge-soft-primary font-size-11">{{ $booking->status }}</a>
                                </p>
                                <hr>
                                <p>Fullname : {{ $booking->fullname }}</p>
                                <hr>
                                <p>Email : {{ $booking->email }}</p>
                                <hr>
                                <p>Phone : {{ $booking->phone }}</p>
                                <hr>
                                <p>Description : {{ $booking->description }}</p>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close </button>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#editFoodOrder{{ $booking->id }}"
                                    data-bs-whatever="@getbootstrap">Edit Food</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF VIEW DETAILS MODEL -->

                <!-- edit  FOOD MENU DETAILS MODEL -->
                <div class="modal fade" id="editFoodOrder{{ $booking->id }}" tabindex="-1"
                    aria-labelledby="editFoodOrderLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Booking Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">


                                <!-- form update food menu items -->

                                <form action="{{ route('bookings.update', $booking->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom01">Status</label>

                                        <select name="status" class="form-select">

                                            <option value="pending" selected>Pending</option>
                                            <option value="processing">Processing</option>
                                            <option value="completed">Completed</option>
                                        </select>

                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Name:</label>
                                        <input type="text" class="form-control" name="fullname"
                                            value="{{  $booking->fullname }}" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Email:</label>
                                        <input type="text" class="form-control" name="email"
                                            value="{{  $booking->email }}" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Phone:</label>
                                        <input type="text" class="form-control" name="phone"
                                            value="{{  $booking->email }}" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="message-text" class="col-form-label">Description:</label>
                                        <textarea class="form-control" name="description" value=""
                                            id="message-text">{{  $booking->description }}</textarea>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <!-- <button  type="submit" class="btn btn-primary">Submit</button> -->
                                        <button class="btn btn-primary" type="submit">Update Booking</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF edit DETAILS MODEL -->






































                @endforeach

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