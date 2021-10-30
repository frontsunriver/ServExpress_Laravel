<div id="kt_header" class="header header-fixed" style="background-color: #e95059;">
    <!--begin::Container-->
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
                            <a href="{{ route('home')}}">
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
                            <a href="javascript:#">
                                <span class="text-white menu-text">Membership</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu menu-item-rel pr-5 pl-5">
                            <a href="javascript:#">
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
            <div class="dropdown mr-5">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
                        <img class="h-20px w-20px rounded-sm" src="{{ asset('media/svg/flags/226-united-states.svg') }}" alt="" />
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="navi navi-hover py-4">
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('media/svg/flags/226-united-states.svg') }}" alt="" />
                                </span>
                                <span class="navi-text">English</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item active">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('media/svg/flags/128-spain.svg') }}" alt="" />
                                </span>
                                <span class="navi-text">Spanish</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('media/svg/flags/162-germany.svg') }}" alt="" />
                                </span>
                                <span class="navi-text">German</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('media/svg/flags/063-japan.svg') }}" alt="" />
                                </span>
                                <span class="navi-text">Japanese</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="navi-item">
                            <a href="#" class="navi-link">
                                <span class="symbol symbol-20 mr-3">
                                    <img src="{{ asset('media/svg/flags/195-france.svg') }}" alt="" />
                                </span>
                                <span class="navi-text">French</span>
                            </a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <div class="dropdown mr-5">
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <button type="button" class="btn btn-outline-light mr-5"><span class="text-white">Free Trial</span></button>
                    @if(!Auth::check())
                        <a href="{{ route('login') }}" class="btn btn-light"><span class="text-danger">Log in</span></a>
                    @endif
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
        
            </div>
        </div>
    </div>
</div>