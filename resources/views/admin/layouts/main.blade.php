<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>

<head>
    <title>@yield('title')</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Dexignlabs">
    <meta name="robots" content="">

    <meta name="keywords"
          content="admin dashboard, admin template, analytics, bootstrap, bootstrap 5 admin template, finance admin, admin, modern, responsive admin dashboard, sales dashboard, sass, ui kit, web app, bootstrap5, admin panel, Crypto Trading, Cryptocurrency, Trading Platform, Financial Insights, Efficiency, Data Visualization, User-Friendly, User Interface, Investment, Financial Management, Trading Tools, Performance Metrics, Real-Time Data, Portfolio Optimization, bitcoin, share market">
    <meta name="description"
          content="Unlock the full potential of data through the FinLab Crypto Trading Admin Dashboard Template. Seamlessly optimize your cryptocurrency trading activities with this elegantly designed and user-friendly dashboard, meticulously crafted to elevate both your financial insights and operational efficiency.">
    <meta property="og:title" content="FinLab Crypto Trading Admin Dashboard Template | Dexignlabs">
    <meta property="og:description"
          content="Unlock the full potential of data through the FinLab Crypto Trading Admin Dashboard Template. Seamlessly optimize your cryptocurrency trading activities with this elegantly designed and user-friendly dashboard, meticulously crafted to elevate both your financial insights and operational efficiency.">
    <meta property="og:image" content="../../social-image.html">
    <meta name="format-detection" content="telephone=no">
    <meta name="twitter:title" content="FinLab CakePHP Crypto Trading Admin Dashboard Template | Dexignlabs">
    <meta name="twitter:description"
          content="Unlock the full potential of data through the FinLab Crypto Trading Admin Dashboard Template. Seamlessly optimize your cryptocurrency trading activities with this elegantly designed and user-friendly dashboard, meticulously crafted to elevate both your financial insights and operational efficiency.">
    <meta name="twitter:image" content="../../social-image.html">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('icons/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/wow-master/css/libs/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select-country/css/bootstrap-select-country.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datepicker/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/swiper/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/toastr/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free-6.6.0-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/nestable2/css/jquery.nestable.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_monaco.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_image.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/monaco-editor-0.51.0/package/min/vs/editor/editor.main.css') }}">
    @yield('css')
</head>

<body>



<!--**********************************
Main wrapper start
***********************************-->

<div id="main-wrapper" class="wallet-open show">

    @include('admin.partials.nav-header')
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->
    @include('admin.partials.chatbox')
    <!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->

    @include('admin.partials.header')

    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->

    @include('admin.partials.sidebar')
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
    Content body start
***********************************-->

    <div class="content-body default-height">

        @yield('content')

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel-1"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel-1">Contact</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <label class="form-label d-block mb-2">Enter Name</label>
                        <input type="text" class="form-control w-100 mb-3" placeholder="Name">

                        <label class="form-label d-block mb-2">Enter Position</label>
                        <input type="text" class="form-control w-100" placeholder="Position">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal-->

        <div class="modal fade" id="chat_model" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <label class="form-label d-block">Enter Name</label>
                        <input type="text" class="form-control w-100" placeholder="Username">

                        <label class="form-label d-block mt-3">Enter Position</label>
                        <input type="text" class="form-control w-100" placeholder="Username">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--**********************************
    Content body end
***********************************-->

    <!--**********************************
    Footer start
***********************************-->

    @include('admin.partials.footer')

    <!--**********************************
        Footer end
    ***********************************-->
