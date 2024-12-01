@extends('admin.layouts.main')

@section('title', 'Bảng điều khiển')

@section('css')
    <style>
        h6.post-dashboard {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            display: inline-block;
            width: 308px;
        }

        h4.total-revenue {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            display: inline-block;
            width: 550px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-titles">
                            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('admin.dashboard') }}">{{ __('language.admin.home') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">{{ __('language.admin.dashboards.name') }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Bộ lọc -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-titles" style="position: relative; z-index: 2;">
                            <div class="card-header pb-0 border-0 flex-wrap">
                                <div class="d-flex align-items-center mb-3">
                                    <form id="revenueAndTicketForm"
                                          action="{{ route('admin.dashboards.getRevenueAndTicketData') }}"
                                          method="post">
                                        @csrf
                                        <div class="d-flex align-items-center">
                                            <div class="row">
                                                <div class="d-flex align-items-center">
                                                    <div class="row">
                                                        <div class="col">
                                                            <select class="select2" name="filter" id="filter">
                                                                <option value="">-- Tất cả --</option>
                                                                <option value="day">Thống kê theo ngày</option>
                                                                <option value="month">Thống kê theo tháng</option>
                                                                <option value="year">Thống kê theo năm</option>
                                                                <option value="range">Thống kê theo khoảng thời gian</option>
                                                            </select>
                                                        </div>

                                                        <!-- Lọc theo ngày cụ thể -->
                                                        <div class="col" id="dayFilter" style="display: none;">
                                                            <input type="date" id="dateFilter" name="date" class="form-control" max="{{ \Carbon\Carbon::today()->toDateString() }}">
                                                        </div>

                                                        <div class="col" id="monthFilter" style="display: none;">
                                                            <div class="d-flex align-items-center">
                                                                <div style="margin-right: 20px;">
                                                                    <select id="monthSelect" class="select2"
                                                                            name="month">
                                                                        <option value="">-- Chọn tháng --</option>
                                                                        @for ($i = 1; $i <= 12; $i++)
                                                                            <option value="{{ $i }}">Tháng
                                                                                {{ $i }}</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                                <div>
                                                                    <select id="yearSelect" class="select2"
                                                                            name="yearMonth">
                                                                        <option value="">-- Chọn năm --</option>
                                                                        @for ($i = 2000; $i <= \Carbon\Carbon::now()->year; $i++)
                                                                            <option value="{{ $i }}">
                                                                                {{ $i }}</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Lọc theo năm -->
                                                        <div class="col" id="yearFilter" style="display: none;">
                                                            <select id="yearSelect2" class="select2" name="year_filter">
                                                                <option value="">-- Chọn Năm --</option>
                                                                @for ($i = 2000; $i <= \Carbon\Carbon::now()->year; $i++)
                                                                    <option value="{{ $i }}">
                                                                        {{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>

                                                        <!-- Lọc theo khoảng thời gian -->
                                                        <div class="col" id="rangeFilter" style="display: none;">
                                                            <input type="date" max="{{ \Carbon\Carbon::today()->toDateString() }}" name="start_date" class="form-control"
                                                                   id="start_date">
                                                        </div>

                                                        <div class="col" id="rangeFilterEnd" style="display: none;">
                                                            <input type="date" max="{{ \Carbon\Carbon::today()->toDateString() }}" name="end_date" class="form-control"
                                                                   id="end_date">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        @if(\Illuminate\Support\Facades\Auth::user()->type == 'admin')
                                                            <div class="col" style="margin-left: 20px;">
                                                                @if($data['cinemas']->isNotEmpty())
                                                                    <select class="select2" name="cinema_id" id="cinema_id">
                                                                        <option value="">-- Chọn rạp --</option>
                                                                        @foreach($data['cinemas'] as $key => $cinema)
                                                                            <option value="{{ $cinema->id }}">{{ $cinema->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                @endif
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-left: 20px">
                                                <div class="col text-end">
                                                    <button type="button" class="btn btn-primary"
                                                            id="btnFilter">Lọc</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="swiper-slide">
                            <div class="widget-stat card bg-primary">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <i class="la la-dollar"></i>
                                        </span>
                                        <div class="media-body text-white">
                                            <p class="mb-1 text-white">Doanh thu tổng</p>
                                            <h3 class="text-white revenuaData">0</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="swiper-slide">
                            <div class="widget-stat card bg-info">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <i class="la la-film"></i>
                                        </span>
                                        <div class="media-body text-white">
                                            <p class="mb-1 text-white">TOP 1 bộ phim có doanh thu cao nhất</p>
                                            <div style="max-width: 550px">
                                                <h4 class="text-white total-revenue">{{ (!empty($data['top1Movie']->total_tickets) && !empty($data['top1Movie']->total_tickets)) ? $data['top1Movie']->title : 'Chưa có dữ liệu' }}</h4>
                                            </div>
                                            <h5 class="text-white">Doanh thu: {{ number_format($data['top1Movie']->total_revenue, 0, ',', '.') }} VNĐ | Số vé: {{ $data['top1Movie']->total_tickets }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="swiper mySwiper-counter position-relative overflow-hidden">
                        <div class="swiper-wrapper ">
                            <!--swiper-slide-->
                            <div class="swiper-slide">
                                <div class="card counter">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="card-box-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                 fill="none" viewBox="0 0 448 512">
                                                <path fill="#9568FF"
                                                      d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <h2 class="mb-0">{{ !empty($data['users']) ? count($data['users']) : 0 }}</h2>
                                            <p class="mb-0">
                                                Người dùng
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card counter">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="card-box-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                 viewBox="0 0 512 512">
                                                <path fill="#EB62D0"
                                                      d="M0 96C0 60.7 28.7 32 64 32l384 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 96zM48 368l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm368-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM48 240l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm368-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM48 112l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16L64 96c-8.8 0-16 7.2-16 16zM416 96c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM160 128l0 64c0 17.7 14.3 32 32 32l128 0c17.7 0 32-14.3 32-32l0-64c0-17.7-14.3-32-32-32L192 96c-17.7 0-32 14.3-32 32zm32 160c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32l128 0c17.7 0 32-14.3 32-32l0-64c0-17.7-14.3-32-32-32l-128 0z" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <h2 class="font-w600 mb-0">
                                                {{ !empty($data['movies']) ? count($data['movies']) : 0 }}</h2>
                                            <p class="mb-0">
                                                Phim
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="card counter">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="card-box-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                 viewBox="0 0 576 512">
                                                <path fill="#FF4646"
                                                      d="M64 64C28.7 64 0 92.7 0 128l0 64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320l0 64c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-64c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6l0-64c0-35.3-28.7-64-64-64L64 64zm64 112l0 160c0 8.8 7.2 16 16 16l288 0c8.8 0 16-7.2 16-16l0-160c0-8.8-7.2-16-16-16l-288 0c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32l320 0c17.7 0 32 14.3 32 32l0 192c0 17.7-14.3 32-32 32l-320 0c-17.7 0-32-14.3-32-32l0-192z" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <h2 class="mb-0 totalTicketsInMonth_number">{{ !empty($data['totalTicketsInMonth']) ? $data['totalTicketsInMonth'] : 0 }}</h2>
                                            <p class="mb-0">
                                                Số vé trong tháng
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card counter">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="card-box-icon">
                                            <svg width="22" height="22" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 576 512">
                                                <path fill="#ccc"
                                                      d="M0 128C0 92.7 28.7 64 64 64l256 0c35.3 0 64 28.7 64 64l0 256c0 35.3-28.7 64-64 64L64 448c-35.3 0-64-28.7-64-64L0 128zM559.1 99.8c10.4 5.6 16.9 16.4 16.9 28.2l0 256c0 11.8-6.5 22.6-16.9 28.2s-23 5-32.9-1.6l-96-64L416 337.1l0-17.1 0-128 0-17.1 14.2-9.5 96-64c9.8-6.5 22.4-7.2 32.9-1.6z" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <h2 class="mb-0">{{ !empty($data['cinemas']) ? count($data['cinemas']) : 0 }}</h2>
                                            <p class="mb-0">
                                                Tổng số rạp phim
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Thống kê vé theo rạp -->
                <div class="row">
                    <div class="swiper mySwiper-counter position-relative overflow-hidden">
                        <div class="swiper-wrapper ">
                            <!--swiper-slide-->
                            <div class="swiper-slide">
                                <div class="card counter">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="card-box-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                 viewBox="0 0 576 512">
                                                <path fill="#00b848d4"
                                                      d="M64 64C28.7 64 0 92.7 0 128l0 64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320l0 64c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-64c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6l0-64c0-35.3-28.7-64-64-64L64 64zm64 112l0 160c0 8.8 7.2 16 16 16l288 0c8.8 0 16-7.2 16-16l0-160c0-8.8-7.2-16-16-16l-288 0c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32l320 0c17.7 0 32 14.3 32 32l0 192c0 17.7-14.3 32-32 32l-320 0c-17.7 0-32-14.3-32-32l0-192z" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <h2 class="mb-0 totalTicketsCompleted_number">{{ !empty($data['totalTicketsCompleted']) ? $data['totalTicketsCompleted'] : 0 }}</h2>
                                            <p class="mb-0">
                                                Số vé hoàn thành
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card counter">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="card-box-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                 viewBox="0 0 576 512">
                                                <path fill="#FF4646"
                                                      d="M64 64C28.7 64 0 92.7 0 128l0 64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320l0 64c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-64c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6l0-64c0-35.3-28.7-64-64-64L64 64zm64 112l0 160c0 8.8 7.2 16 16 16l288 0c8.8 0 16-7.2 16-16l0-160c0-8.8-7.2-16-16-16l-288 0c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32l320 0c17.7 0 32 14.3 32 32l0 192c0 17.7-14.3 32-32 32l-320 0c-17.7 0-32-14.3-32-32l0-192z" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <h2 class="mb-0 totalTicketsWaitingForCancellation_number">{{ !empty($data['totalTicketsWaitingForCancellation']) ? $data['totalTicketsWaitingForCancellation'] : 0 }}</h2>
                                            <p class="mb-0">
                                                Số vé chờ hủy
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card counter">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="card-box-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                 viewBox="0 0 576 512">
                                                <path fill="var(--primary)"
                                                      d="M64 64C28.7 64 0 92.7 0 128l0 64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320l0 64c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-64c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6l0-64c0-35.3-28.7-64-64-64L64 64zm64 112l0 160c0 8.8 7.2 16 16 16l288 0c8.8 0 16-7.2 16-16l0-160c0-8.8-7.2-16-16-16l-288 0c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32l320 0c17.7 0 32 14.3 32 32l0 192c0 17.7-14.3 32-32 32l-320 0c-17.7 0-32-14.3-32-32l0-192z" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <h2 class="mb-0 totalTicketsCancelled_number">{{ !empty($data['totalTicketsCancelled']) ? $data['totalTicketsCancelled'] : 0 }}</h2>
                                            <p class="mb-0">
                                                Số vé đã hủy
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card counter">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="card-box-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                 viewBox="0 0 576 512">
                                                <path fill="#FF4646"
                                                      d="M64 64C28.7 64 0 92.7 0 128l0 64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320l0 64c0 35.3 28.7 64 64 64l448 0c35.3 0 64-28.7 64-64l0-64c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6l0-64c0-35.3-28.7-64-64-64L64 64zm64 112l0 160c0 8.8 7.2 16 16 16l288 0c8.8 0 16-7.2 16-16l0-160c0-8.8-7.2-16-16-16l-288 0c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32l320 0c17.7 0 32 14.3 32 32l0 192c0 17.7-14.3 32-32 32l-320 0c-17.7 0-32-14.3-32-32l0-192z" />
                                            </svg>
                                        </div>
                                        <div class="chart-num">
                                            <h2 class="mb-0 totalTicketsRejected_number">{{ !empty($data['totalTicketsRejected']) ? $data['totalTicketsRejected'] : 0 }}</h2>
                                            <p class="mb-0">
                                                Số vé từ chối hủy
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-8">
                        <div class="card crypto-chart" style="padding: 0 0 20px 0;">
                            <div class="card-header d-flex justify-content-center border-0 pb-0">
                                <h2 class="fs-22 text-center text-uppercase">Thống kê top 5 bộ phim có doanh thu và số vé nhiều nhất</h2>
                            </div>
                            <div class="card-body pt-4 custome-tooltip pb-0">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 wow fadeInUp" data-wow-delay="1.5s">
                        <div class="card">
                            <div class="card-header border-0 d-flex justify-content-center">
                                <h2 class="fs-20 revenue_cinema_text text-center text-uppercase">Trạng thái vé</h2>
                            </div>
                            <div class="d-flex justify-content-center card-body text-center pt-0 pb-4">
                                <div class="revenueCinemaChart-box" style="width: 400px;">
                                    <canvas id="statusBookingCinemaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!--column-->
                    <div class="col-xl-6">
                        <div class="card overflow-hidden">
                            <div class="card-body p-4">
                                <h4 class="mb-0 text-center border-bottom pb-3">Top 5 bộ phim nhiều người xem nhất</h4>
                                <div class="card-body p-0">
                                    @if (!empty($data['top5Movies']))
                                        <div class="widget-media dlab-scroll height370 my-4 px-4">
                                        @foreach ($data['top5Movies'] as $movie)
                                            <div class="quick-info mt-3"
                                                 style="padding: 20px 10px !important; border-radius: 4px;">
                                                <div class="quick-content">
                                                    <img src="{{ $movie->image ?? '' }}" class="avatar me-2"
                                                         alt="">
                                                    <div class="user-name">
                                                        <h6 class="mb-0">{{ $movie->title }}</h6>
                                                        <div class="row">
                                                            <span>
                                                                Ngày khởi chiếu: {{ date('d-m-Y', strtotime($movie->release_date)) }}
                                                            </span>
                                                        </div>
                                                        <div class="row">
                                                            <span>
                                                                Định dạng: {{ $movie->format }} | Tuổi: {{ $movie->age }}
                                                            </span>
                                                        </div>
                                                        <div class="row">
                                                            <span>
                                                                Quốc gia: {{ $movie->country }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="count">
                                                    <span>{{ date('d/m/Y', strtotime($movie->created_at)) }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="card-footer border-0" style="padding: 30px 0 0 0;">
                                    <a href="{{ route('admin.movies.index') }}"
                                        class="btn btn-primary w-100 btn-login">{{ __('language.admin.dashboards.viewAll') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/column-->

                    <!--column-->
                    <div class="col-xl-6">
                        <div class="card overflow-hidden">
                            <div class="card-body p-4">
                                <h4 class="mb-0 text-center border-bottom pb-3">Top 5 rạp chiếu phim có doanh thu và số vé cao nhất</h4>
                                <div class="card-body p-0">
                                    @if (!empty($data['top5Cinemas']))
                                        <div class="widget-media dlab-scroll height370 my-4 px-4">
                                            @foreach ($data['top5Cinemas'] as $cinema)
                                                <div class="quick-info mt-3"
                                                     style="padding: 20px 10px !important; border-radius: 4px;">
                                                    <div class="quick-content">
                                                        <img src="{{ $cinema->image ?? '' }}" class="avatar me-2"
                                                             alt="">
                                                        <div class="user-name" style="max-width: 319px;">
                                                            <h6 class="mb-0 post-dashboard">{{ $cinema->name }}</h6>
                                                            <span>Doanh thu: {{ number_format($cinema->total_revenue, 0, ',', '.') }} VNĐ | Số vé: {{ $cinema->total_tickets }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="count">
                                                        <span>{{ date('d/m/Y', strtotime($cinema->created_at)) }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="card-footer border-0" style="padding: 30px 0 0 0;">
                                    <a href="{{ route('admin.posts.index') }}"
                                        class="btn btn-primary w-100 btn-login">{{ __('language.admin.dashboards.viewAll') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/column-->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#filter').on('change', function() {
                var filter = $(this).val();

                $('#dayFilter').hide().find('input').val('');
                $('#monthFilter').hide().find('select').val('').trigger('change.select2');
                $('#yearFilter').hide().find('select').val('').trigger('change.select2');
                $('#rangeFilter').hide().find('input').val('');
                $('#rangeFilterEnd').hide().find('input').val('');

                if (filter === 'day') {
                    $('#dayFilter').show().find('input').val('');
                } else if (filter === 'month') {
                    $('#monthFilter').show();
                    $('#monthFilter select').val('').selectpicker('refresh');
                } else if (filter === 'year') {
                    $('#yearFilter').show();
                    $('#yearFilter select').val('').selectpicker('refresh');
                } else if (filter === 'range') {
                    $('#rangeFilter').show().find('input').val('');
                    $('#rangeFilterEnd').show().find('input').val('');
                }
            });

            const ctx = $('#myChart')[0].getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [],
                    datasets: [
                        {
                            label: 'Doanh thu (VNĐ)',
                            backgroundColor: 'rgba(255, 165, 0, 0.2)',
                            borderColor: 'rgba(255, 165, 0, 1)',
                            borderWidth: 1,
                            data: [],
                            barThickness: 70,
                            maxBarThickness: 80,
                        },
                        {
                            label: 'Số vé',
                            data: [],
                            borderColor: 'rgba(54, 162, 235, 1)',
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            type: 'line',
                            borderWidth: 2,
                            tension: 0.4,
                            fill: false
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Số vé'
                            },
                            ticks: {
                                callback: function(value, index, values) {
                                    const label = this.getLabelForValue(value);
                                    return label.length > 15 ? label.substring(0, 30) + "..." : label;
                                }
                            }
                        },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Doanh thu (VNĐ)'
                            }
                        }
                    }
                }
            });

            const ctxStatusBookingCinemaChart = $('#statusBookingCinemaChart')[0].getContext('2d');
            const statusBookingCinemaChart = new Chart(ctxStatusBookingCinemaChart, {
                type: 'doughnut',
                data: {
                    labels: ['Số vé hoàn thành', 'Số vé chờ hủy', 'Số vé đã hủy', 'Số vé từ chối hủy'],
                    datasets: [
                        {
                            label: 'Trạng thái vé',
                            data: [],
                            backgroundColor: ['#36A2EB', '#FF6384', '#FFCE56', '#4BC0C0'],
                            hoverOffset: 4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                color: '#333',
                                font: {
                                    size: 14
                                }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function (tooltipItem) {
                                    const value = tooltipItem.raw;
                                    return `Số lượng: ${value}`;
                                }
                            }
                        }
                    }
                }
            });

            $('#btnFilter').on('click', function () {
                var filter = $('#filter').val();
                var date = $('#dateFilter').val();
                var month = $('#monthSelect').val();
                var yearMonth = $('#yearSelect').val();
                var year = $('#yearSelect2').val();
                var startDate = $('#start_date').val();
                var endDate = $('#end_date').val();
                var cinema_id = $('#cinema_id').val();

                var data = {
                    filter: filter,
                    date: date,
                    month: month,
                    yearMonth: yearMonth,
                    year_filter: year,
                    start_date: startDate,
                    end_date: endDate,
                    cinema_id: cinema_id,
                    _token: $('input[name="_token"]').val()
                };

                $.ajax({
                    url: $('#revenueAndTicketForm').attr('action'),
                    method: 'GET',
                    data: data,
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        const chartData = response.chart;

                        if (response.cinemaId !== null) {
                            var revenueCinemaBox = $('.revenue_cinema');
                            revenueCinemaBox.css('display', 'block');
                        }

                        // $('.totalTicketsInMonth_number').text(response.totalTicketsInMonth);
                        $('.totalTicketsCompleted_number').text(response.totalTicketsCompleted);
                        $('.totalTicketsWaitingForCancellation_number').text(response.totalTicketsWaitingForCancellation);
                        $('.totalTicketsCancelled_number').text(response.totalTicketsCancelled);
                        $('.totalTicketsRejected_number').text(response.totalTicketsRejected);

                        const labels = chartData.map(item => item.movie_name_and_date);
                        const revenues = chartData.map(item => item.total_revenue);
                        const movieCounts = chartData.map(item => item.movie_count);

                        myChart.data.labels = labels;
                        myChart.data.datasets[0].data = revenues;
                        myChart.data.datasets[1].data = movieCounts;
                        myChart.update();

                        const statusCounts = [
                            response.totalTicketsCompleted,              // Số vé hoàn thành
                            response.totalTicketsWaitingForCancellation, // Số vé chờ hủy
                            response.totalTicketsCancelled,              // Số vé đã hủy
                            response.totalTicketsRejected                // Số vé từ chối hủy
                        ];

                        statusBookingCinemaChart.data.datasets[0].data = statusCounts;
                        statusBookingCinemaChart.update();
                    },
                    error: function (xhr, status, error) {
                        console.error('Lỗi khi tải dữ liệu biểu đồ:', error);
                    }
                });
            });


            $.ajax({
                url: $('#revenueAndTicketForm').attr('action'),
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    const chartData = response.chart;

                    const revenuaData = $('.revenuaData');
                    let totalRevenue = 0;

                    for (let i = 0; i < chartData.length; i++) {
                        totalRevenue += chartData[i].total_revenue;
                    }

                    revenuaData.text(totalRevenue.toLocaleString('vi-VN') + ' VNĐ');

                    const labels = chartData.map(item => item.movie_name_and_date);
                    const revenues = chartData.map(item => item.total_revenue);
                    const movieCounts = chartData.map(item => item.movie_count);

                    myChart.data.labels = labels;
                    myChart.data.datasets[0].data = revenues;
                    myChart.data.datasets[1].data = movieCounts;
                    myChart.update();

                    const statusCounts = [
                        response.totalTicketsCompleted,              // Số vé hoàn thành
                        response.totalTicketsWaitingForCancellation, // Số vé chờ hủy
                        response.totalTicketsCancelled,              // Số vé đã hủy
                        response.totalTicketsRejected                // Số vé từ chối hủy
                    ];

                    statusBookingCinemaChart.data.datasets[0].data = statusCounts;
                    statusBookingCinemaChart.update();
                },
                error: function(xhr, status, error) {
                    console.error('Lỗi khi tải dữ liệu biểu đồ:', error);
                }
            });

        });
    </script>
@endsection
