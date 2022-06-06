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
                    <h4 class="mb-sm-0 font-size-18">Roles</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Roles</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- Page content starts here -->

        <div class="container">
            <div class="justify-content-center">
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        @can('role-create')
                        <span class="float-right">
                            <a class="btn btn-primary" href="{{ route('roles.create') }}">New Role</a>
                        </span>
                        @endcan
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th width="280px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a class="btn btn-success" href="{{ route('roles.show',$role->id) }}">Show</a>
                                        @can('role-edit')
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                        @endcan
                                        @can('role-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                                        $role->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->render() }}
                    </div>
                </div>
            </div>
        </div>









    </div>
    <!-- container-fluid -->
</div>

@endsection