</div>
<div class="sidebar-right">
    <div class="bg-overlay"></div>
    <a style="display: flex; align-items: center; justify-content: center;" class="sidebar-right-trigger wave-effect wave-effect-x" data-bs-toggle="tooltip" data-placement="right"
       data-original-title="Change Layout" href="javascript:void(0);"><span><i class="fa fa-cog fa-spin"></i></span></a><a
        class="sidebar-close-trigger" href="javascript:void(0);"><span><i class="la-times las"></i></span></a>
    <div class="sidebar-right-inner"><h4>Pick your style<a href="javascript:void(0);" onclick="deleteAllCookie()"
                                                           class="btn btn-primary btn-sm pull-right">Delete All
                Cookie</a></h4>
        <div class="card-tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tab1" data-bs-toggle="tab"
                                                            aria-selected="true" role="tab">Theme</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tab2" data-bs-toggle="tab"
                                                            aria-selected="false" tabindex="-1" role="tab">Header</a>
                </li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tab3" data-bs-toggle="tab"
                                                            aria-selected="false" tabindex="-1" role="tab">Content</a>
                </li>
            </ul>
        </div>
        <div class="tab-content tab-content-default tabcontent-border">
            <div class="fade tab-pane active show" id="tab1" role="tabpanel">
                <div class="admin-settings">
                    <div class="row">
                        <div class="col-sm-12"><p>Background</p>
                            <div class="dropdown bootstrap-select default-select wide form-control dropup"><select
                                    class="default-select wide form-control" id="theme_version" name="theme_version">
                                    <option value="disabled selected hidden">Choose Mode</option>
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                                <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-2"
                                        aria-haspopup="listbox" aria-expanded="false" title="Light"
                                        data-id="theme_version">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Light</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu "
                                     style="max-height: 201.133px; overflow: hidden; min-height: 0px;">
                                    <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"
                                         aria-activedescendant="bs-select-2-1"
                                         style="max-height: 185.133px; overflow-y: auto; min-height: 0px;">
                                        <ul class="dropdown-menu inner show" role="presentation"
                                            style="margin-top: 0px; margin-bottom: 0px;">
                                            <li><a role="option" class="dropdown-item" id="bs-select-2-0"
                                                   tabindex="0"><span class="text">Choose Mode</span></a></li>
                                            <li class="selected active"><a role="option"
                                                                           class="dropdown-item active selected"
                                                                           id="bs-select-2-1" tabindex="0"
                                                                           aria-setsize="3" aria-posinset="2"
                                                                           aria-selected="true"><span
                                                        class="text">Light</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-2-2"
                                                   tabindex="0"><span class="text">Dark</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6"><p>Primary Color</p>
                            <div><span data-placement="top" data-bs-toggle="tooltip" title="Color 1"><input
                                        class="chk-col-primary filled-in" id="primary_color_1" name="primary_bg"
                                        type="radio" value="color_1"><label for="primary_color_1"
                                                                            class="bg-label-pattern"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_2" name="primary_bg"
                                        type="radio" value="color_2"><label
                                        for="primary_color_2"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_3" name="primary_bg"
                                        type="radio" value="color_3"><label
                                        for="primary_color_3"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_4" name="primary_bg"
                                        type="radio" value="color_4"><label
                                        for="primary_color_4"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_5" name="primary_bg"
                                        type="radio" value="color_5"><label
                                        for="primary_color_5"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_6" name="primary_bg"
                                        type="radio" value="color_6"><label
                                        for="primary_color_6"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_7" name="primary_bg"
                                        type="radio" value="color_7"><label
                                        for="primary_color_7"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_9" name="primary_bg"
                                        type="radio" value="color_9"><label
                                        for="primary_color_9"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_10" name="primary_bg"
                                        type="radio" value="color_10"><label
                                        for="primary_color_10"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_11" name="primary_bg"
                                        type="radio" value="color_11"><label
                                        for="primary_color_11"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_12" name="primary_bg"
                                        type="radio" value="color_12"><label
                                        for="primary_color_12"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_13" name="primary_bg"
                                        type="radio" value="color_13"><label
                                        for="primary_color_13"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_14" name="primary_bg"
                                        type="radio" value="color_14"><label
                                        for="primary_color_14"></label></span><span><input
                                        class="chk-col-primary filled-in" id="primary_color_15" name="primary_bg"
                                        type="radio" value="color_15"><label for="primary_color_15"></label></span>
                            </div>
                        </div>
                        <div class="col-sm-6"><p>Navigation Header</p>
                            <div><span><input class="chk-col-primary filled-in" id="nav_header_color_1"
                                              name="navigation_header" type="radio" value="color_1"><label
                                        for="nav_header_color_1" class="bg-label-pattern"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_2"
                                        name="navigation_header" type="radio" value="color_2"><label
                                        for="nav_header_color_2"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_3"
                                        name="navigation_header" type="radio" value="color_3"><label
                                        for="nav_header_color_3"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_4"
                                        name="navigation_header" type="radio" value="color_4"><label
                                        for="nav_header_color_4"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_5"
                                        name="navigation_header" type="radio" value="color_5"><label
                                        for="nav_header_color_5"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_6"
                                        name="navigation_header" type="radio" value="color_6"><label
                                        for="nav_header_color_6"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_7"
                                        name="navigation_header" type="radio" value="color_7"><label
                                        for="nav_header_color_7"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_8"
                                        name="navigation_header" type="radio" value="color_8"><label
                                        for="nav_header_color_8" class="border"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_9"
                                        name="navigation_header" type="radio" value="color_9"><label
                                        for="nav_header_color_9"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_10"
                                        name="navigation_header" type="radio" value="color_10"><label
                                        for="nav_header_color_10"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_11"
                                        name="navigation_header" type="radio" value="color_11"><label
                                        for="nav_header_color_11"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_12"
                                        name="navigation_header" type="radio" value="color_12"><label
                                        for="nav_header_color_12"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_13"
                                        name="navigation_header" type="radio" value="color_13"><label
                                        for="nav_header_color_13"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_14"
                                        name="navigation_header" type="radio" value="color_14"><label
                                        for="nav_header_color_14"></label></span><span><input
                                        class="chk-col-primary filled-in" id="nav_header_color_15"
                                        name="navigation_header" type="radio" value="color_15"><label
                                        for="nav_header_color_15"></label></span></div>
                        </div>
                        <div class="col-sm-6"><p>Header</p>
                            <div><span><input class="chk-col-primary filled-in" id="header_color_1" name="header_bg"
                                              type="radio" value="color_1"><label for="header_color_1"
                                                                                  class="bg-label-pattern"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_2" name="header_bg"
                                        type="radio" value="color_2"><label
                                        for="header_color_2"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_3" name="header_bg"
                                        type="radio" value="color_3"><label
                                        for="header_color_3"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_4" name="header_bg"
                                        type="radio" value="color_4"><label
                                        for="header_color_4"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_5" name="header_bg"
                                        type="radio" value="color_5"><label
                                        for="header_color_5"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_6" name="header_bg"
                                        type="radio" value="color_6"><label
                                        for="header_color_6"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_7" name="header_bg"
                                        type="radio" value="color_7"><label
                                        for="header_color_7"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_8" name="header_bg"
                                        type="radio" value="color_8"><label for="header_color_8" class="border"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_9" name="header_bg"
                                        type="radio" value="color_9"><label
                                        for="header_color_9"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_10" name="header_bg"
                                        type="radio" value="color_10"><label for="header_color_10"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_11" name="header_bg"
                                        type="radio" value="color_11"><label for="header_color_11"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_12" name="header_bg"
                                        type="radio" value="color_12"><label for="header_color_12"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_13" name="header_bg"
                                        type="radio" value="color_13"><label for="header_color_13"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_14" name="header_bg"
                                        type="radio" value="color_14"><label for="header_color_14"></label></span><span><input
                                        class="chk-col-primary filled-in" id="header_color_15" name="header_bg"
                                        type="radio" value="color_15"><label for="header_color_15"></label></span></div>
                        </div>
                        <div class="col-sm-6"><p>Sidebar</p>
                            <div><span><input class="chk-col-primary filled-in" id="sidebar_color_1" name="sidebar_bg"
                                              type="radio" value="color_1"><label for="sidebar_color_1"
                                                                                  class="bg-label-pattern"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_2" name="sidebar_bg"
                                        type="radio" value="color_2"><label
                                        for="sidebar_color_2"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_3" name="sidebar_bg"
                                        type="radio" value="color_3"><label
                                        for="sidebar_color_3"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_4" name="sidebar_bg"
                                        type="radio" value="color_4"><label
                                        for="sidebar_color_4"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_5" name="sidebar_bg"
                                        type="radio" value="color_5"><label
                                        for="sidebar_color_5"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_6" name="sidebar_bg"
                                        type="radio" value="color_6"><label
                                        for="sidebar_color_6"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_7" name="sidebar_bg"
                                        type="radio" value="color_7"><label
                                        for="sidebar_color_7"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_8" name="sidebar_bg"
                                        type="radio" value="color_8"><label for="sidebar_color_8"
                                                                            class="border"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_9" name="sidebar_bg"
                                        type="radio" value="color_9"><label
                                        for="sidebar_color_9"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_10" name="sidebar_bg"
                                        type="radio" value="color_10"><label
                                        for="sidebar_color_10"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_11" name="sidebar_bg"
                                        type="radio" value="color_11"><label
                                        for="sidebar_color_11"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_12" name="sidebar_bg"
                                        type="radio" value="color_12"><label
                                        for="sidebar_color_12"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_13" name="sidebar_bg"
                                        type="radio" value="color_13"><label
                                        for="sidebar_color_13"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_14" name="sidebar_bg"
                                        type="radio" value="color_14"><label
                                        for="sidebar_color_14"></label></span><span><input
                                        class="chk-col-primary filled-in" id="sidebar_color_15" name="sidebar_bg"
                                        type="radio" value="color_15"><label for="sidebar_color_15"></label></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fade tab-pane" id="tab2" role="tabpanel">
                <div class="admin-settings">
                    <div class="row">
                        <div class="col-sm-6"><p>Layout</p>
                            <div class="dropdown bootstrap-select default-select wide form-control"><select
                                    class="default-select wide form-control" id="layout" name="layout">
                                    <option value="disabled selected hidden">Choose Layout</option>
                                    <option value="vertical">Vertical</option>
                                    <option value="horizontal">Horizontal</option>
                                </select>
                                <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-3"
                                        aria-haspopup="listbox" aria-expanded="false" title="Choose Layout"
                                        data-id="layout">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Choose Layout</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu "
                                     style="max-height: 4097.93px; overflow: hidden; min-height: 0px;">
                                    <div class="inner show" role="listbox" id="bs-select-3" tabindex="-1"
                                         aria-activedescendant="bs-select-3-0"
                                         style="max-height: 4081.93px; overflow-y: auto; min-height: 0px;">
                                        <ul class="dropdown-menu inner show" role="presentation"
                                            style="margin-top: 0px; margin-bottom: 0px;">
                                            <li class="selected active"><a role="option"
                                                                           class="dropdown-item active selected"
                                                                           id="bs-select-3-0" tabindex="0"
                                                                           aria-setsize="3" aria-posinset="1"
                                                                           aria-selected="true"><span class="text">Choose Layout</span></a>
                                            </li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-3-1"
                                                   tabindex="0"><span class="text">Vertical</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-3-2"
                                                   tabindex="0"><span class="text">Horizontal</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6"><p>Header position</p>
                            <div class="dropdown bootstrap-select default-select wide form-control"><select
                                    class="default-select wide form-control" id="header_position"
                                    name="header_position">
                                    <option value="disabled selected hidden">Choose Header Positon</option>
                                    <option value="static">Static</option>
                                    <option value="fixed">Fixed</option>
                                </select>
                                <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-4"
                                        aria-haspopup="listbox" aria-expanded="false" title="Choose Header Positon"
                                        data-id="header_position">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Choose Header Positon</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu "
                                     style="max-height: 4097.93px; overflow: hidden; min-height: 0px;">
                                    <div class="inner show" role="listbox" id="bs-select-4" tabindex="-1"
                                         aria-activedescendant="bs-select-4-0"
                                         style="max-height: 4081.93px; overflow-y: auto; min-height: 0px;">
                                        <ul class="dropdown-menu inner show" role="presentation"
                                            style="margin-top: 0px; margin-bottom: 0px;">
                                            <li class="selected active"><a role="option"
                                                                           class="dropdown-item active selected"
                                                                           id="bs-select-4-0" tabindex="0"
                                                                           aria-setsize="3" aria-posinset="1"
                                                                           aria-selected="true"><span class="text">Choose Header Positon</span></a>
                                            </li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-4-1"
                                                   tabindex="0"><span class="text">Static</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-4-2"
                                                   tabindex="0"><span class="text">Fixed</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6"><p>Sidebar</p>
                            <div class="dropdown bootstrap-select default-select wide form-control"><select
                                    class="default-select wide form-control" id="sidebar_style" name="sidebar_style">
                                    <option value="disabled selected hidden">Choose Sidebar</option>
                                    <option value="full">Full</option>
                                    <option value="mini">Mini</option>
                                    <option value="compact">Compact</option>
                                    <option value="modern">Modern</option>
                                    <option value="overlay">Overlay</option>
                                    <option value="icon-hover">Icon-hover</option>
                                </select>
                                <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-5"
                                        aria-haspopup="listbox" aria-expanded="false" title="Choose Sidebar"
                                        data-id="sidebar_style">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Choose Sidebar</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu "
                                     style="max-height: 4097.93px; overflow: hidden; min-height: 136px;">
                                    <div class="inner show" role="listbox" id="bs-select-5" tabindex="-1"
                                         aria-activedescendant="bs-select-5-0"
                                         style="max-height: 4081.93px; overflow-y: auto; min-height: 120px;">
                                        <ul class="dropdown-menu inner show" role="presentation"
                                            style="margin-top: 0px; margin-bottom: 0px;">
                                            <li class="selected active"><a role="option"
                                                                           class="dropdown-item active selected"
                                                                           id="bs-select-5-0" tabindex="0"
                                                                           aria-setsize="7" aria-posinset="1"
                                                                           aria-selected="true"><span class="text">Choose Sidebar</span></a>
                                            </li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-5-1"
                                                   tabindex="0"><span class="text">Full</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-5-2"
                                                   tabindex="0"><span class="text">Mini</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-5-3"
                                                   tabindex="0"><span class="text">Compact</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-5-4"
                                                   tabindex="0"><span class="text">Modern</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-5-5"
                                                   tabindex="0"><span class="text">Overlay</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-5-6"
                                                   tabindex="0"><span class="text">Icon-hover</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6"><p>Sidebar position</p>
                            <div class="dropdown bootstrap-select default-select wide form-control"><select
                                    class="default-select wide form-control" id="sidebar_position"
                                    name="sidebar_position">
                                    <option value="disabled selected hidden">Choose Sidebar Position</option>
                                    <option value="static">Static</option>
                                    <option value="fixed">Fixed</option>
                                </select>
                                <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-6"
                                        aria-haspopup="listbox" aria-expanded="false" title="Choose Sidebar Position"
                                        data-id="sidebar_position">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Choose Sidebar Position</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu "
                                     style="max-height: 4097.93px; overflow: hidden; min-height: 0px;">
                                    <div class="inner show" role="listbox" id="bs-select-6" tabindex="-1"
                                         aria-activedescendant="bs-select-6-0"
                                         style="max-height: 4081.93px; overflow-y: auto; min-height: 0px;">
                                        <ul class="dropdown-menu inner show" role="presentation"
                                            style="margin-top: 0px; margin-bottom: 0px;">
                                            <li class="selected active"><a role="option"
                                                                           class="dropdown-item active selected"
                                                                           id="bs-select-6-0" tabindex="0"
                                                                           aria-setsize="3" aria-posinset="1"
                                                                           aria-selected="true"><span class="text">Choose Sidebar Position</span></a>
                                            </li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-6-1"
                                                   tabindex="0"><span class="text">Static</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-6-2"
                                                   tabindex="0"><span class="text">Fixed</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fade tab-pane" id="tab3" role="tabpanel">
                <div class="admin-settings">
                    <div class="row">
                        <div class="col-sm-6"><p>Container</p>
                            <div class="dropdown bootstrap-select default-select wide form-control"><select
                                    class="default-select wide form-control" id="container" name="container">
                                    <option value="disabled selected hidden">Choose Container</option>
                                    <option value="wide">Wide</option>
                                    <option value="boxed">Boxed</option>
                                    <option value="wide-boxed">Wide Boxed</option>
                                </select>
                                <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-7"
                                        aria-haspopup="listbox" aria-expanded="false" title="Choose Container"
                                        data-id="container">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Choose Container</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu "
                                     style="max-height: 4097.93px; overflow: hidden; min-height: 136px;">
                                    <div class="inner show" role="listbox" id="bs-select-7" tabindex="-1"
                                         aria-activedescendant="bs-select-7-0"
                                         style="max-height: 4081.93px; overflow-y: auto; min-height: 120px;">
                                        <ul class="dropdown-menu inner show" role="presentation"
                                            style="margin-top: 0px; margin-bottom: 0px;">
                                            <li class="selected active"><a role="option"
                                                                           class="dropdown-item active selected"
                                                                           id="bs-select-7-0" tabindex="0"
                                                                           aria-setsize="4" aria-posinset="1"
                                                                           aria-selected="true"><span class="text">Choose Container</span></a>
                                            </li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-7-1"
                                                   tabindex="0"><span class="text">Wide</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-7-2"
                                                   tabindex="0"><span class="text">Boxed</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-7-3"
                                                   tabindex="0"><span class="text">Wide Boxed</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6"><p>Body Font</p>
                            <div class="dropdown bootstrap-select default-select wide form-control"><select
                                    class="default-select wide form-control" id="typography" name="typography">
                                    <option value="disabled selected hidden">Choose Font</option>
                                    <option value="roboto">Roboto</option>
                                    <option value="poppins">Poppins</option>
                                    <option value="opensans">Open Sans</option>
                                </select>
                                <button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-bs-toggle="dropdown" role="combobox" aria-owns="bs-select-8"
                                        aria-haspopup="listbox" aria-expanded="false" title="Poppins"
                                        data-id="typography">
                                    <div class="filter-option">
                                        <div class="filter-option-inner">
                                            <div class="filter-option-inner-inner">Poppins</div>
                                        </div>
                                    </div>
                                </button>
                                <div class="dropdown-menu "
                                     style="max-height: 4097.93px; overflow: hidden; min-height: 136px;">
                                    <div class="inner show" role="listbox" id="bs-select-8" tabindex="-1"
                                         aria-activedescendant="bs-select-8-2"
                                         style="max-height: 4081.93px; overflow-y: auto; min-height: 120px;">
                                        <ul class="dropdown-menu inner show" role="presentation"
                                            style="margin-top: 0px; margin-bottom: 0px;">
                                            <li><a role="option" class="dropdown-item" id="bs-select-8-0"
                                                   tabindex="0"><span class="text">Choose Font</span></a></li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-8-1"
                                                   tabindex="0"><span class="text">Roboto</span></a></li>
                                            <li class="selected active"><a role="option"
                                                                           class="dropdown-item active selected"
                                                                           id="bs-select-8-2" tabindex="0"
                                                                           aria-setsize="4" aria-posinset="3"
                                                                           aria-selected="true"><span class="text">Poppins</span></a>
                                            </li>
                                            <li><a role="option" class="dropdown-item" id="bs-select-8-3"
                                                   tabindex="0"><span class="text">Open Sans</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="note-text"><span class="text-danger">*Note :</span>This theme switcher is not part of product. It is
            only for demo. you will get all guideline in documentation. please check<a href="../doc/index.html"
                                                                                       target="_blank"
                                                                                       class="text-primary">documentation.</a>
        </div>
    </div>
