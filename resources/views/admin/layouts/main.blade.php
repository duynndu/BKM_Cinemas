<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>@yield('title')</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="cinema_id" content="{{ auth()->user()->cinema_id ?? '' }}">
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
    <link rel="shortcut icon" href="{{ asset('client/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('icons/line-awesome/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/wow-master/css/libs/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select-country/css/bootstrap-select-country.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datepicker/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/swiper/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/swiper.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/toastr/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free-6.6.0-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/nestable2/css/jquery.nestable.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/movies.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_monaco.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_image.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_auth.css') }}">
    <link rel="stylesheet" href="{{ asset('libs/monaco-editor-0.51.0/package/min/vs/editor/editor.main.css') }}">
    <script src="{{ asset('js/admin/chart/chart.js') }}"></script>

    @yield('css')
    @routes
</head>

<body>

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
            {{-- <div class="wallet-bar wow fadeInRight dlab-scroll" id="wallet-bar" data-wow-delay="0.7s">
                <div class="row ">
                    <!--column-->
                    <div class="col-xl-12">
                        <div class="card bg-transparent contacts mb-1">
                            <div class="card-header border-0 pb-0 px-3 pt-0">
                                <div>
                                    <h5 class="mb-0">Contacts</h5>
                                    <p class="mb-0">You have <strong>456</strong> contacts</p>
                                </div>
                                <div>
                                    <a href="#" class="add" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12 3C7.05 3 3 7.05 3 12C3 16.95 7.05 21 12 21C16.95 21 21 16.95 21 12C21 7.05 16.95 3 12 3ZM12 19.125C8.1 19.125 4.875 15.9 4.875 12C4.875 8.1 8.1 4.875 12 4.875C15.9 4.875 19.125 8.1 19.125 12C19.125 15.9 15.9 19.125 12 19.125Z"
                                                fill="white" />
                                            <path
                                                d="M16.3503 11.0251H12.9753V7.65009C12.9753 7.12509 12.5253 6.67509 12.0003 6.67509C11.4753 6.67509 11.0253 7.12509 11.0253 7.65009V11.0251H7.65029C7.12529 11.0251 6.67529 11.4751 6.67529 12.0001C6.67529 12.5251 7.12529 12.9751 7.65029 12.9751H11.0253V16.3501C11.0253 16.8751 11.4753 17.3251 12.0003 17.3251C12.5253 17.3251 12.9753 16.8751 12.9753 16.3501V12.9751H16.3503C16.8753 12.9751 17.3253 12.5251 17.3253 12.0001C17.3253 11.4751 16.8753 11.0251 16.3503 11.0251Z"
                                                fill="white" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body loadmore-content  dlab-scroll height400 recent-activity-wrapper p-3 pt-2"
                                id="RecentActivityContent">
                                <!--student-->
                                <div class="d-flex align-items-center student">
                                    <div class="dz-media">
                                        <img src="" alt="" class="avatar">
                                    </div>
                                    <div class="user-info">
                                        <h6 class="card-title card-title--small mb-1"><a
                                                href="app-profile.html">Samantha
                                                William</a></h6>
                                        <p class="mb-0">Marketing Manager</p>
                                    </div>
                                    <div class="indox">
                                        <a href="#">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z"
                                                    fill="#01A3FF" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <!--/student-->
                                <!--student-->
                                <div class="d-flex align-items-center student">
                                    <div class="dz-media">
                                        <img src="" alt="" class="avatar">
                                    </div>
                                    <div class="user-info">
                                        <h6 class="card-title card-title--small mb-1"><a href="app-profile.html">Tony
                                                Soap</a></h6>
                                        <p class="mb-0">UI Designer</p>
                                    </div>
                                    <div class="indox">
                                        <a href="#">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z"
                                                    fill="#01A3FF" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <!--/student-->
                                <!--student-->
                                <div class="d-flex align-items-center student">
                                    <div class="dz-media">
                                        <img src="" alt="" class="avatar">
                                    </div>
                                    <div class="user-info">
                                        <h6 class="card-title card-title--small mb-1"><a href="app-profile.html">Karen
                                                Hope</a></h6>
                                        <span>Web Developer</span>
                                    </div>
                                    <div class="indox">
                                        <a href="#">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z"
                                                    fill="#01A3FF" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <!--/student-->
                                <!--student-->
                                <div class="d-flex align-items-center student">
                                    <div class="dz-media">
                                        <img src="" alt="" class="avatar">
                                    </div>
                                    <div class="user-info">
                                        <h6 class="card-title card-title--small mb-1"><a
                                                href="app-profile.html">Jordan
                                                Nico</a>
                                        </h6>
                                        <p class="mb-0">Graphic Design</p>
                                    </div>
                                    <div class="indox">
                                        <a href="#">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z"
                                                    fill="#01A3FF" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <!--/student-->
                                <!--student-->
                                <div class="d-flex align-items-center student pb-0">
                                    <div class="dz-media">
                                        <img src="" alt="" class="avatar">
                                    </div>
                                    <div class="user-info">
                                        <h6 class="card-title card-title--small mb-1"><a
                                                href="app-profile.html">Nadila
                                                Adja</a>
                                        </h6>
                                        <p class="mb-0">QA Engineer</p>
                                    </div>
                                    <div class="indox">
                                        <a href="#">
                                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M18 0.889911C18.0057 0.823365 18.0057 0.756458 18 0.689911L17.91 0.499911C17.91 0.499911 17.91 0.429911 17.86 0.399911L17.81 0.349911L17.65 0.219911C17.6062 0.175413 17.5556 0.138269 17.5 0.109911L17.33 0.0499115H17.13H0.93H0.73L0.56 0.119911C0.504246 0.143681 0.453385 0.177588 0.41 0.219911L0.25 0.349911C0.25 0.349911 0.25 0.349911 0.25 0.399911C0.25 0.449911 0.25 0.469911 0.2 0.499911L0.11 0.689911C0.10434 0.756458 0.10434 0.823365 0.11 0.889911L0 0.999911V12.9999C0 13.2651 0.105357 13.5195 0.292893 13.707C0.48043 13.8946 0.734784 13.9999 1 13.9999H10C10.2652 13.9999 10.5196 13.8946 10.7071 13.707C10.8946 13.5195 11 13.2651 11 12.9999C11 12.7347 10.8946 12.4803 10.7071 12.2928C10.5196 12.1053 10.2652 11.9999 10 11.9999H2V2.99991L8.4 7.79991C8.5731 7.92973 8.78363 7.99991 9 7.99991C9.21637 7.99991 9.4269 7.92973 9.6 7.79991L16 2.99991V11.9999H14C13.7348 11.9999 13.4804 12.1053 13.2929 12.2928C13.1054 12.4803 13 12.7347 13 12.9999C13 13.2651 13.1054 13.5195 13.2929 13.707C13.4804 13.8946 13.7348 13.9999 14 13.9999H17C17.2652 13.9999 17.5196 13.8946 17.7071 13.707C17.8946 13.5195 18 13.2651 18 12.9999V0.999911C18 0.999911 18 0.929911 18 0.889911ZM9 5.74991L4 1.99991H14L9 5.74991Z"
                                                    fill="#01A3FF" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <!--/student-->

                            </div>
                            <div class="card-footer text-center border-0 px-3">
                                <a href="javascritpt%20void(0)%3b.html"
                                    class="btn btn-block btn-primary  dlab-load-more" id="RecentActivity"
                                    rel="/cakephp/demo/fin-lab-admin/ajax-recentactivity">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--/column-->
                    <!--column-->
                    <div class="col-xl-12">
                        <div class="card progressbar bg-transparent mb-0">
                            <div class="card-header border-0 px-3 py-0">
                                <div>
                                    <h5 class="mb-0">Project</h5>
                                    <p class="mb-0">You have <strong>456 </strong>contacts</span>
                                </div>
                                <div class="dropdown custom-dropdown">
                                    <div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
                                        <svg width="5" height="15" viewBox="0 0 6 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z"
                                                fill="#01A3FF" />
                                        </svg>

                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body  p-3">
                                <div>
                                    <div class="progress default-progress" style="height:8px;">
                                        <div class="progress-bar bg-vigit progress-animated bg-secondary"
                                            style="width: 50%; height:100%;" role="progressbar">
                                            <span class="sr-only">90% Complete</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                        <p class="mb-0 text-secondary">Web Design</p>
                                        <p class="mb-0">452 times</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="progress default-progress" style="height:8px;">
                                        <div class="progress-bar bg-contact progress-animated "
                                            style="width: 68%; height:100%;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
                                        <p class="mb-0 text-primary">Graphic Design</p>
                                        <p class="mb-0">97 times</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="progress default-progress" style="height:8px;">
                                        <div class="progress-bar bg-contact progress-animated bg-danger"
                                            style="width: 40%; height:100%;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end mt-2 justify-content-between">
                                        <p class="mb-0 text-danger">Front-End</p>
                                        <p class="mb-0">61 times</p>
                                    </div>
                                </div>
                            </div>
                            <hr style="margin: 0px -15px 0px -15px; ">
                        </div>
                    </div>
                    <!--/column-->
                    <!--column-->
                    <div class="col-xl-12 ">
                        <div class="card tags mb-0 bg-transparent ">
                            <div class="card-header border-0  p-3 py-3 pb-0">
                                <div>
                                    <h5>Tag</h5>
                                </div>

                            </div>
                            <div class="card-body  p-3 py-1 ">
                                <div>
                                    <a href="javascript:void(0);" class="tag">#teamwork</a>
                                    <a href="javascript:void(0);" class="tag">#design</a>
                                    <a href="javascript:void(0);" class="tag">#projectmanagement</a>
                                    <a href="javascript:void(0);" class="tag">16+</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <hr style="margin: 0px -15px 0px -15px; ">
                    <!--/column-->
                    <!--column-->
                    <div class="col-xl-12">
                        <div class="card progressbar bg-transparent ">
                            <div class="card-header border-0  p-3 pb-0">
                                <div>
                                    <h5 class="mb-0">Server Status</h5>
                                </div>
                                <div class="dropdown custom-dropdown">
                                    <div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
                                        <svg width="5" height="15" viewBox="0 0 6 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z"
                                                fill="#01A3FF" />
                                        </svg>

                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0);">Option 1</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Option 2</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Option 3</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body  p-3">
                                <div class="server-content">
                                    <div class="progress default-progress">
                                        <div class="progress-bar bg-vigit progress-animated bg-pink"
                                            style="width: 15%; height:100%;" role="progressbar">
                                            <span class="sr-only">30% Complete</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end  pe-2 justify-content-between">
                                        <span class=" value text-pink">10 AM</span>

                                    </div>
                                </div>
                                <div class="server-content">
                                    <div class="progress default-progress">
                                        <div class="progress-bar bg-contact progress-animated bg-secondary"
                                            style="width: 45%; height:100%;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end  pe-2 justify-content-between">
                                        <span class=" value text-secondary">8 AM</span>

                                    </div>
                                </div>
                                <div class="server-content">
                                    <div class="progress default-progress">
                                        <div class="progress-bar bg-contact progress-animated bg-success"
                                            style="width: 45%; height:100%;" role="progressbar">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end  pe-2 justify-content-between">
                                        <span class=" value text-success">6 AM</span>
                                    </div>
                                </div>
                                <div class="server-content">
                                    <div class="progress default-progress">
                                        <div class="progress-bar bg-contact progress-animated bg-primary"
                                            style="width: 25%; height:100%;" role="progressbar">
                                            <span class="sr-only">25% Complete</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end  pe-2 justify-content-between">
                                        <span class=" value text-primary">4 AM</span>
                                    </div>
                                </div>
                                <div class="server-content mb-0">
                                    <div class="progress default-progress">
                                        <div class="progress-bar bg-contact progress-animated bg-danger"
                                            style="width: 10%; height:100%;" role="progressbar">
                                            <span class="sr-only">15% Complete</span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-end  pe-2 justify-content-between">
                                        <span class=" value text-danger">2 AM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/column-->
                    <!--column-->
                    <div class="sidebar-footer">
                        <div class="col-xl-12">
                            <!--row-->
                            <div class="row">
                                <!--column-->
                                <div class="col-xl-4">
                                    <div class="sidebar-info">
                                        <p class="mb-0 text-black">Country</p>
                                        <h4 class="card-title card-title--small mb-0"><a href="javascript:void(0);"
                                                class="text-primary">Indonesia</a>
                                        </h4>
                                    </div>
                                </div>
                                <!--/column-->
                                <!--column-->
                                <div class="col-xl-4">
                                    <div class="sidebar-info">
                                        <p class="mb-0 text-black">Domain</p>
                                        <h4 class="card-title card-title--small mb-0"><a href="javascript:void(0);"
                                                class="text-primary">
                                                dexiglab.com </a></h4>
                                    </div>
                                </div>
                                <!--/column-->
                                <!--column-->
                                <div class="col-xl-4 text-end">
                                    <div class="sidebar-info text-center">
                                        <span>
                                            <svg width="16" height="10" viewBox="0 0 16 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.367887 8.38398L7.44789 0.535979C7.73589 0.199978 8.26389 0.199978 8.55189 0.535979L15.6319 8.38398C16.0879 8.88798 15.7519 9.70398 15.0799 9.70398L0.919888 9.70398C0.247888 9.70398 -0.0881128 8.88798 0.367887 8.38398Z"
                                                    fill="var(--primary)" />
                                            </svg>
                                        </span>
                                        <h4 class="card-title card-title--small mb-0 text-primary"><a
                                                href="javascript:void(0);"></a>2.0 mbps</a></h4>
                                    </div>
                                </div>
                                <!--/column-->
                            </div>
                            <!-- /row-->
                        </div>
                    </div>
                </div>
            </div> --}}

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
                            <button type="button" class="btn btn-danger light"
                                data-bs-dismiss="modal">Close</button>
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

    <script>
        var csrfToken =
            '6UsI/VzpvvWmiciweCDL2/ZKJKxd8AX+Yx7AXUd6essC8C7/uqMqGa6XEkOUUntCsmLeWlxZi0dZK1A4LaSYpU4/NLiI/l6RlH8TyGSRZ50Bf6U/f09N/DbDT5nZlh4sl/IhJqNrTHWAVeZsPWC+JA==';
    </script>
    <script>
        var asset_base_url = '{{ asset('icons/line-awesome/fonts/la-solid-900.woff2') }}';
    </script>
    <script>
        const BASE_URL = '{{ asset('icons/line-awesome/fonts/la-solid-900.woff2') }}';
    </script>

    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
    <!-- Page level css : Dashboard 2 -->

    <script src="{{ asset('vendor/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/plugins-init/select2-init.js') }}"></script>
    <script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('vendor/nestable2/js/jquery.nestable.min.js') }}"></script>

    <script src="{{ asset('vendor/chart-js/chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
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
    <script src="{{ asset('js/admin/commons/customCkeditor.js') }}"></script>
    <script src="{{ asset('js/dlabnav-init.js') }}"></script>

    <script src="{{ asset('js/admin/change-images/image.js') }}"></script>
    <script src="{{ asset('js/admin/ajaxs/change.js') }}"></script>
    <script src="{{ asset('js/admin/ajaxs/deteleMultipleChecked.js') }}"></script>
    <script src="{{ asset('js/admin/ajaxs/removeImage.js') }}"></script>
    <script src="{{ asset('js/admin/ajaxs/removeImageRelate.js') }}"></script>
    <script src="{{ asset('js/admin/commons/common.js') }}"></script>
    <script src="{{ asset('js/admin/commons/movies/createNewActorMovie.js') }}"></script>
    <script src="{{ asset('js/admin/commons/changeCheckbox.js') }}"></script>
    <script src="{{ asset('js/admin/commons/format-price.js') }}"></script>
    <script src="{{ asset('js/plugins-init/swiper.min.js') }}"></script>
    <script type="module" src="{{ asset('js/main.js') }}"></script>
    @yield('js')

</body>

</html>
