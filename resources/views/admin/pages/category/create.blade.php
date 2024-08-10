@extends('admin.layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1> {{ $title ?? 'Chưa có title' }} </h1>
            @if ($errors->any())            {{-- thông báo --}}
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <form action="{{ route('admin.category.store') }}" method="POST" class="card-body row">
            @csrf
            <div class="col-6">
                <label for="name">Tên danh mục</label>
                <input type="text" value="{{ old('name') }}" 
                name="name" id="name" class="form-control" style="background-color: #ffffff;">
            </div>

            @include('admin.pages.components.seo')

            {{-- <div class="col-6">
                <label for="meta_keyword">Meta Keyword</label>
                <input type="text" value="{{ old('meta_keyword') }}" 
                name="meta_keyword" id="meta_keyword" class="form-control" style="background-color: #ffffff;">
            </div>
            <div class="col-6">
                <label for="meta_title">Meta Title</label>
                <input type="text" value="{{ old('meta_title') }}" 
                name="meta_title" id="meta_title" class="form-control" style="background-color: #ffffff;">
            </div>
            <div class="col-6">
                <label for="meta_description">Meta Description</label>
                <input type="text" value="{{ old('meta_description') }}"  
                name="meta_description" id="meta_description" 
                class="form-control" style="background-color: #ffffff;">
            </div> --}}
            
            <div class="mt-5">
                <button type="submit" class="btn btn-success">Tạo danh mục</button>
                <a href="{{ route('admin.category') }}" class="btn btn-success">Hủy</a>
            </div>
        </form>
    </div>
@endsection