@extends('layouts.layout')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <h2 class="text-white font-weight-bold my-2 mr-5">Dashboard</h2>
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <a href="javascript:;" class="text-white text-hover-white opacity-75 hover-opacity-100 ml-3">Welcome {{auth()->user()->email}}</a>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="#" class="btn btn-white font-weight-bold py-3 px-6 mr-2">Invoice</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom gutter-b">
                        <div class="d-flex card-header h-auto">
                            <div class="d-flex flex-column py-5 justify-content-lg-start">
                                <h3 class="card-label">Timeline</h3>
                                <h6 class="font-size-sm font-weight-lighter">Time is displayed using the same timezone than the Google Search Console: PT</h6>
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <div id="chart_1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom">
                        <div class="card-header card-header-tabs-line">
                            <div class="card-title">
                            <h3 class="card-label">Campaigns</h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_2">Total</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_2">Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1_2" role="tabpanel">
                                <div class="mb-7">
                                    <div class="row align-items-center">
                                        <div class="col-lg-9 col-xl-8">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 my-2 my-md-0">
                                                    <div class="input-icon">
                                                        <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                                        <span>
                                                            <i class="flaticon2-search-1 text-muted"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel">
                                <div class="mb-7">
                                    <div class="row align-items-center">
                                        <div class="col-lg-9 col-xl-8">
                                            <div class="row align-items-center">
                                                <div class="col-md-4 my-2 my-md-0">
                                                    <div class="input-icon">
                                                        <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query1" />
                                                        <span>
                                                            <i class="flaticon2-search-1 text-muted"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
    <script src="{{ asset('js/pages/features/charts/apexcharts.js') }}"></script>
    <script src="{{ asset('user/custom/campaigns_total.js') }}"></script>
@endsection
@endsection