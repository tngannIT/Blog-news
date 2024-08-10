@extends('client.layouts.layout')
@section('content')
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Loại tin: {{ $category->name }}</h4>
                            </div>
                        </div>
                        @foreach ($category->posts as $tin)
                            <div class="col-lg-6">
                                @php
                                    if ($tin->status !== 'public') {
                                        continue;
                                    }
                                @endphp
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="{{ $tin->thumbnail }}" style="object-fit: cover;">
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
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>{{$tin->view}}</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
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

    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>
@endsection
