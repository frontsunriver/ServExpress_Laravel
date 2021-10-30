@extends('layouts.layout')
@section('styles')
@parent
<style>
    .thumbnailgallery {
        width:100%;
        height:220px;
        padding: 60px;
        overflow:hidden;
    }
    .userprofiles a.profile {
        display:inline-block;
        float: left;
    }
    .userprofiles a:hover {
        color: #ff6d00;
    }
    .userprofiles img {
        border-radius: 5px;
        padding: 3px;
        display:block;
        border: 1px solid green;
    }
    .arrowleft, .arrowright {
        font-size:30px;
        cursor:pointer;
        display:inline-block;
        padding:20px;
        width: 30px;
        height: 30px;
        margin-top: 100px;
    }
    .profile {
        width: 300px;
        height: 160px;
        display: flex !important;
        align-items: center;
        justify-content: center;
        margin-left: 32px;
        border-radius: 30px;
        padding: 30px;
    }
</style>
@endsection
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-1">
                <div class="d-flex flex-column">
                    <h2 class="text-white font-weight-bold my-2 mr-5">Membership</h2>
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <a href="javascript:;" class="text-white text-hover-white opacity-75 hover-opacity-100 ml-3">Choose your favourite subscription plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
            
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">My Subscription</h3>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-separate">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Searches Per Day</th>
                                <th>Price</th>
                                <th>Start Date</th>
                                <th>Expire Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>100% AI Clicker</td>
                                <td>200</td>
                                <td>$ 170 / month</td>
                                <td>2021-07-25 12:00:59</td>
                                <td>2021-08-25 12:00:59</td>
                                <td>Acitve</td>
                            </tr>
                            <tr>
                                <td>95% AI + 5% Human Clicker</td>
                                <td>200</td>
                                <td>$ 170 / month</td>
                                <td>2021-07-25 12:00:59</td>
                                <td>2021-08-25 12:00:59</td>
                                <td>Expired</td>
                            </tr>
                            <tr>
                                <td>95% AI + 5% Human Clicker + Backlink</td>
                                <td>200</td>
                                <td>$ 170 / month</td>
                                <td>2021-07-25 12:00:59</td>
                                <td>2021-08-25 12:00:59</td>
                                <td>Expired</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card card-custom mt-10">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Choose a plan</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="pb-10" style="display:flex; justify-content: space-between; border-bottom: 1px solid #e2e2e2;">
                        <span class="arrowleft" id="prev"><i class="fa fas fa-angle-double-left font-size-h1"></i></span>
                        <div class="thumbnailgallery">
                            <div class="userprofiles clearfix">
                                <a href="" class="profile bg-primary">
                                    <div style="display:flex; justify-content:center">
                                        <i class="fa fas fa-user text-white font-size-h1 mr-5"></i>        
                                        <h1 class="text-white font-size-h3 text-center">100% Human Clicker</h1>    
                                    </div>
                                </a>
                                <a href="" class="profile bg-danger">
                                    <div style="display:flex; justify-content:center">
                                        <i class="fa fas fa-laptop text-white font-size-h1 mr-5"></i>        
                                        <h1 class="text-white font-size-h3 text-center">100% AI Clicker</h1>    
                                    </div>
                                </a>
                                <a href="" class="profile bg-success">
                                    <div style="display:flex; justify-content:center">
                                        <i class="fa fas fa-user text-white font-size-h1 mr-5"></i>        
                                        <h1 class="text-white font-size-h3">95% AI + 5% Human Clicker</h1>    
                                    </div>
                                </a>
                                <a href="" class="profile bg-info">
                                    <div style="display:flex; justify-content:center">
                                        <i class="fa fas fa-user text-white font-size-h1 mr-5"></i>        
                                        <h1 class="text-white font-size-h3 text-center">100% Human Clicker</h1>    
                                    </div>
                                </a>
                            </div>
                        </div>
                        <span class="arrowright" id="next"><i class="fa fas fa-angle-double-right font-size-h1"></i></span>
                    </div>
                    <div class="mt-10">
                        <h1 class="font-size-h1 text-center">100% AI Clicker</h1>
                        <h3 class="font-size-h3 text-center">How many searches/day do you need?</h3>
                        <div class="flex justify-content-center mt-5" style="display: flex; align-item: center;">
                            <input class="form-control" type="range" style="width:60%">
                        </div>
                        <div class="row justify-content-center mt-10">
                            <div class="col-sm-4 d-flex justify-content-center">
                                <span class="px-7 py-3 d-inline-flex flex-center text-center">
                                    <span class="pr-2 display-4 text-danger opacity-70">$</span>
                                    <span class="pr-2 display-1 font-weight-bold text-danger">349</span>
                                    <span class="text-danger display-3 opacity-70">/&nbsp;&nbsp;mo</span>
                                </span>
                                
                            </div>
                            <div class="col-sm-4">
                                <h1 class="font-size-h2 ml-5 mb-5">500 Searches / day</h1>
                                <ul style="list-style-type: disclosure-closed;">
                                    <li><p>AI Clicker: 100%</p></li>
                                    <li><p> Human Clicker: 0%</p></li>
                                    <li><p>Backlink: 0</p></li>
                                    <li><p>A Campaigns: Unlimited</p></li>
                                    <li><p> Keywords: Unlimited</p></li>
                                    <li><p> Time on site: Up to 5 minutes</p></li>
                                    <li><p> Pageviews : Up to 5</p></li>
                                    <li><p> Geo-Targeting : State Level</p></li>
                                    <li><p> Bounce Rate : Between 0% and 100%</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-danger"><span>SUBSCRIBE NOW</span><i class="ml-5 fa fas fa-play-circle"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    var profileWidht = $(".profile").width();
    $('#prev').on('click', function () {
        var last = $('.profile').last().css({opacity: '0', width: '0px'});
        last.prependTo('.userprofiles');
        last.animate({opacity: '1', width: (profileWidht + 64 + 'px')});
    });
    $('#next').on('click', function () {
        var first = $('.profile').first();
        first.animate({opacity: '0', width: '0px'}, function() {
            first.appendTo('.userprofiles').css({opacity: '1', width: profileWidht + 64 + 'px'});
        });
    });
</script>
@endsection
@endsection