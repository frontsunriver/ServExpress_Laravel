@extends('layouts.layout')
@section('styles')
@parent
<style>
    .nav-link.active {
        color: #ff4b55 !important;
        border-bottom: 1px solid #ff4b55 !important;
    }
    .nav-link.active i {
        color: #ff4b55 !important;
    }
</style>
@endsection
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <h2 class="text-white font-weight-bold my-2 mr-5">Profile</h2>
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <a href="javascript:;" class="text-white text-hover-white opacity-75 hover-opacity-100 ml-3">Welcome {{auth()->user()->email}}</a>
                    </div>
                </div>
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
                            <h3 class="card-label">My Profile</h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_2"><i class="fa fas fa-wrench mr-3"></i>Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_2"><i class="fa fas fa-user mr-3"></i>Profile</a>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_2"><i class="fa fas fa-key mr-3"></i>Password</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1_2" role="tabpanel">
                                <form class="form">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleSelects">Receive weekly report</label>
                                            <select class="form-control form-control-lg" id="exampleSelectl">
                                                <option>Never</option>
                                                <option>Every Day</option>
                                                <option>Per time</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelects">Expert Mode</label>
                                            <select class="form-control form-control-lg" id="exampleSelectl">
                                                <option>Activated</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary">Apply</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel">
                                <form class="form">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleSelects">Email</label>
                                            <input type="email" class="form-control"  placeholder="Email" disabled value="{{auth()->user()->email}}" />
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleSelects">First Name</label>
                                                        <input type="text" class="form-control"  name="firstname" placeholder="First Name"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleSelects">Last Name</label>
                                                        <input type="text" class="form-control"  name="lastname" placeholder="Last Name"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelects">Company Name</label>
                                            <select class="form-control form-control-lg" name="company_name">
                                                <option>Google</option>
                                                <option>Facebook</option>
                                                <option>Apple</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelects">Address</label>
                                            <select class="form-control form-control-lg" name="company_name">
                                                <option>New York</option>
                                                <option>Los Angels</option>
                                                <option>Lasvegas</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleSelects">VAT ID</label>
                                                        <input type="text" class="form-control"  name="vat" placeholder="VAT ID"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleSelects">Country</label>
                                                        <input type="text" class="form-control"  name="country" placeholder="Country"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleSelects">POST CODE</label>
                                                        <input type="text" class="form-control"  name="post_code" placeholder="Post Code"/>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="exampleSelects">Phone Number</label>
                                                        <input type="text" class="form-control"  name="phone" placeholder="Phone Number"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" >
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                        <div class="form-group mt-15 mb-5" style="border-bottom: 1px solid #f64e60;">
                                            <label for="exampleSelects" class="text-danger">Close Account</label>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-danger">Close Account</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_3_2" role="tabpanel">
                                <form class="form">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleSelects">New Password</label>
                                            <input type="password" class="form-control"  name="password" placeholder="New Password" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelects">Confirm Password</label>
                                            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" />
                                        </div>
                                        <div class="form-group" >
                                            <button type="button" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection