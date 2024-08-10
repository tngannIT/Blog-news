@extends('admin.layouts.layout')


@section('content')
    <div class="card">
        <div class="card-header ">
            <a class="btn btn-primary" href="{{route('admin.approve-post.status', ['id'=>$post->id, 'status' => 'public'])}}" onclick="return confirm('Bạn chắc chắn muốn duyệt ?')">Duyệt</a>
            <a class="btn btn-danger" href="{{route('admin.approve-post.status', ['id'=>$post->id, 'status'=> 'refuse'])}}" onclick="return confirm('Bạn chắc chắn từ chối ?')">Từ chối</a>
        </div>
        <div class="card-body">
            <h2 class="text-center">{{ $post->name }}</h2>
            <div class="d-flex justify-content-between">
                <div class="author">
                    <img src="https://ui-avatars.com/api/?name={{$post->user->name}}&background=random" class="avatar avatar-md rounded-circle" alt="" width="50%">
                    <span>{{$post->user->name}}</span>
                </div>
                <div class="create_at">
                    Ngày đăng: {{$post->created_at}}
                </div>
            </div>
            <div class="thumbnail mb-2 d-flex justify-content-center">
                <img src="{{$post->thumbnail}}" width="50%" alt="{{$post->name}}">
            </div>
            <div class="content">
                {!! $post->content !!}
            </div>
        </div>
        <div class="card-footer"></div>
    </div>
@endsection
