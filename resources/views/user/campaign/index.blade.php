@extends('layouts.layout')
@section('styles')
@parent
<style>
    
</style>
@endsection
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <h2 class="text-white font-weight-bold my-2 mr-5">Campaigns</h2>
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <a href="javascript:;" class="text-white text-hover-white opacity-75 hover-opacity-100 ml-3">Your campaigns are here</a>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="{{ route('user.campaign.create') }}" class="btn btn-white font-weight-bold py-3 px-6 mr-2">New Campaign</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-custom">
                        <div class="card-header card-header-tabs-line">
                            <div class="card-title">
                            <h3 class="card-label">Campaigns</h3>
                        </div>
                    </div>
                    <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
    <script src="{{ asset('user/custom/campaigns_list.js') }}"></script>
@endsection
@endsection