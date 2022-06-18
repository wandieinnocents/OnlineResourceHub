@extends('backend.layouts_backend.master')

@section('title')
Analytics
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
                     <h4 class="card-title">Google Analytics</h4>
                      <!-- Tabbed content -->
                      <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <!-- fetch page visits -->
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Page Views</button>
                        <!-- fetch most visited -->
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Most Visited</button>
                        <!-- fetch total visits -->
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Total Visits</button>
                        <!-- fetch top browsers -->
                        <button class="nav-link" id="nav-topbrowsers-tab" data-bs-toggle="tab" data-bs-target="#nav-topbrowsers" type="button" role="tab" aria-controls="nav-topbrowsers" aria-selected="false">Top Browsers</button>
                    </div>

                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                    <!-- page views -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                           <!-- data tables -->
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
                    <!-- End page views -->

                    <!-- popular -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <!-- data tables -->
                        <div class="card-body">

                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable_length">
                                    <label>Show <select name="datatable_length" aria-controls="datatable" class="custom-select custom-select-sm form-control form-control-sm form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info" style="width: 1216px;">
                            <thead>
                            <th>#</th>
                            <th>URL</th>
                            <th>Page Title</th>
                            <th>Page Views</th>
                        </thead>


                            <tbody>
                            @php
                                $no = 0;
                            @endphp
                            <!-- Foreach -->
                        @foreach ($popular as $popular_data)
                            <tr class="even">
                                <td class="dtr-control sorting_1" tabindex="0">{{ ++$no }}</td>
                                <td>{{ $popular_data['url'] }}</td>
                                <td>{{ $popular_data['pageTitle'] }}</td>
                                <td>{{ $popular_data['pageViews'] }}</td>
                            </tr>
                            @endforeach
                        <!-- End for each -->
                        
                        </tbody>
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>

                    </div>
                    <!-- end of data tables -->

                    </div>
                    <!-- End popular -->

                    <!-- Other tab -->
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        
                      <!-- page views -->
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                           <!-- data tables -->
                           <div class="card-body">

                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable_length">
                                        <label>Show <select name="datatable_length" aria-controls="datatable" class="custom-select custom-select-sm form-control form-control-sm form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info" style="width: 1216px;">
                                <thead>
                                <!-- <th>#</th> -->
                                <th>Date</th>
                                <th>Visitors</th>
                                <th>Page Views</th>
                            </thead>


                            <tbody>
                            @php
                                $no = 0;
                            @endphp
                            <!-- Foreach -->
                        @foreach ($total_visitors as $visitors_data)
                            <tr class="even">
                                <!-- <td class="dtr-control sorting_1" tabindex="0">{{ ++$no }}</td> -->
                                <td>{{ $visitors_data['date'] }}</td>
                                <td>{{ $visitors_data['visitors'] }}</td>
                                <td>{{ $visitors_data['pageViews'] }}</td>
                            </tr>
                            @endforeach
                        <!-- End for each -->

                        </tbody>
                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>

                        </div>
                        <!-- end of data tables -->

                    </div>
                    <!-- End page views -->
                
                    </div>
                   <!-- End of other tab -->


                    <!-- Top browsers -->
                    <div class="tab-pane fade" id="nav-topbrowsers" role="tabpanel" aria-labelledby="nav-topbrowsers-tab">
                     <!-- data tables -->
                     <div class="card-body">
                                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatable_length">
                                            <label>Show <select name="datatable_length" aria-controls="datatable" class="custom-select custom-select-sm form-control form-control-sm form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info" style="width: 1216px;">
                                    <thead>
                                    <th>#</th>
                                    <th>Browser</th>
                                    <th>Sessions</th>
                                  
                                </thead>
                                    <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    <!-- Foreach -->
                                @foreach ($fetch_top_browsers as $top_browsers_data)
                                    <tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">{{ ++$no }}</td>
                                        <td>{{ $top_browsers_data['browser'] }}</td>
                                        <td>{{ $top_browsers_data['sessions'] }}</td>
                                    </tr>
                                    @endforeach
                                <!-- End for each -->

                                </tbody>
                                 </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>

                        </div>
                        <!-- end of data tables -->

                    </div>
                    </div>
                    <!-- End top browsers -->




                </div>


                    <!-- End tabbed content -->

                
                  

                    </div>
                    <!-- container-fluid -->
                </div>






@endsection