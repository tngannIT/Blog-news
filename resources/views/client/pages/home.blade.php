@extends('client.layouts.layout')
@section('content')
    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="/client_asset/img/news-800x500-1.jpg" style="object-fit: cover;">
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="/client_asset/img/news-800x500-2.jpg" style="object-fit: cover;">
                    </div>
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="/client_asset/img/news-800x500-3.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 px-0">


                <div class="row mx-0">
                    @foreach ($tinxemnhieu as $tin)
                        <div class="col-md-6 px-0">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <img class="img-fluid w-100 h-100" src="{{ $tin->thumbnail }}" style="object-fit: cover;">
                                <div class="overlay">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="{{ route('loaitin', $tin->categories->first()->slug) }}.html">{{ $tin->categories->first()->name }}</a>
                                        <a class="text-white"
                                            href=""><small>{{ $tin->created_at->format('d/m/Y') }}</small></a>
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                                        href="{{ route('tinchitiet', $tin->slug) }}.html">{{ $tin->name }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    {{-- <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit. Proin interdum lacus eget ante tincidunt, sed faucibus nisl sodales</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Tin nổi bật</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                @foreach ($tinxemnhieu as $tin)
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid h-100" src="{{ $tin->thumbnail }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="{{ route('loaitin', $tin->categories->first()->slug) }}.html">{{ $tin->categories->first()->name }}</a>
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
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Tin mới nhất</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none"
                                    href="{{ route('tinmoi') }}">View All</a>
                            </div>
                        </div>
                        @foreach ($tinmoinhat as $tin)
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <div class="custom-image-container">
                                        <img class="img-fluid w-100 " src="{{ $tin->thumbnail }}"
                                            style="object-fit: cover;">
                                    </div>
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="{{ route('loaitin', $tin->categories->first()->slug) }}.html">{{ $tin->categories->first()->name }}</a>

                                            <a class="text-body"
                                                href=""><small>{{ $tin->created_at->format('d/m/Y') }}</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                                            href="{{ route('tinchitiet', $tin->slug) }}.html">{{ $tin->name }}</a>
                                        <p class="m-0">{{ $tin->short_content }}</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="https://ui-avatars.com/api/?name={{ $tin->user->name }}&background=random" width="25"
                                                height="25" alt="">
                                            <small>{{ $tin->user->name }}</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i
                                                    class="far fa-eye mr-2"></i>{{ $tin->view }}</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @foreach ($tinmoinhat as $tin)
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                   <div class="custom-image-container">
                                    <img class="img-fluid w-100" src="{{ $tin->thumbnail }}" style="object-fit: cover;">
                                </div>
                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="{{ route('loaitin', $tin->categories->first()->slug) }}.html">{{ $tin->categories->first()->name }}</a>
                                            <a class="text-body"
                                                href=""><small>{{ $tin->created_at->format('d/m/Y') }}</small></a>
                                        </div>
                                        <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold"
                                            href="{{ route('tinchitiet', $tin->slug) }}.html">{{ $tin->name }}</a>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="https://ui-avatars.com/api/?name={{ $tin->user->name }}&background=random"
                                                width="25" height="25" alt="">
                                            <small>{{ $tin->name }}</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i
                                                    class="far fa-eye mr-2"></i>{{ $tin->view }}</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @foreach ($tinxemnhieu as $tin)
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img width="110px" class="img-fluid" src="{{ $tin->thumbnail }}" alt="">
                                    <div
                                        class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                href="{{ route('loaitin', $tin->categories->first()->slug) }}.html">{{ $tin->categories->first()->name }}</a>
                                            <a class="text-body"
                                                href=""><small>{{ $tin->created_at->format('d/m/Y') }}</small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                            href="{{ route('tinchitiet', $tin->slug) }}.html">{{ $tin->name }}</a>
                                    </div>
                                </div>


                            </div>
                        @endforeach
                        
                        <div class="col-lg-12 mb-3">
                            <div class="col-12">
                                <div class="section-title">
                                    <h4 class="m-0 text-uppercase font-weight-bold">Tin xem nhiều</h4>
                                    <a class="text-secondary font-weight-medium text-decoration-none"
                                    href="{{ route('tinxemnhieu') }}">View All</a>
                                    {{-- <a class="text-secondary font-weight-medium text-decoration-none" href="{{route('tinmoi')}}">View All</a> --}}
                                </div>
                            </div>
                        </div>
                        @foreach ($tinxemnhieu as $tin)
                            <div class="col-lg-12">
                                <div class="row news-lg mx-0 mb-3">
                                    <div class="col-md-6 h-100 px-0">
                                        
                                        <img class="img-fluid h-100" src="{{ $tin->thumbnail }}"
                                            style="object-fit: cover;">
                                        
                                    </div>
                                    <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                        <div class="mt-auto p-4">
                                            <div class="mb-2">
                                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                    href="{{ route('loaitin', $tin->categories->first()->slug) }}.html">{{ $tin->categories->first()->name }}</a>
                                                <a class="text-body"
                                                    href=""><small>{{ $tin->created_at->format('d/m/Y') }}</small></a>
                                            </div>
                                            <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                                                href="{{ route('tinchitiet', $tin->slug) }}.html">{{ $tin->name }}</a>
                                            <p class="m-0">{{ $tin->short_content }}</p>
                                        </div>
                                        <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                            <div class="d-flex align-items-center">
                                                <img class="rounded-circle mr-2" src="https://ui-avatars.com/api/?name={{ $tin->user->name }}&background=random"
                                                    width="25" height="25" alt="">
                                                <small>{{ $tin->user->name }}</small>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <small class="ml-3"><i
                                                        class="far fa-eye mr-2"></i>{{ $tin->view }}</small>
                                                <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @foreach ($tinxemnhieu as $tin)
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                    <img width="100px" class="img-fluid" src="{{ $tin->thumbnail }}" alt="">
                                    <div
                                        class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                                                href="{{ route('loaitin', $tin->categories->first()->slug) }}.html">{{ $tin->categories->first()->name }}</a>
                                            <a class="text-body"
                                                href=""><small>{{ $tin->created_at->format('d/m/Y') }}</small></a>
                                        </div>
                                        <a class="h6 m-0 text-secondary text-uppercase font-weight-bold"
                                            href="{{ route('tinchitiet', $tin->slug) }}.html">{{ $tin->name }}</a>
                                    </div>
                                </div>
                                
                            </div>
                        @endforeach
                        
                    </div>
                </div>

                @include('client.layouts.components.sidebar')
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->
@endsection
