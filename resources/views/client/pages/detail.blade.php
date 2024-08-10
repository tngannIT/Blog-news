@extends('client.layouts.layout')

@section('seo_post')
    <title>{{ $post->meta_title }}</title>
    <meta name="description" content="{{ $post->meta_description }}">
    <meta name="keywords"
        content="@if ($post->meta_keyword != null || $post->meta_keyword != '') @foreach (json_decode($post->meta_keyword) as $key){{ $key->value }},@endforeach @endif">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ route('tinchitiet', $post->slug) }}.html">
    <meta property="og:title" content="{{ $post->meta_title }}">
    <meta property="og:description" content="{{ $post->meta_description }}">
    <meta property="og:image" itemprop="thumbnailUrl" content="{{ $post->thumbnail }}" />
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="354" />
@endsection

@section('content')
    <!-- News With Sidebar Start -->
    <div class="container-fluid mt-5 mb-3 pt-3">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 180px;">
                            <h4 class="m-0 text-uppercase font-weight-bold"> Xu hướng</h4>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                            style="width: calc(100% - 180px); padding-right: 100px;">
                            @foreach ($tinmoinhat  as $tin)
                                <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold"
                                        href="{{route('tinchitiet', $tin->slug)}}.html">{{ $tin->name }}</a></div>
                                {{-- <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold"
                                        href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante
                                        tincidunt, sed faucibus nisl sodales</a></div> --}}
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="{{ $post->thumbnail }}" style="object-fit: cover;">
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/the-loai/{{ $post->categories->first()->slug }}.html">{{ $post->categories->first()->name }}</a>
                                <a class="text-body" href="">{{$post->created_at->format('d/m/Y')}}</a>
                            </div>
                            <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">{{ $post->name }}</h1>
                            <p>{!! $post->content !!}</p>
                        </div>
                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="https://ui-avatars.com/api/?name={{ $post->user->name }}&background=random" width="25"
                                    height="25" alt="">
                                <span>{{$post->user->name}}</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ml-3"><i class="far fa-eye mr-2"></i>{{$post->view}}</span>
                                <span class="ml-3"><i class="far fa-comment mr-2"></i>123</span>
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Bình luận</h4>
                        </div>

                        @foreach ($post->comments->where('parent_id', null) as $comment)
                            @include('client.pages.components.comment')
                        @endforeach

                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    @auth
                        <div class="mb-3">
                            <div class="section-title mb-0">
                                <h4 class="m-0 text-uppercase font-weight-bold">Bình luận</h4>
                            </div>
                            <div class="bg-white border border-top-0 p-4">
                                <form method="post" action="{{ route('comment') }}">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <div class="form-group">
                                        <label for="message">Bình luận của bạn</label>
                                        <textarea value="{{ old('content') }}" name="content" id="message" cols="30" rows="5"
                                            class="form-control"></textarea>
                                        @error('content')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Nhập bình luận"
                                            class="btn btn-primary font-weight-semi-bold py-2 px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endauth

                    <!-- Comment Form End -->
                </div>
                @include('client.layouts.components.sidebar')
            </div>
            <h2>Các tin liên quan</h2>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                @foreach ($tinlienquan->posts as $tin)
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid h-100" src="{{ $tin->thumbnail }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="/the-loai/{{ $post->categories->first()->slug }}.html">{{ $post->categories->first()->name }}</a>
                                <a class="text-white"
                                    href=""><small>{{ $tin->created_at->format('d/m/Y') }}</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                                href="{{ route('tinchitiet', $tin->slug) }}.html">{{ $tin->name }}</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>
@endsection

<body>
