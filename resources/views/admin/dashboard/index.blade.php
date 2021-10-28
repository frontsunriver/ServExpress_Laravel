@extends('layouts.adminlayout')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <a href="#" class="btn btn-light-warning font-weight-bolder btn-sm">Add New</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-xxl-3">
                    <div class="col bg-danger px-6 py-8 rounded-xl mr-7 mb-7">
                        <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1"/>
                                    <rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1"/>
                                    <path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <a href="#" class="text-light font-weight-bold font-size-h6">Total revenue</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3">
                    <div class="col bg-success px-6 py-8 rounded-xl mr-7 mb-7">
                        <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <a href="#" class="text-light font-weight-bold font-size-h6">Total active campaigns</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3">
                    <div class="col bg-primary px-6 py-8 rounded-xl mr-7 mb-7">
                        <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <polygon fill="#000000" opacity="0.3" transform="translate(8.885842, 16.114158) rotate(-315.000000) translate(-8.885842, -16.114158) " points="6.89784488 10.6187476 6.76452164 19.4882481 8.88584198 21.6095684 11.0071623 19.4882481 9.59294876 18.0740345 10.9659914 16.7009919 9.55177787 15.2867783 11.0071623 13.8313939 10.8837471 10.6187476"/>
                                        <path d="M15.9852814,14.9852814 C12.6715729,14.9852814 9.98528137,12.2989899 9.98528137,8.98528137 C9.98528137,5.67157288 12.6715729,2.98528137 15.9852814,2.98528137 C19.2989899,2.98528137 21.9852814,5.67157288 21.9852814,8.98528137 C21.9852814,12.2989899 19.2989899,14.9852814 15.9852814,14.9852814 Z M16.1776695,9.07106781 C17.0060967,9.07106781 17.6776695,8.39949494 17.6776695,7.57106781 C17.6776695,6.74264069 17.0060967,6.07106781 16.1776695,6.07106781 C15.3492424,6.07106781 14.6776695,6.74264069 14.6776695,7.57106781 C14.6776695,8.39949494 15.3492424,9.07106781 16.1776695,9.07106781 Z" fill="#000000" transform="translate(15.985281, 8.985281) rotate(-315.000000) translate(-15.985281, -8.985281) "/>
                                    </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <a href="#" class="text-light font-weight-bold font-size-h6">Total keywords</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-3">
                    <div class="col bg-info px-6 py-8 rounded-xl mr-7 mb-7">
                        <span class="svg-icon svg-icon-3x svg-icon-light d-block my-2">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <a href="#" class="text-light font-weight-bold font-size-h6">Total registered users</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-12">
                    <!--begin::Stats Widget 11-->
                    <div class="card card-custom card-stretch card-stretch-half gutter-b">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                <span class="symbol symbol-50 symbol-light-success mr-2">
                                    <span class="symbol-label">
                                        <span class="svg-icon svg-icon-xl svg-icon-success">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-right">
                                    <span class="text-dark-75 font-weight-bolder font-size-h3">750$</span>
                                    <span class="text-muted font-weight-bold mt-2">Weekly Income</span>
                                </div>
                            </div>
                            <div id="kt_stats_widget_11_chart" class="card-rounded-bottom" data-color="success" style="height: 150px"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 11-->
                    <!--begin::Stats Widget 12-->
                    <div class="card card-custom card-stretch card-stretch-half gutter-b">
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                <span class="symbol symbol-50 symbol-light-primary mr-2">
                                    <span class="symbol-label">
                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                </span>
                                <div class="d-flex flex-column text-right">
                                    <span class="text-dark-75 font-weight-bolder font-size-h3">+6,5K</span>
                                    <span class="text-muted font-weight-bold mt-2">New Users</span>
                                </div>
                            </div>
                            <div id="kt_stats_widget_12_chart" class="card-rounded-bottom" data-color="primary" style="height: 150px"></div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Stats Widget 12-->
                </div>
                <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
                    <!--begin::List Widget 3-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Authors</h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">August</a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header pb-1">
                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                    </span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-calendar-8"></i>
                                                    </span>
                                                    <span class="navi-text">Event</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-graph-1"></i>
                                                    </span>
                                                    <span class="navi-text">Report</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Post</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-writing"></i>
                                                    </span>
                                                    <span class="navi-text">File</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>
                                    <span class="text-muted">PHP, SQLite, Artisan CLI</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/avatars/006-girl-3.svg" class="h-75 align-self-end" alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Anne Clarc</a>
                                    <span class="text-muted">PHP, SQLite, Artisan CLI</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/avatars/011-boy-5.svg" class="h-75 align-self-end" alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Kristaps Zumman</a>
                                    <span class="text-muted">PHP, SQLite, Artisan CLI</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end:Dropdown-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/avatars/015-boy-6.svg" class="h-75 align-self-end" alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>
                                    <span class="text-muted">PHP, SQLite, Artisan CLI</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                    <span class="symbol-label">
                                        <img src="assets/media/svg/avatars/016-boy-7.svg" class="h-75 align-self-end" alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Carles Puyol</a>
                                    <span class="text-muted">PHP, SQLite, Artisan CLI</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 3-->
                </div>
                <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
                    <!--begin::List Widget 4-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Todo</h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-light btn-sm font-size-sm font-weight-bolder dropdown-toggle text-dark-75" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header pb-1">
                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                    </span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-calendar-8"></i>
                                                    </span>
                                                    <span class="navi-text">Event</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-graph-1"></i>
                                                    </span>
                                                    <span class="navi-text">Report</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Post</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-writing"></i>
                                                    </span>
                                                    <span class="navi-text">File</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-2">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                <!--end::Bullet-->
                                <!--begin::Checkbox-->
                                <label class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">
                                    <input type="checkbox" name="select" value="1" />
                                    <span></span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Create FireStone Logo</a>
                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end:Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mt-10">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-bar bg-primary align-self-stretch"></span>
                                <!--end::Bullet-->
                                <!--begin::Checkbox-->
                                <label class="checkbox checkbox-lg checkbox-light-primary checkbox-inline flex-shrink-0 m-0 mx-4">
                                    <input type="checkbox" value="1" />
                                    <span></span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Stakeholder Meeting</a>
                                    <span class="text-muted font-weight-bold">Due in 3 Days</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mt-10">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-bar bg-warning align-self-stretch"></span>
                                <!--end::Bullet-->
                                <!--begin::Checkbox-->
                                <label class="checkbox checkbox-lg checkbox-light-warning checkbox-inline flex-shrink-0 m-0 mx-4">
                                    <input type="checkbox" value="1" />
                                    <span></span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#" class="text-dark-75 text-hover-primary font-size-sm font-weight-bold font-size-lg mb-1">Scoping &amp; Estimations</a>
                                    <span class="text-muted font-weight-bold">Due in 5 Days</span>
                                </div>
                                <!--end::Text-->
                                <!--begin: Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mt-10">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-bar bg-info align-self-stretch"></span>
                                <!--end::Bullet-->
                                <!--begin::Checkbox-->
                                <label class="checkbox checkbox-lg checkbox-light-info checkbox-inline flex-shrink-0 m-0 mx-4">
                                    <input type="checkbox" value="1" />
                                    <span></span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Text-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Sprint Showcase</a>
                                    <span class="text-muted font-weight-bold">Due in 1 Day</span>
                                </div>
                                <!--end::Text-->
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-drop"></i>
                                                    </span>
                                                    <span class="navi-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-list-3"></i>
                                                    </span>
                                                    <span class="navi-text">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Groups</span>
                                                    <span class="navi-link-badge">
                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-bell-2"></i>
                                                    </span>
                                                    <span class="navi-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-gear"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator my-3"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-magnifier-tool"></i>
                                                    </span>
                                                    <span class="navi-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-bell-2"></i>
                                                    </span>
                                                    <span class="navi-text">Privacy</span>
                                                    <span class="navi-link-badge">
                                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mt-10">
                                <!--begin::Bullet-->
                                <span class="bullet bullet-bar bg-danger align-self-stretch"></span>
                                <!--end::Bullet-->
                                <!--begin::Checkbox-->
                                <label class="checkbox checkbox-lg checkbox-light-danger checkbox-inline flex-shrink-0 m-0 mx-4">
                                    <input type="checkbox" value="1" />
                                    <span></span>
                                </label>
                                <!--end::Checkbox:-->
                                <!--begin::Title-->
                                <div class="d-flex flex-column flex-grow-1">
                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Project Retro</a>
                                    <span class="text-muted font-weight-bold">Due in 12 Days</span>
                                </div>
                                <!--end::Text-->
                                <!--begin: Dropdown-->
                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">
                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-separator mt-3 opacity-70"></li>
                                            <li class="navi-footer py-4">
                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end:List Widget 4-->
                </div>
                <div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
                    <!--begin::List Widget 8-->
                    <div class="card card-custom card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0">
                            <h3 class="card-title font-weight-bolder text-dark">Trends</h3>
                            <div class="card-toolbar">
                                <div class="dropdown dropdown-inline">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-ver"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header pb-1">
                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                    </span>
                                                    <span class="navi-text">Order</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-calendar-8"></i>
                                                    </span>
                                                    <span class="navi-text">Event</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-graph-1"></i>
                                                    </span>
                                                    <span class="navi-text">Report</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Post</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-writing"></i>
                                                    </span>
                                                    <span class="navi-text">File</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Item-->
                            <div class="mb-10">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45 symbol-light mr-5">
                                        <span class="symbol-label">
                                            <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
                                        <span class="text-muted font-weight-bold">5 day ago</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Desc-->
                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the top Authors that fits within this section</p>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-10">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45 symbol-light mr-5">
                                        <span class="symbol-label">
                                            <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>
                                        <span class="text-muted font-weight-bold">5 day ago</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Desc-->
                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the Popular Authors that fits within this section</p>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="">
                                <!--begin::Section-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-45 symbol-light mr-5">
                                        <span class="symbol-label">
                                            <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column flex-grow-1">
                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
                                        <span class="text-muted font-weight-bold">5 day ago</span>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Desc-->
                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the New Users that fits within this section</p>
                                <!--end::Desc-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end: Card-->
                    <!--end::List Widget 8-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
