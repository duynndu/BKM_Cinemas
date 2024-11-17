@extends('client.layouts.main')

@section('title', 'Khuyễn mãi')

@section('css')
    <link rel="stylesheet" href="{{ asset('client/css/promotion.css') }}">
    <link rel="stylesheet" href="https://touchcinema.com/statics/frontend/plugins/owl-carousel/assets/owl.carousel.min.css"
        type="text/css" media="all" />
@endsection

@section('content')
    <div class="container post-page">
        <div class=" list-post" style="background: #fff">
            @isset($categoryPost)
                <h1>{{ $categoryPost->name }}</h1>
            @endisset

            @if (count($posts) > 0)
                <div class="row">
                    @foreach ($posts as $item)
                        <div class="col-md-4 col-sm-4 col-xs-12 ">
                            <div class="post-item">
                                <div class="post-thumbnail">
                                    <a href="{{ route('post.detail', $item->slug) }}">
                                        <img class="img-responsive" src="{{ asset($item->avatar) }}"
                                            alt="{{ $item->name }}" />
                                    </a>
                                </div>
                                <div class="post-detail">
                                    <h3><a href="{{ route('post.detail', $item->slug) }}">{{ $item->name }}</a></h3>
                                    <div class="description">
                                        {{ $item->description }}
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    @endforeach
                </div>

            @endif

            <div class="center">
                {{ $posts->links('vendor.pagination.bootstrap-4') }}

            </div>
        </div>

    </div>
@endsection

@section('js')

@endsection
