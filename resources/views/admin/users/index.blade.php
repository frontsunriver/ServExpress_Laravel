@extends('layouts.adminlayout')
@section('styles')
@parent
<link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
<!-- <style>
    .dataTables_filter {
        float: right;
    }
    .pagination {
        float: right;
    }
</style> -->
@endsction
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Users</h5>
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <!-- <a href="#" class="btn btn-light-warning font-weight-bolder btn-sm">Add New</a> -->
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container-fluid">
            
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <span class="card-icon">
                            <i class="flaticon2-supermarket text-primary"></i>
                        </span>
                        <h3 class="card-label">Users List</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Subscription plan</th>
                                <th>Expire Date</th>
                                <th>Total revenue</th>
                                <th>Credit</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    var _token = '{{csrf_token()}}';
</script>
<script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('admin/custom/user_table.js') }}"></script>
@endsection
@endsection

