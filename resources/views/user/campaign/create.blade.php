@extends('layouts.layout')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <h2 class="text-white font-weight-bold my-2 mr-5">Campaign</h2>
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <a href="javascript:;" class="text-white text-hover-white opacity-75 hover-opacity-100 ml-3">Choose your favourite subscription plan</a>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a href="{{ route('user.campaign') }}" class="btn btn-white font-weight-bold py-3 px-6 mr-2">Campaign List</a>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Create</h3>
                    </div>
                </div>
                <div class="card-body">
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
                            <button type="button" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection