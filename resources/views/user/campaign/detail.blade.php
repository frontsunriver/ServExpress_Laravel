@extends('layouts.layout')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <h2 class="text-white font-weight-bold my-2 mr-5">Campaign Details</h2>
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <a href="javascript:;" class="text-white text-hover-white opacity-75 hover-opacity-100 ml-3">Your campaigns are here</a>
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
                            <h3 class="card-label">Brand Simon Campaign</h3>
                        </div>
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_tab_pane_1_2"><i class="fa fas fa-wrench mr-3"></i>Statistics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_2_2"><i class="fa fas fa-wrench mr-3"></i>Settings</a>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#kt_tab_pane_3_2"><i class="fa fas fa-key mr-3"></i>Keywords</a>
                                </li>
                                <li class="nav-item">
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1_2" role="tabpanel">
                                <div class="card card-custom">
                                    <div class="card-body">
                                        <div id="chart_1"></div>
                                    </div>
                                </div>
                                <div class="card card-custom mt-10">
                                    <div class="card-toolbar">
                                        <ul class="nav nav-tabs nav-bold nav-tabs-line">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#table1">Keyword Configured</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#table2">Last Searches</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="table1" role="tabpanel">
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
                                            <div class="tab-pane fade" id="table2" role="tabpanel">
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
                            <div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel">
                                <div class="card card-custom" style="border-bottom: 1px solid #e2e2e2;">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="">
                                                    <div style="padding: 0px 80px; width: 100%; height: 150px;border: 1px solid #fe4b55; border-radius: 25px;display: flex; justify-content: center;">
                                                        <div style="display:flex;justify-content:space-between;align-items: center;">
                                                            <i class="fab fa-google font-size-h1 mr-5"></i>  
                                                            <div>
                                                                <h1 class="font-size-h3">Google SEO</h1>        
                                                                <h2 class="font-size-h5">Organic Traffic from Google search</h2>
                                                            </div>      
                                                            
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="">
                                                    <div style="padding: 0px 80px; width: 100%; height: 150px;border: 1px solid #fe4b55; border-radius: 25px;display: flex; justify-content: center;">
                                                        <div style="display:flex;justify-content:space-between;align-items: center;">
                                                            <i class="fab fa-google font-size-h1 mr-5"></i>  
                                                            <div>
                                                                <h1 class="font-size-h3">Google SEO</h1>        
                                                                <h2 class="font-size-h5">Organic Traffic from Google search</h2>
                                                            </div>      
                                                            
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="">
                                                    <div style="padding: 0px 80px; width: 100%; height: 150px;border: 1px solid #fe4b55; border-radius: 25px;display: flex; justify-content: center;">
                                                        <div style="display:flex;justify-content:space-between;align-items: center;">
                                                            <i class="fab fa-google font-size-h1 mr-5"></i>  
                                                            <div>
                                                                <h1 class="font-size-h3">Google SEO</h1>        
                                                                <h2 class="font-size-h5">Organic Traffic from Google search</h2>
                                                            </div>      
                                                            
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="font-size-h2 mt-5 mb-5">More Information</h1>
                                <form class="form">
                                    @csrf
                                    <div class="card-body" style="border-bottom: 1px solid #e2e2e2;">
                                        <div class="form-group">
                                            <label for="exampleSelects">Name of your campaign:</label>
                                            <input type="text" class="form-control"  name="campaign" placeholder="Enter your Campaign Name" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelects">Website:</label>
                                            <input type="text" class="form-control" name="website" placeholder="Url of your website" />
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h2 class="font-size-h4">Parameters</h2>
                                                <div class="form-group">
                                                    <label for="exampleSelects">Country</label>
                                                    <select class="form-control form-control-lg" name="country">
                                                        <option>Australia</option>
                                                        <option>Algeria</option>
                                                        <option>Angola</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleSelects">Region</label>
                                                    <select class="form-control form-control-lg" name="region">
                                                        <option>All Regions</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleSelects">Mobile searches</label>
                                                    <select class="form-control form-control-lg" name="mobile_search">
                                                        <option>30%</option>
                                                        <option>50%</option>
                                                        <option>70%</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleSelects">Bounce Rate</label>
                                                    <select class="form-control form-control-lg" name="bounce_rate">
                                                        <option>50%</option>
                                                        <option>70%</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleSelects">Pages/Sessions</label>
                                                    <select class="form-control form-control-lg" name="page_session">
                                                        <option>1</option>
                                                        <option>10</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleSelects">AVG.Session Duration</label>
                                                    <select class="form-control form-control-lg" name="page_session">
                                                        <option>60 seconds</option>
                                                        <option>10 mins</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleSelects">Search Engine Version</label>
                                                    <select class="form-control form-control-lg" name="page_session">
                                                        <option>Google Search</option>
                                                        <option>Facebook Search</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleSelects">Action for keyword founded in position >40</label>
                                                    <div class="radio-inline">
                                                        <label class="radio radio-danger">
                                                            <input type="radio" name="radios12"/>
                                                            <span></span>
                                                            2% click
                                                        </label>
                                                        <label class="radio radio-danger">
                                                            <input type="radio" name="radios12" checked="checked" />
                                                            <span></span>
                                                            Speical percentage
                                                        </label>
                                                        <label class="radio radio-danger radio-disabled">
                                                            <input type="radio" name="radios12"/>
                                                            <span></span>
                                                            Not click
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h2 class="font-size-h4">Traffic during the week</h2>
                                                <div class="form-group d-flex justify-content-start mt-10 ml-10">
                                                    <span class="mt-2 mr-3 text-secondary">Random</span>
                                                    <div>
                                                        <span class="switch switch-outline switch-icon switch-danger">
                                                            <label>
                                                            <input type="checkbox" checked="checked" name="select"/>
                                                            <span></span>
                                                            </label>
                                                        </span>
                                                    </div>
                                                    <span class="mt-2 ml-3 text-danger">Manually</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <h2 class="font-size-h4">Exert mode</h2>
                                            </div>
                                            <div class="col-sm-6">
                                                
                                                <div class="form-group">
                                                    <label for="exampleSelects">Random search/day</label>
                                                    <select class="form-control form-control-lg" name="company_name">
                                                        <option>30%</option>
                                                        <option>50%</option>
                                                        <option>75%</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="exampleSelects">Random Avg. Session</label>
                                                    <select class="form-control form-control-lg" name="company_name">
                                                        <option>30%</option>
                                                        <option>50%</option>
                                                        <option>75%</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="exampleSelects">Second URL</label>
                                                    <input type="text" class="form-control"  name="second_url" placeholder="Second Url"/>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="exampleSelects">Third URL</label>
                                                    <input type="text" class="form-control"  name="third_url" placeholder="Third Url"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="button" class="btn btn-primary">Apply</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_3_2" role="tabpanel">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between pb-5" style="border-bottom:1px solid #e2e2e2;">
                                        <span class="font-size-h5">Keyword</span>
                                        <span class="font-size-h5">Searches/day</span>
                                    </div>
                                    <form class="form">
                                        <div class="mt-5 d-flex justify-content-between">
                                            <span>fda prior notice</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="price" value="1.5" style="width: 200px;">
                                            </div>
                                        </div>
                                        <div class="mt-5 d-flex justify-content-between">
                                            <span>fda prior notice</span>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="price" value="1.5" style="width: 200px;">
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end pb-5" style="border-bottom:1px solid #e2e2e2;">
                                            <button type="button" class="btn btn-outline-danger float-right">Swich simple/bulk mode</button>
                                        </div>
                                        <button type="button" class="btn btn-danger mt-5">MODIFY</button>
                                    </form>
                                </div>
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