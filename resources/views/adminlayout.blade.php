<!DOCTYPE html>
<html lang=en>

<head>
    <base href>
    <meta charset=utf-8 />
    <title>@lang('lang.admin')</title>
    <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name=csrf-token content="{{ csrf_token() }}">
    <link rel=stylesheet href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('backend/css/themes/layout/header/base/light.css') }}" rel=stylesheet type=text/css />
    <link href="{{ asset('backend/css/themes/layout/header/menu/light.css') }}" rel=stylesheet type=text/css />
    <link href="{{ asset('backend/css/themes/layout/brand/dark.css') }}" rel=stylesheet type=text/css />
    <link href="{{ asset('backend/css/themes/layout/aside/dark.css') }}" rel=stylesheet type=text/css />
    <link href="{{ asset('backend/plugins/global/plugins.bundle.css') }}" rel=stylesheet type=text/css />
    <link href="{{ asset('backend/css/style.bundle.css') }}" rel=stylesheet type=text/css />
    <link href="{{ asset('backend/plugins/custom/datatables/datatables.bundle.css') }}" rel=stylesheet type=text/css />
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }}" />
</head>

<body id=kt_body
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <div id=kt_header_mobile class="header-mobile align-items-center header-mobile-fixed">
        <a href="{{ URL::to('/admin') }}" class=header__logo>
            <img style=max-height:40px alt=Logo
                src="{{ asset('frontend/images/logo.png') }}" />
        </a>
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left" id=kt_aside_mobile_toggle>
                <span></span>
            </button>
            <button class="btn btn-hover-text-primary p-0 ml-2" id=kt_header_mobile_topbar_toggle>
                <span class="svg-icon svg-icon-xl">
                    <svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px
                        height=24px viewBox="0 0 24 24" version=1.1>
                        <g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill=#000000 fill-rule=nonzero opacity=0.3 />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill=#000000 fill-rule=nonzero />
                        </g>
                    </svg>
                </span>
            </button>
        </div>
    </div>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id=kt_aside>
                <div class="brand flex-column-auto" id=kt_brand>
                    <a href="{{ URL::to('/admin') }}" class=brand-logo>
                        <img style=max-height:40px alt=Logo
                            src="{{ asset('frontend/images/logo.png') }}" />
                    </a>
                    <button class="brand-toggle btn btn-sm px-0" id=kt_aside_toggle>
                        <span class="svg-icon svg-icon svg-icon-xl">
                            <svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px
                                height=24px viewBox="0 0 24 24" version=1.1>
                                <g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill=#000000 fill-rule=nonzero
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill=#000000 fill-rule=nonzero opacity=0.3
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="aside-menu-wrapper flex-column-fluid" id=kt_aside_menu_wrapper>
                    <div id=kt_aside_menu class="aside-menu my-4" data-menu-vertical=1 data-menu-scroll=1
                        data-menu-dropdown-timeout=500>
                        <ul class=menu-nav>
                            <li class=menu-section>
                                <h4 class=menu-text>@lang('lang.manager')</h4>
                                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                            </li>
                            <li class=" menu-item menu-item-active" aria-haspopup=true>
                                <a id=all_statistical class=menu-link>
                                    <span class="svg-icon menu-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <rect fill="#000000" opacity="0.3" x="7" y="4" width="3" height="13"
                                                    rx="1.5" />
                                                <rect fill="#000000" opacity="0.3" x="12" y="9" width="3" height="8"
                                                    rx="1.5" />
                                                <path
                                                    d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                                <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6"
                                                    rx="1.5" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=menu-text>@lang('lang.statistical')</span>
                                </a>
                            </li>
                            <li class=" menu-item" aria-haspopup=true>
                                <a id=all_customer class=menu-link>
                                    <span class="svg-icon menu-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path
                                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path
                                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                    fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=menu-text>@lang('lang.customer')</span>
                                </a>
                            </li>
                            <li class=menu-item aria-haspopup=true>
                                <a id=all_without class=menu-link>
                                    <span class="svg-icon menu-icon">
                                        <svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink
                                            width=24px height=24px viewBox="0 0 24 24" version=1.1>
                                            <g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
                                                <rect x=0 y=0 width=24 height=24 />
                                                <path
                                                    d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                    fill=#000000 opacity=0.3 />
                                                <path
                                                    d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                    fill=#000000 />
                                                <rect fill=#000000 opacity=0.3 x=10 y=9 width=7 height=2 rx=1 />
                                                <rect fill=#000000 opacity=0.3 x=7 y=9 width=2 height=2 rx=1 />
                                                <rect fill=#000000 opacity=0.3 x=7 y=13 width=2 height=2 rx=1 />
                                                <rect fill=#000000 opacity=0.3 x=10 y=13 width=7 height=2 rx=1 />
                                                <rect fill=#000000 opacity=0.3 x=7 y=17 width=2 height=2 rx=1 />
                                                <rect fill=#000000 opacity=0.3 x=10 y=17 width=7 height=2 rx=1 />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=menu-text>@lang('lang.without')</span>
                                </a>
                            </li>
                            <li class=menu-item aria-haspopup=true>
                                <a id=all_recharge class=menu-link>
                                    <span class="svg-icon menu-icon">
                                        <svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink
                                            width=24px height=24px viewBox="0 0 24 24" version=1.1>
                                            <g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
                                                <rect x=0 y=0 width=24 height=24 />
                                                <path
                                                    d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                    fill=#000000 opacity=0.3 />
                                                <path
                                                    d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                    fill=#000000 />
                                                <rect fill=#000000 opacity=0.3 x=10 y=9 width=7 height=2 rx=1 />
                                                <rect fill=#000000 opacity=0.3 x=7 y=9 width=2 height=2 rx=1 />
                                                <rect fill=#000000 opacity=0.3 x=7 y=13 width=2 height=2 rx=1 />
                                                <rect fill=#000000 opacity=0.3 x=10 y=13 width=7 height=2 rx=1 />
                                                <rect fill=#000000 opacity=0.3 x=7 y=17 width=2 height=2 rx=1 />
                                                <rect fill=#000000 opacity=0.3 x=10 y=17 width=7 height=2 rx=1 />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=menu-text>@lang('lang.deposit')</span>
                                </a>
                            </li>
                            <li class=menu-item aria-haspopup=true>
                                <a id=all_buypackage class=menu-link>
                                    <span class="svg-icon menu-icon">
                                        <svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink
                                            width=24px height=24px viewBox="0 0 24 24" version=1.1>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"/>
                                                <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=menu-text>@lang('lang.buypackage')</span>
                                </a>
                            </li>
                            <li class=menu-section>
                                <h4 class=menu-text>@lang('lang.setting')</h4>
                                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                            </li>
                            <li class=" menu-item" aria-haspopup=true>
                                <a id=setting_wallet class=menu-link>
                                    <span class="svg-icon menu-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <circle fill="#000000" opacity="0.3" cx="20.5" cy="12.5" r="1.5"/>
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 6.500000) rotate(-15.000000) translate(-12.000000, -6.500000) " x="3" y="3" width="18" height="7" rx="1"/>
                                                <path d="M22,9.33681558 C21.5453723,9.12084552 21.0367986,9 20.5,9 C18.5670034,9 17,10.5670034 17,12.5 C17,14.4329966 18.5670034,16 20.5,16 C21.0367986,16 21.5453723,15.8791545 22,15.6631844 L22,18 C22,19.1045695 21.1045695,20 20,20 L4,20 C2.8954305,20 2,19.1045695 2,18 L2,6 C2,4.8954305 2.8954305,4 4,4 L20,4 C21.1045695,4 22,4.8954305 22,6 L22,9.33681558 Z" fill="#000000"/>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class=menu-text>@lang('lang.wallet')</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-row-fluid wrapper" id=kt_wrapper>
                <div id=kt_header class="header header-fixed">
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <div class="header-menu-wrapper header-menu-wrapper-left" id=kt_header_menu_wrapper>
                        </div>
                        <div class=topbar>
                            <div class=dropdown>
                                <div class=topbar-item data-toggle=dropdown data-offset=10px,0px>
                                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                        <?php
                                        $language = session()->get('language');
                                        if ($language == 'vi') {
                                            ?>
                                        <img class="h-20px w-20px rounded-sm"
                                            src="{{ asset('backend/media/svg/flags/220-vietnam.svg') }}" />
                                        <?php
                                        }
                                        else{
                                            ?>
                                        <img class="h-20px w-20px rounded-sm"
                                            src="{{ asset('backend/media/svg/flags/226-united-states.svg') }}" />
                                        <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                                <div
                                    class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                                    <ul class="navi navi-hover py-4">
                                        <li class=navi-item>
                                            <a href data-lang=vi class="changelanguage navi-link">
                                                <span class="symbol symbol-20 mr-3">
                                                    <img src="{{ asset('backend/media/svg/flags/220-vietnam.svg') }}"
                                                        alt />
                                                </span>
                                                <span class=navi-text>@lang('lang.vietnam')</span>
                                            </a>
                                        </li>
                                        <li class="navi-item active">
                                            <a href data-lang=en class="changelanguage navi-link">
                                                <span class="symbol symbol-20 mr-3">
                                                    <img src="{{ asset('backend/media/svg/flags/226-united-states.svg') }}"
                                                        alt />
                                                </span>
                                                <span class=navi-text>@lang('lang.english')</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=topbar-item>
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                                    id=kt_quick_user_toggle>
                                    <span
                                        class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">@lang('lang.hello'),</span>
                                    <span
                                        class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                                        @php
                                        $admin_name = Auth::user()->admin_name;
                                        if ($admin_name) {
                                        echo $admin_name;
                                        }
                                        @endphp
                                    </span>
                                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                                        @php
                                        $admin_image = Auth::user()->admin_image;
                                        if ($admin_image) {
                                        echo '<span class="symbol-label font-size-h5 font-weight-bold"
                                            style="background-image:url(uploads/avatar/' . $admin_image . ')"></span>';
                                        } else {
                                        echo '<span class="symbol-label font-size-h5 font-weight-bold"
                                            style=background-image:url(backend/media/users/blank.png)></span>';
                                        }
                                        @endphp
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content d-flex flex-column flex-column-fluid" id=kt_content>
                    <div class="d-flex flex-column-fluid">
                        <div class=container id=container>
                            @yield('admincontent')
                        </div>
                    </div>
                </div>
                <div class="footer bg-white py-4 d-flex flex-lg-column" id=kt_footer>
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2022©</span>
                            <a href=# class="text-dark-75 text-hover-primary">..</a>
                        </div>
                        <div class="nav nav-dark"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=kt_quick_user class="offcanvas offcanvas-right p-10">
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">@lang('lang.userinformation')
            </h3>
            <a href=# class="btn btn-xs btn-icon btn-light btn-hover-primary" id=kt_quick_user_close>
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <div class="offcanvas-content pr-5 mr-n5">
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                    @php
                    if ($admin_image) {
                    echo '<span class="symbol-label font-size-h5 font-weight-bold"
                        style="background-image:url(uploads/avatar/' . $admin_image . ')"></span>';
                    } else {
                    echo '<span class="symbol-label font-size-h5 font-weight-bold"
                        style=background-image:url(backend/media/users/blank.png)></span>';
                    }
                    @endphp
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <span class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                        @php
                        $admin_name = Auth::user()->admin_name;
                        if ($admin_name) {
                        echo $admin_name;
                        }
                        @endphp
                    </span>
                    <div class="text-muted mt-1">
                        @lang('lang.boss')
                    </div>
                    <div class="navi mt-2">
                        <span class=navi-item>
                            <span class="navi-link p-0 pb-2">
                                <span class="navi-icon mr-1">
                                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                                        <svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink
                                            width=24px height=24px viewBox="0 0 24 24" version=1.1>
                                            <g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
                                                <rect x=0 y=0 width=24 height=24 />
                                                <path
                                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                    fill=#000000 />
                                                <circle fill=#000000 opacity=0.3 cx=19.5 cy=17.5 r=2.5 />
                                            </g>
                                        </svg>
                                    </span>
                                </span>
                                <span class="navi-text text-muted text-hover-primary">
                                    @php
                                    $admin_email = Auth::user()->admin_email;
                                    if ($admin_email) {
                                    echo $admin_email;
                                    }
                                    @endphp
                                </span>
                            </span>
                        </span>
                        <a href="{{ URL::to('/logout-admin') }}"
                            class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">@lang('lang.logout')</a>
                    </div>
                </div>
            </div>
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <div class="navi navi-spacer-x-0 p-0">
                <a href=# class=navi-item id=profile>
                    <div class=navi-link>
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class=symbol-label>
                                <span class="svg-icon svg-icon-md svg-icon-success">
                                    <svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink
                                        width=24px height=24px viewBox="0 0 24 24" version=1.1>
                                        <g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
                                            <rect x=0 y=0 width=24 height=24 />
                                            <path
                                                d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                fill=#000000 />
                                            <circle fill=#000000 opacity=0.3 cx=18.5 cy=5.5 r=2.5 />
                                        </g>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class=navi-text>
                            <div class=font-weight-bold>@lang('lang.editprofile')</div>
                            <div class=text-muted>@lang('lang.edityourpersonal')</div>
                        </div>
                    </div>
                </a>
                <a href=# class=navi-item id=change_pass>
                    <div class=navi-link>
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class=symbol-label>
                                <span class="svg-icon svg-icon-md svg-icon-warning">
                                    <svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink
                                        width=24px height=24px viewBox="0 0 24 24" version=1.1>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z M14.1654881,7.35483745 L9.61055177,10.3622525 C9.47921741,10.4489666 9.39637436,10.592455 9.38694497,10.7495509 L9.05991526,16.197949 C9.04337012,16.4735952 9.25341309,16.7104632 9.52905936,16.7270083 C9.63705011,16.7334903 9.74423017,16.7047714 9.83451193,16.6451626 L14.3894482,13.6377475 C14.5207826,13.5510334 14.6036256,13.407545 14.613055,13.2504491 L14.9400847,7.80205104 C14.9566299,7.52640477 14.7465869,7.28953682 14.4709406,7.27299168 C14.3629499,7.26650974 14.2557698,7.29522855 14.1654881,7.35483745 Z" fill="#000000"/>
                                        </g>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class=navi-text>
                            <div class=font-weight-bold>@lang('lang.changepass')</div>
                            <div class=text-muted>@lang('lang.changeyourpass')</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id=kt_scrolltop class=scrolltop>
        <span class=svg-icon>
            <svg xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink width=24px height=24px
                viewBox="0 0 24 24" version=1.1>
                <g stroke=none stroke-width=1 fill=none fill-rule=evenodd>
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill=#000000 opacity=0.3 x=11 y=10 width=2 height=10 rx=1 />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill=#000000 fill-rule=nonzero />
                </g>
            </svg>
        </span>
    </div>
    <script>
        var KTAppSettings={breakpoints:{sm:576,md:768,lg:992,xl:1200,xxl:1400},colors:{theme:{base:{white:"#ffffff",primary:"#3699FF",secondary:"#E5EAEE",success:"#1BC5BD",info:"#8950FC",warning:"#FFA800",danger:"#F64E60",light:"#E4E6EF",dark:"#181C32"},light:{white:"#ffffff",primary:"#E1F0FF",secondary:"#EBEDF3",success:"#C9F7F5",info:"#EEE5FF",warning:"#FFF4DE",danger:"#FFE2E5",light:"#F3F6F9",dark:"#D6D6E0"},inverse:{white:"#ffffff",primary:"#ffffff",secondary:"#3F4254",success:"#ffffff",info:"#ffffff",warning:"#ffffff",danger:"#ffffff",light:"#464E5F",dark:"#ffffff"}},gray:{"gray-100":"#F3F6F9","gray-200":"#EBEDF3","gray-300":"#E4E6EF","gray-400":"#D1D3E0","gray-500":"#B5B5C3","gray-600":"#7E8299","gray-700":"#5E6278","gray-800":"#3F4254","gray-900":"#181C32"}},"font-family":"Poppins"};
    </script>
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src=//cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('backend/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('backend/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('backend/js/script.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</body>

</html>
