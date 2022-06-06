@extends('backend.layouts_backend.master')

@section('title')

@endsection

@section('extra_styles')
@endsection

@section('content')

<!-- Main content dashboard  -->
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->

        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <h5 class="card-title">Users <span class="text-muted fw-normal ms-2">88</span></h5>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">

                @can('user-create')
                    <div>
                        <a href="{{ route('users.create') }}" class="btn bg-primary text-light"><i
                                class="bx bx-plus me-1"></i> Add User</a>
                    </div>
                @endcan


                </div>

            </div>
        </div>
        <!-- end page title -->

        <!-- Page content starts here -->

                
        

                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
                @endif
               
                    
                    <div class="card-body">
                        <table class="table table-stripped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
                                    <th style="width: 5px; min-width: 170px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <!-- User Roles -->
                                        @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $val)
                                        <p>{{ $val }}</p>
                                        @endforeach
                                        @endif
                                        <!-- End User Roles -->


                                    </td>
                                    <td colspan="">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 col-xs-12">
                                                <a href="{{ route('users.show',$user->id) }}">
                                                    <button type="button" class="btn btn-success"><i
                                                            class=" far fa-eye  "></i></button>
                                                </a>
                                            </div>
                                            @can('user-edit')
                                            <div class="col-md-4 col-sm-12 col-xs-12">

                                                <a href="{{ route('users.edit',$user->id) }}">

                                                    <button type="button" class="btn btn-primary"><i
                                                            class="fas fa-pencil-alt "></i></button>
                                                </a>

                                            </div>
                                            @endcan

                                            @can('user-delete')
                                            <div class="col-md-4 col-sm-12 col-xs-12">

                                                <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a> <button class="btn btn-danger shadow btn-xs sharp"> <span
                                                                class="fa fa-trash"> </button> </a>

                                                </form>
                                            </div>
                                            @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->render() }}
                    </div>
               
         


    </div>
    <!-- container-fluid -->
</div>

@endsection