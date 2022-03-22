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

                    <!-- data tables -->

         
                                    <div class="card-header">
                                        <h4 class="card-title">Google Analytics</h4>
                                        
                                    </div>
                                    <div class="card-body">
        
                                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable_length">
                                                    <label>Show <select name="datatable_length" aria-controls="datatable" class="custom-select custom-select-sm form-control form-control-sm form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info" style="width: 1216px;">
                                            <thead>
                                            <th>#</th>
                                            <th>Date</th>
                                            <th>Visitors</th>
                                            <th>Page Title</th>
                                            <th>Page Views</th>
                                        </thead>
        
        
                                            <tbody>
                                            @php
                                                $no = 0;
                                            @endphp
                                            <!-- Foreach -->
                                        @foreach ($analyticsData as $data)
                                            <tr class="even">
                                                <td class="dtr-control sorting_1" tabindex="0">{{ ++$no }}</td>
                                                <td>{{ $data['date'] }}</td>
                                                <td>{{ $data['visitors'] }}</td>
                                                <td>{{ $data['pageTitle'] }}</td>
                                                <td>{{ $data['pageViews'] }}</td>
                                            </tr>
                                            @endforeach
                                        <!-- End for each -->
                                        
                                        </tbody>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
        
                                    </div>
                            

                    <!-- end of data tables -->

                  

                    </div>
                    <!-- container-fluid -->
                </div>






@endsection