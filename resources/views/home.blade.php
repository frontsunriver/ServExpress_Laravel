@extends('layouts.layout')
@section('content')
<div class="d-flex flex-column flex-root">
	<div class="d-flex flex-row flex-column-fluid page">
		<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
			@include('layouts.header')
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
									<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
									<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Dashboard</a>
									<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
									<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Latest Updated</a>
								</div>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Heading-->
						</div>
						<!--end::Info-->
						<!--begin::Toolbar-->
						<div class="d-flex align-items-center">
							<!--begin::Button-->
							<a href="#" class="btn btn-transparent-white font-weight-bold py-3 px-6 mr-2">Reports</a>
							<!--end::Button-->
							<!--begin::Dropdown-->
							<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="top">
								<a href="#" class="btn btn-white font-weight-bold py-3 px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Actions</a>
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
						<!--end::Toolbar-->
					</div>
				</div>
				<div class="d-flex flex-column-fluid">
					<div class="container">
						<div class="row">
							<div class="col-xl-12">
								<!--begin::Tiles Widget 1-->
								<div class="card card-custom gutter-b card-stretch">
									<!--begin::Header-->
									<div class="card-header border-0 pt-5">
										<div class="card-title">
											<div class="card-label">
												<div class="font-weight-bolder">Weekly Sales Stats</div>
												<div class="font-size-sm text-muted mt-2">890,344 Sales</div>
											</div>
										</div>
										<div class="card-toolbar">
											<div class="dropdown dropdown-inline">
												<a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="ki ki-bold-more-hor"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
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
										</div>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body d-flex flex-column px-0">
										<!--begin::Chart-->
										<div id="kt_tiles_widget_1_chart" data-color="danger" style="height: 125px"></div>
										<!--end::Chart-->
										<!--begin::Items-->
										<div class="flex-grow-1 card-spacer-x">
											<!--begin::Item-->
											<div class="d-flex align-items-center justify-content-between mb-10">
												<div class="d-flex align-items-center mr-2">
													<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
														<div class="symbol-label">
															<img src="assets/media/svg/misc/006-plurk.svg" alt="" class="h-50" />
														</div>
													</div>
													<div>
														<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Authors</a>
														<div class="font-size-sm text-muted font-weight-bold mt-1">Ricky Hunt, Sandra Trepp</div>
													</div>
												</div>
												<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+105$</div>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center justify-content-between mb-10">
												<div class="d-flex align-items-center mr-2">
													<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
														<div class="symbol-label">
															<img src="assets/media/svg/misc/015-telegram.svg" alt="" class="h-50" />
														</div>
													</div>
													<div>
														<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Bestsellers</a>
														<div class="font-size-sm text-muted font-weight-bold mt-1">Pitstop Email Marketing</div>
													</div>
												</div>
												<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+60$</div>
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center justify-content-between">
												<div class="d-flex align-items-center mr-2">
													<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
														<div class="symbol-label">
															<img src="assets/media/svg/misc/003-puzzle.svg" alt="" class="h-50" />
														</div>
													</div>
													<div>
														<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Engagement</a>
														<div class="font-size-sm text-muted font-weight-bold mt-1">KT.com solution provider</div>
													</div>
												</div>
												<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+75$</div>
											</div>
											<!--end::Item-->
										</div>
										<!--end::Items-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tiles Widget 1-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
				<!--begin::Container-->
				<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
					<!--begin::Copyright-->
					<div class="text-dark order-2 order-md-1">
						<span class="text-muted font-weight-bold mr-2">2021©</span>
						<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">Keenthemes</a>
					</div>
					<!--end::Copyright-->
					<!--begin::Nav-->
					<div class="nav nav-dark order-1 order-md-2">
						<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">About</a>
						<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
						<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
					</div>
					<!--end::Nav-->
				</div>
				<!--end::Container-->
			</div>
		</div>
	</div>
	
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

@endsection