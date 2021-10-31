

<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../">
		<meta charset="utf-8" />
		<title>{{ trans('global.site_title') }}</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />
	</head>
	<style>
		html {
			scroll-behavior: smooth;
		}
		.thumbnailgallery {
			width:100%;
			height: 540px;
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
			margin-top: 205px;
		}
		.profile {
			width: 370px;
			height: 470px;
			display: flex !important;
			align-items: center;
			justify-content: center;
			border-radius: 30px;
		}
	</style>
	<body id="kt_body" style="background-color:#fff; background-image: url(media/bg/main.png); background-size:100% 775px !important" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
		<div id="kt_header_mobile" class="header-mobile">
			<!--begin::Logo-->
			<a href="index.html">
				Logo
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<button class="btn btn-icon btn-hover-transparent-white p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
			</div>
			<!--end::Toolbar-->
		</div>
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-row flex-column-fluid page">
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<div id="kt_header" class="header header-fixed mb-xxl-5" style="background-color: #e95059;">
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<div class="d-flex align-items-stretch mr-3">
								<div class="header-logo">
									<a href="index.html">
										<img alt="Logo" src="assets/media/logos/logo-letter-9.png" class="logo-default max-h-40px" />
										<img alt="Logo" src="assets/media/logos/logo-letter-1.png" class="logo-sticky max-h-40px" />
									</a>
								</div>
								<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
									<!--begin::Header Menu-->
									<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
										<!--begin::Header Nav-->
										<ul class="menu-nav">
											<li class="menu-item menu-item-submenu menu-item-rel pr-5 pl-5">
												<a href="#pricing">
													<span class="text-white menu-text">Pricing</span>
													<i class="menu-arrow"></i>
												</a>
											</li>
											<li class="menu-item menu-item-submenu menu-item-rel pr-5 pl-5">
												<a href="javascript:#">
													<span class="text-white menu-text">Case Study</span>
													<i class="menu-arrow"></i>
												</a>
											</li>
											<li class="menu-item menu-item-submenu menu-item-rel pr-5 pl-5">
												<a href="javascript:#">
													<span class="text-white menu-text">Blog</span>
													<i class="menu-arrow"></i>
												</a>
											</li>
											@if(Auth::check())
											<li class="menu-item menu-item-submenu menu-item-rel pr-5 pl-5">
												<a href="{{ route('user.dashboard')}}">
													<span class="text-white menu-text">Dashboard</span>
													<i class="menu-arrow"></i>
												</a>
											</li>
											<li class="menu-item menu-item-submenu menu-item-rel pr-5 pl-5">
												<a href="{{ route('user.membership')}}">
													<span class="text-white menu-text">Membership</span>
													<i class="menu-arrow"></i>
												</a>
											</li>
											<li class="menu-item menu-item-submenu menu-item-rel pr-5 pl-5">
												<a href="{{ route ('user.campaign') }}">
													<span class="text-white menu-text">Campagin</span>
													<i class="menu-arrow"></i>
												</a>
											</li>
											@endif
										</ul>
									</div>
								</div>
							</div>
							<div class="topbar">
								<!-- <div class="dropdown mr-5">
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
											<img class="h-20px w-20px rounded-sm" src="{{ asset('media/svg/flags/226-united-states.svg') }}" alt="" />
										</div>
									</div>
									<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
										<ul class="navi navi-hover py-4">
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="{{ asset('media/svg/flags/226-united-states.svg') }}" alt="" />
													</span>
													<span class="navi-text">English</span>
												</a>
											</li>
											<li class="navi-item active">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="{{ asset('media/svg/flags/128-spain.svg') }}" alt="" />
													</span>
													<span class="navi-text">Spanish</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="{{ asset('media/svg/flags/162-germany.svg') }}" alt="" />
													</span>
													<span class="navi-text">German</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="{{ asset('media/svg/flags/063-japan.svg') }}" alt="" />
													</span>
													<span class="navi-text">Japanese</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<img src="{{ asset('media/svg/flags/195-france.svg') }}" alt="" />
													</span>
													<span class="navi-text">French</span>
												</a>
											</li>
										</ul>
									</div>
								</div> -->
								<div class="dropdown mr-5">
									<div class="topbar-item">
										<a type="button" class="btn btn-outline-light mr-5"><span class="text-white">Free Trial</span></a>
										@if(!Auth::check())
											<a href="{{ route('login') }}" class="btn btn-light"><span class="text-danger">Log in</span></a>
										@endif
									</div>
									<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
										@if(Auth::check())
											<div class="btn btn-hover-transparent-white btn-dropdown mr-1">
												<span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
												<span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">{{auth()->user()->name}}</span>
												<span class="symbol symbol-35">
													<span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">A</span>
												</span>
											</div>
										@endif
									</div>
									@if(Auth::check())
									<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
										<ul class="navi navi-hover py-4">
											<li class="navi-item">
												<a href="{{ route('user.profile') }}" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<i class="fa fas fa-user" style="color:#848282"></i>
													</span>
													<span class="navi-text">Profile</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="{{ route('auth.logout') }}" class="navi-link">
													<span class="symbol symbol-20 mr-3">
														<i class="fa fas fa-sign-out-alt" style="color:#848282"></i>
													</span>
													<span class="navi-text">Log out</span>
												</a>
											</li>
										</ul>
									</div>
									@endif
								</div>
							</div>
						</div>
					</div>
					<div class="container mt-30">
						<div class="row justify-content-between">
							<div class="col-sm-6">
								<h2 class="text-white font-weight-bold" style="font-size: 45px;">Increase <span class="typewrite text-white" data-period="2000" data-type='[ "Website Ranking", "Our Ranking", "Google Search"]'><span class="wrap"></span></span></h2>
								<h2 class="text-white font-weight-bold" style="font-size: 45px;">and SERP CTR with</h2>
								<h2 class="text-white font-weight-bold" style="font-size: 45px;">Real organic clicks</h2>
								<div class="mt-5">
									<p class="text-white font-size-h4" style="line-height: 20px;">See your SEO efforts rewarded.</p>
									<p class="text-white font-size-h4" style="line-height: 20px;">Select your most important keywords</p>
									<p class="text-white font-size-h4" style="line-height: 20px;">and have them rank higher. Much higher.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<img src="{{asset('media/bg/1.png') }}" alt="" style="width:400px; height: 365px;">
							</div>

						</div>
						<div class="row mt-20">
							<div class="col-sm-4">
								<form class="form">
									<div class="form-group">
										<div class="input-group">
											<input type="text" class="form-control" style="border: 1px solid #2f3044;">
											<div class="input-group-append">
												<button type="button" style="background-color: #2F3044;color: #fff;border-top-right-radius: 7px;border-bottom-right-radius: 7px;">Start free trial</button>
											</div>
										</div>
										<span class="form-text text-muted">100% free to get started. No credit card required.</span>
									</div>
								</form>
							</div>
						</div>
						<div class="row mt-30 justify-content-between">
							<div class="col-sm-4">
								<h1>Increase SEO rankings by CTR manipulation</h1>
								<div class="mt-10">
									<p class="font-size-h4 font-weight-normal">Improve your SEO ranking positions by increasing the click-through of your keywords.</p>
									<p class="font-size-h4 font-weight-normal">The CTR is the SEO key factor that shows Google positif user signals. Try the largest residential network for CTR manipulation.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<img src="{{asset('media/bg/2.png') }}" alt="" style="width:400px; height: 300px;">
							</div>
						</div>
						<div class="row mt-30 justify-content-between">
							<div class="col-sm-7">
								<img src="{{asset('media/bg/3.png') }}" alt="" style="width:100%; height: 400px;">
							</div>
							<div class="col-sm-4">
								<h1>SearchSEO© analytics dashboard.</h1>
								<div class="mt-10">
									<p class="font-size-h4 font-weight-normal">Easily keep on track the statistics and analytics of your web traffic generator projects with a proper dashboard. Contact our support 24/7 to be advised on how to get the best results.</p>
								</div>
							</div>
						</div>

					</div>
					<div class="mt-20" style="background-color:#E95059; padding:50px 0px;">
						<h1 class="text-white flex-center display-3" style="text-align:center;">Wield The Power Of Organic Traffic.</h1>
						<h1 class="text-white flex-center font-size-h2 mt-10 font-weight-normal" style="text-align:center;">the simplest way to increase your SERP CTR</h1>
						<div class="container mt-20">
							<div class="row justify-content-between">
								<div class="col-sm-4">
									<div class="d-flex justify-content-start flex-column flex-md-row font-size-lg">
										<div>
											<i class="text-white la la-sliders-h" style="font-size: 50px;"></i>
										</div>
										<div class="ml-10">
											<h1 class="text-white flex-center font-size-h2">Customizable Campaign</h1>
											<h1 class="text-white flex-center font-size-h4 font-weight-normal mt-5">Customize your traffic to the details. Choose your bounce rate, pages visited, and more. And it’s error-free.</h1>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="d-flex justify-content-start flex-column flex-md-row font-size-lg">
										<div>
											<i class="text-white fab fas fa-globe" style="font-size: 50px;"></i>
										</div>
										<div class="ml-10">
											<h1 class="text-white flex-center font-size-h2">Geotargeted From Anywhere</h1>
											<h1 class="text-white flex-center font-size-h4 font-weight-normal mt-5">Our infrastructure allows you to get traffic from specific countries or even states, anywhere in the world, without limits.</h1>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="d-flex justify-content-start flex-column flex-md-row font-size-lg">
										<div>
											<i class="text-white fab fas fa-tag" style="font-size: 50px;"></i>
										</div>
										<div class="ml-10">
											<h1 class="text-white flex-center font-size-h2">Affordable Traffic</h1>
											<h1 class="text-white flex-center font-size-h4 font-weight-normal mt-5">You can get from 50 to 100 visits for each dollar you spend: that’s around 20 times cheaper than competitors.</h1>
										</div>
									</div>
								</div>
							</div>

							<div class="row justify-content-between mt-15">
								<div class="col-sm-4">
									<div class="d-flex justify-content-start flex-column flex-md-row font-size-lg">
										<div>
											<i class="text-white fab fa-critical-role" style="font-size: 50px;"></i>
										</div>
										<div class="ml-10">
											<h1 class="text-white flex-center font-size-h2">Tracked On Analytics</h1>
											<h1 class="text-white flex-center font-size-h4 font-weight-normal mt-5">Our visits show up on your website analytics and on Google Search Console. You (or your clients) can see the results of your campaigns</h1>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="d-flex justify-content-start flex-column flex-md-row font-size-lg">
										<div>
											<i class="text-white flaticon-network" style="font-size: 50px;"></i>
										</div>
										<div class="ml-10">
											<h1 class="text-white flex-center font-size-h2">Unlimited Capacity</h1>
											<h1 class="text-white flex-center font-size-h4 font-weight-normal mt-5">You can start a campaign and get traffic right away. No matter how big or small your campaigns are, we can fulfill them with no delay.</h1>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="d-flex justify-content-start flex-column flex-md-row font-size-lg">
										<div>
											<i class="text-white socicon-wechat" style="font-size: 50px;"></i>
										</div>
										<div class="ml-10">
											<h1 class="text-white flex-center font-size-h2">Support Fanatics</h1>
											<h1 class="text-white flex-center font-size-h4 font-weight-normal mt-5">Our experts are available to help you any time every day, 24/7. And our money-back guarantee makes trying SERP Empire risk-free.</h1>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<div class="mt-30">
						<h1 class="flex-center display-3" style="text-align:center;">Why Buy Website Traffic?</h1>
						<div class="mt-10" style="text-align: center;">
							<p class="font-size-h4 font-weight-normal" style="line-height:18px;">SerpClix uses real humans to search for your keywords on Google and then click on your listings, driving real</p>
							<p class="font-size-h4 font-weight-normal" style="line-height:18px;">organic traffic to your website. This increases the click-through rate (CTR) for your search engine results page </p>
							<p class="font-size-h4 font-weight-normal" style="line-height:18px;">(SERP) listing, which can be a very positive SEO ranking signal.</p>
						</div>
					</div>
					<div class="container mt-30">
						<div class="row justify-content-between">
							<div class="col-sm-6">
								<h1 class="display-4">Does CTR Affect Rankings?</h1>
								<div class="mt-10">
									<p class="font-size-h4 font-weight-normal">A few years ago Moz's Rand Fishkin ran a CTR case study which moved his site from #7 to #1 in less than 3 hours by sending clicks to his Google Search Engine Results Pages (SERPs).</p>
									<p class="font-size-h4 font-weight-normal">These were real people, making real clicks. This was the first proof that click-through rate (CTR) was a factor that could heavily move the SERPs.</p>
								</div>

								<div class="mt-10">
								<button type="button" class="btn btn-danger">Choose your plan</button>
								</div>
							</div>
							<div class="col-sm-4">
								<img src="{{asset('media/bg/5.png') }}" alt="" style="width:400px; height: 300px;">
							</div>
						</div>
					</div>
					<div class="container mt-30 justify-content-center" style="padding: 0px 100px;">
						<div class="card card-custom gutter-b draggable" tabindex="0" style="border-radius: 45px; background: #F4F5F9; box-shadow: 0px 3px 0px 2px #e2e2e2;border-top: 1px solid #e2e2e2;">
							<div class="card-body">
								<h1 class="flex-center display-3 mt-15" style="text-align:center;">What Does Google Say About CTR?</h1>
								<p class="font-size-h4 font-weight-normal mt-10" style="line-height:18px; text-align:center;">Google itself has stated the importance of CTR on multiple occasions.</p>
								<div class="flex justify-content-center mt-5" style="display: flex; align-item: center;">
									<img src="{{asset('media/bg/4.png') }}" alt="" style="width:80%; height: 400px;">	
								</div>
								<h1 class="flex-center display-3 mt-20" style="text-align:center;">How Many SEO Searchs Do I Need?</h1>
								<p class="font-size-h4 font-weight-normal mt-15" style="line-height:18px; text-align:center;">Google itself has stated the importance of CTR on multiple occasions.</p>
								<p class="font-size-h4 font-weight-normal" style="line-height:18px; text-align:center;">Monthly Searches For Target Keyword:</p>
								<p class="font-size-h3 text-danger" style="text-align:center;">226</p>	
								<div class="flex justify-content-center mt-5" style="display: flex; align-item: center;">
									<input class="form-control" type="range" style="width:60%">
								</div>
								<p class="font-size-h4 font-weight-normal" style="line-height:18px; text-align:center;">Current Ranking Position:</p>
								<p class="font-size-h3 text-danger" style="text-align:center;">5</p>	
								<div class="flex justify-content-center mt-5" style="display: flex; align-item: center;">
									<input class="form-control" type="range" style="width:60%">
								</div>
								<p class="font-size-h4 font-weight-normal" style="line-height:18px; text-align:center;">Target Ranking Position:</p>
								<p class="font-size-h3 text-danger" style="text-align:center;">1</p>	
								<div class="flex justify-content-center mt-5" style="display: flex; align-item: center;">
									<input class="form-control" type="range" style="width:60%">
								</div>
								<p class="font-size-h4 font-weight-normal mt-5" style="line-height:18px; text-align:center;">Estimated Clicks Required</p>
								<p class="font-size-h3 text-danger" style="text-align:center;">77</p>	

								
							</div>
							<div class="card-footer" style="background: #e95059; border-bottom-right-radius: 45px; border-bottom-left-radius: 45px;">
								<div classs="container" style="padding: 0px 60px;">
									<div class="row justify-content-between">
										<div class="col-sm-8">
											<p class="text-white">These numbers are merely estimates based on average click-through rates for different positions on Google. They are provided for planning purposes only and assume that the SerpClix service is complemented with a normal on-site and off-site search engine optimization approach. There are no guarantees in SEO, and you certainly won't find any here.</p>
										</div>
										<div class="col-sm-2s mt-4">
											<button type="button" class="btn btn-outline-light text-white">Start Free Trial</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="background: #2F3044;" id="pricing">
						<h1 class="text-white text-center mt-20 display-2">Pricing Plan</h1>
						<div style="display:flex; padding: 50px 105px 80px 105px; justify-content: center; border-bottom: 1px solid #e2e2e2;">
							<span class="arrowleft" id="prev"><i class="fa fas fa-angle-double-left font-size-h1"></i></span>
							<div class="thumbnailgallery">
								<div class="userprofiles clearfix d-flex">
									<div class="profile">
										<div class="my-md-n15 shadow-sm" style="border-radius: 35px; background: #434456; padding-left: 25px !important; padding-right: 25px !important;">
											<div class="pt-10 pb-10">
												<h4 class="text-white mb-5 text-center">100% AI Clicker</h4>
												<h5 class="font-size-sm text-white mb-7">How many searches/day do you need?</h5>
												<input class="form-control mb-7" type="range">
												<div style="display: flex; item-align: center; justify-content: center;">
													<span class="px-7 py-3 d-inline-flex flex-center text-center">
														<span class="pr-2 text-white opacity-70">$</span>
														<span class="pr-2 font-size-h1 font-weight-bold text-white">29</span>
														<span class="text-white opacity-70">&nbsp;&nbsp;mo</span>
													</span>
												</div>
												<br>
												<div class="text-white mb-10 d-flex flex-column">
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>25 searches /day</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>12 keywords included</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>2 pages visited</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>Up to 1mn Session Duration</span></button>
												</div>
												<div style="display: flex; align-items: center; justify-content: center;">
													<button type="button" class="btn btn-danger justify-content-center">Get Started</button>
												</div>
											</div>
										</div>
									</div>
									<div class="profile">
										<div class="my-md-n15 shadow-sm" style="border-radius: 35px; background: #434456; padding-left: 25px !important; padding-right: 25px !important;">
											<div class="pt-10 pb-10">
												<h4 class="text-white mb-5 text-center">95% AI + 5% Human Clicker</h4>
												<h5 class="font-size-sm text-white mb-7">How many searches/day do you need?</h5>
												<input class="form-control mb-7" type="range">
												<div style="display: flex; item-align: center; justify-content: center;">
													<span class="px-7 py-3 d-inline-flex flex-center text-center">
														<span class="pr-2 text-white opacity-70">$</span>
														<span class="pr-2 font-size-h1 font-weight-bold text-white">49</span>
														<span class="text-white opacity-70">&nbsp;&nbsp;mo</span>
													</span>
												</div>
												<br>
												<div class="text-white mb-10 d-flex flex-column">
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>50 searches /day</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>25 keywords included</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>2 pages visited</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>Up to 2mn Session Duration</span></button>
												</div>
												<div style="display: flex; align-items: center; justify-content: center;">
													<button type="button" class="btn btn-danger justify-content-center">Get Started</button>
												</div>
											</div>
										</div>
									</div>
									<div class="profile">
										<div class="my-md-n15 shadow-sm" style="border-radius: 35px; background: #434456; padding-left: 25px !important; padding-right: 25px !important;">
											<div class="pt-10 pb-10">
												<h4 class="text-white mb-5 text-center">100% Human Clicker</h4>
												<h5 class="font-size-sm text-white mb-7">How many searches/day do you need?</h5>
												<input class="form-control mb-7" type="range">
												<div style="display: flex; item-align: center; justify-content: center;">
													<span class="px-7 py-3 d-inline-flex flex-center text-center">
														<span class="pr-2 text-white opacity-70">$</span>
														<span class="pr-2 font-size-h1 font-weight-bold text-white">89</span>
														<span class="text-white opacity-70">&nbsp;&nbsp;mo</span>
													</span>
												</div>
												<br>
												<div class="text-white mb-10 d-flex flex-column">
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>100 searches /day</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>50 keywords included</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>2 pages visited</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>Up to 3mn Session Duration</span></button>
												</div>
												<div style="display: flex; align-items: center; justify-content: center;">
													<button type="button" class="btn btn-danger justify-content-center">Get Started</button>
												</div>
											</div>
										</div>
									</div>
									<div class="profile">
										<div class="my-md-n15 shadow-sm" style="border-radius: 35px; background: #434456; padding-left: 25px !important; padding-right: 25px !important;">
											<div class="pt-10 pb-10">
												<h4 class="text-white mb-5 text-center">95% AI + 5% Human Clicker</h4>
												<h5 class="font-size-sm text-white mb-7">How many searches/day do you need?</h5>
												<input class="form-control mb-7" type="range">
												<div style="display: flex; item-align: center; justify-content: center;">
													<span class="px-7 py-3 d-inline-flex flex-center text-center">
														<span class="pr-2 text-white opacity-70">$</span>
														<span class="pr-2 font-size-h1 font-weight-bold text-white">129</span>
														<span class="text-white opacity-70">&nbsp;&nbsp;mo</span>
													</span>
												</div>
												<br>
												<div class="text-white mb-10 d-flex flex-column">
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>150 searches /day</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>75 keywords included</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>3 pages visited</span></button>
													<button style="border-radius: 50px;padding:5px; background-color:#63616F; color:#fff;"><span>Up to 3mn Session Duration</span></button>
												</div>
												<div style="display: flex; align-items: center; justify-content: center;">
													<button type="button" class="btn btn-danger justify-content-center">Get Started</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<span class="arrowright" id="next"><i class="fa fas fa-angle-double-right font-size-h1"></i></span>
						</div>
					</div>
					<div class="container">
						<h1 class="text-center display-3 mt-20">Frequently Asked Questions.</h1>
						<div class="accordion accordion-toggle-arrow" id="accordionExample1">
							<div class="accordion accordion-solid accordion-panel accordion-svg-toggle" id="accordionExample8">
								<div class="card">
									<div class="card-header" id="headingOne8">
										<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseOne8" aria-expanded="false" style="background: #ECECEC;">
											<div class="card-label">Does boosting CTR truly work for SEO?</div>
											<span class="svg-icon">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
														<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<div id="collapseOne8" class="collapse" data-parent="#accordionExample8" style="">
										<div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingTwo8">
										<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo8" style="background: #ECECEC;">
											<div class="card-label">You can guarantee results, then?</div>
											<span class="svg-icon">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
														<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<div id="collapseTwo8" class="collapse" data-parent="#accordionExample8">
										<div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree8">
										<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree8" style="background: #ECECEC;">
											<div class="card-label">Is this risky?</div>
											<span class="svg-icon">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
														<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<div id="collapseThree8" class="collapse" data-parent="#accordionExample8">
										<div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="headingThree8">
										<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree8" style="background: #ECECEC;">
											<div class="card-label">How long does it take to see results?</div>
											<span class="svg-icon">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
														<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
										</div>
									</div>
									<div id="collapseThree8" class="collapse" data-parent="#accordionExample8">
										<div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="mt-20" style="background: #E95059; padding: 50px;">
						<div class="row justify-content-center">
							<span class="col-sm-4 text-white text-center display4-lg">Start Boosting Your Rankings Now</span>
							<button type="button" class="btn btn-secondary"><i class="fa far fa-clock"></i><span>Try For Free!</span></button>
						</div>
					</div>
					@include('layouts.footer')
					<div id="kt_scrolltop" class="scrolltop">
						<span class="svg-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
									<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</div>
				</div>
			</div>
		</div>
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<script src="{{ asset ('plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset ('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset ('js/scripts.bundle.js') }}"></script>
		<script src="{{ asset ('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="{{ asset ('js/pages/widgets.js') }}"></script>
		<script>
			$(document).ready(function() {
				var TxtType = function(el, toRotate, period) {
					this.toRotate = toRotate;
					this.el = el;
					this.loopNum = 0;
					this.period = parseInt(period, 10) || 2000;
					this.txt = '';
					this.tick();
					this.isDeleting = false;
				};

				TxtType.prototype.tick = function() {
					var i = this.loopNum % this.toRotate.length;
					var fullTxt = this.toRotate[i];

					if (this.isDeleting) {
					this.txt = fullTxt.substring(0, this.txt.length - 1);
					} else {
					this.txt = fullTxt.substring(0, this.txt.length + 1);
					}

					this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

					var that = this;
					var delta = 200 - Math.random() * 100;

					if (this.isDeleting) { delta /= 2; }

					if (!this.isDeleting && this.txt === fullTxt) {
					delta = this.period;
					this.isDeleting = true;
					} else if (this.isDeleting && this.txt === '') {
					this.isDeleting = false;
					this.loopNum++;
					delta = 500;
					}

					setTimeout(function() {
					that.tick();
					}, delta);
				};

				window.onload = function() {
					var elements = document.getElementsByClassName('typewrite');
					for (var i=0; i<elements.length; i++) {
						var toRotate = elements[i].getAttribute('data-type');
						var period = elements[i].getAttribute('data-period');
						if (toRotate) {
						new TxtType(elements[i], JSON.parse(toRotate), period);
						}
					}
					// INJECT CSS
					var css = document.createElement("style");
					css.type = "text/css";
					css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
					document.body.appendChild(css);
				};
			})
			var profileWidht = $(".profile").width();
			$('#prev').on('click', function () {
				var last = $('.profile').last().css({opacity: '0', width: '0px'});
				last.prependTo('.userprofiles');
				last.animate({opacity: '1', width: (profileWidht + 1 + 'px')});
			});
			$('#next').on('click', function () {
				var first = $('.profile').first();
				first.animate({opacity: '0', width: '0px'}, function() {
					first.appendTo('.userprofiles').css({opacity: '1', width: profileWidht + 'px'});
				});
			});
		</script>
	</body>
	<!--end::Body-->
</html>