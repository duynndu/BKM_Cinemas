@extends('admin.layouts.main')

@section('title', 'Danh sách vai trò')

@section('css')
@endsection

@section('content')
    <div class="container-fluid">
        <div class="page-titles">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                @include('admin.components.breadcrumbs', [
                    'breadcrumbs' => $breadcrumbs
                ])
            </nav>
        </div>
        <div class="widget-heading d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">{{ __('language.admin.members.roles.list') }}</h3>
            <a href="{{ route('admin.roles.create') }}" class="btn btn-primary btn-sm">{{ __('language.admin.members.roles.add') }}</a>
        </div>
        <div class="row">
            <div class="col-xl-3 col-xxl-4 col-sm-6">
                <div class="card all-crs-wid">
                    <div class="card-body">
                        <div class="courses-bx">
                            <div class="dlab-media overlay-main position-relative">
                                <img src="images/course/1.jpg" class="w-100 rounded" alt="">
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="https://www.youtube.com/watch?v=e6MhFghdQps" class="popup-course">
                                            <i class="fa-solid fa-video"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dlab-info">
                                <div class="dlab-title">
                                    <h5><a href="course-details.html">Bitcoin and Cryptocurrencies Technologies</a></h5>
                                    <div class="">
                                        <p class="m-0">Samantha William
                                            <svg class="ms-1" width="4" height="5" viewBox="0 0 4 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2" cy="2.5" r="2" fill="var(--primary)"></circle>
                                            </svg>
                                            <span>5.0<svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8 0.5L9.79611 6.02786H15.6085L10.9062 9.44427L12.7023 14.9721L8 11.5557L3.29772 14.9721L5.09383 9.44427L0.391548 6.02786H6.20389L8 0.5Z" fill="#FEC64F"></path>
													</svg>
													</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between content align-items-center">
										<span>
											<img src="images/svg/bitcoin.svg" alt="">
											110+ Content
										</span>
                                <a href="course-details.html" class="btn btn-primary btn-sm light">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-pagenation px-4">

        </div>
    </div>
@endsection

@section('js')
@endsection
