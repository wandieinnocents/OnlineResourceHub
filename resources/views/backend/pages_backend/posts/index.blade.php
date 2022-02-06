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
                    <h5 class="card-title">Posts <span class="text-muted fw-normal ms-2">(4)</span></h5>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                    @can('post-create')
                    <div>
                        <a href="{{ route('posts.create') }}" class="btn bg-primary text-light"><i
                                class="bx bx-plus me-1"></i> Add Post</a>
                    </div>
                    @endcan



                </div>

            </div>
        </div>
        <!-- end row -->





        <div class="container">
            <div class="justify-content-center">
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
                @endif


            </div>

            <div class="table-responsive mb-4">
                <table class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('posts.show',$post->id) }}">Show</a>
                            @can('post-edit')
                            <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                            @endcan
                            @can('post-delete')
                            {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy',
                            $post->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                        </tbody>
                    </table>
                    <!-- {{ $data->appends($_GET)->links() }} -->
            </div>

        </div>
    </div>








</div>
<!-- container-fluid -->
</div>

@endsection