</div>


<!--**********************************
Main wrapper end
***********************************-->
<!--**********************************
Scripts
***********************************-->
<!-- Required vendors -->

<script>
    var csrfToken = '6UsI/VzpvvWmiciweCDL2/ZKJKxd8AX+Yx7AXUd6essC8C7/uqMqGa6XEkOUUntCsmLeWlxZi0dZK1A4LaSYpU4/NLiI/l6RlH8TyGSRZ50Bf6U/f09N/DbDT5nZlh4sl/IhJqNrTHWAVeZsPWC+JA==';
</script>
<script>
    var asset_base_url = '{{ asset('icons/line-awesome/fonts/la-solid-900.woff2') }}';
</script>
<script>
    const BASE_URL = '{{ asset('icons/line-awesome/fonts/la-solid-900.woff2') }}';
</script>

<script src="{{ asset('vendor/global/global.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<!-- Page level css : Dashboard 2 -->

<script src="{{ asset('vendor/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('js/plugins-init/select2-init.js') }}"></script>

<script src="{{ asset('vendor/chart-js/chart.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('vendor/nestable2/js/jquery.nestable.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('vendor/wow-master/dist/wow.min.js') }}"></script>
<script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
<script src="{{ asset('vendor/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-select-country/js/bootstrap-select-country.min.js') }}"></script>
<script src="{{ asset('vendor/toastr/js/toastr.min.js') }}"></script>

