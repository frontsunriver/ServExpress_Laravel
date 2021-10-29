@extends('layouts.adminlayout')
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
        <div class="container">
            <div clss="row">
                <div class="col-md-12">
                    <div class="card card-custom gutter-b example example-compact">
                    <form class="form" action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">Create User</h3>
                        </div>
                    
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa far fa-envelope"></i></span>
                                            </div>
                                            <input required type="email" class="form-control" name="email" placeholder="Email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa far fa-user-circle"></i></span>
                                            </div>
                                            <input required type="text" class="form-control" name="name" placeholder="Name" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Subscription Plan</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa far fa-envelope"></i></span>
                                            </div>
                                            <input required type="text" class="form-control" name="subscription_plan" placeholder="Subscription plan" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Expire Date</label>
                                        <div class="input-group">
                                            <div class="input-group date">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-calendar"></i>
                                                    </span>
                                                </div>
                                                <input required type="text" class="form-control" readonly="readonly" name="expire_date" id="kt_datepicker_3" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <div class="col-9 col-form-label">
                                            <div class="checkbox-inline">
                                                <label class="checkbox checkbox-success">
                                                <input type="checkbox" name="status" />
                                                <span></span>Status</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    
                        <div class="card-footer right">
                            <button type="submit" class="btn btn-primary mr-2">Create</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
    <script src="{{asset ('admin/js/pages/crud/forms/widgets/bootstrap-datepicker.js') }}"></script>
@endsection
@endsection