<script src="{{ asset('js/dashboard/cms.js') }}"></script>
<script src="{{ asset('js/plugins-init/nestable-init.js') }}"></script>

<
<script type="module">
    @if (session()->has('status_succeed'))
    toastr.success('{{ session()->pull('status_succeed') }}', {
        timeOut: 1000
    });
    @endif

    @if (session()->has('status_failed'))
    toastr.error('{{ session()->pull('status_failed') }}', {
        timeOut: 1000
    });
    @endif
</script>

<!-- Monaco Editor  -->
<script src="{{ asset('libs/monaco-editor-0.51.0/package/min/vs/loader.js') }}"></script>
<script src="{{ asset('js/admin/monacos/monaco.js') }}"></script>
<!-- End Monaco Editor  -->

<!-- Page level Js : Dashboard 2  -->
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/dlabnav-init.js') }}"></script>
<script src="{{ asset('js/styleSwitcher.js') }}"></script>

<script src="{{ asset('js/admin/change-images/image.js') }}"></script>
<script src="{{ asset('js/admin/ajaxs/change.js') }}"></script>
<script src="{{ asset('js/admin/ajaxs/removeImage.js') }}"></script>
<script src="{{ asset('js/admin/ajaxs/removeImageRelate.js') }}"></script>
<script src="{{ asset('js/admin/commons/common.js') }}"></script>
<script src="{{ asset('js/admin/commons/format-price.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@yield('js')

</body>

</html>
