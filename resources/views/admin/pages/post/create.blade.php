@extends('admin.layouts.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <h2>{{ $title ?? 'Chưa có title' }}</h2>
            {{-- @if ($errors->any())
                
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form action="{{ route('admin.post.store') }}" method="POST">
                @csrf
                <div>
                    <label for="thumbnail">Ảnh bìa</label>
                    <input type="hidden" type="text" data-type="Images" name="thumbnail"
                        class="upload-image form-control value_post_thumbnail">
                    <img src="https://st4.depositphotos.com/14953852/24787/v/380/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg"
                        class="img_demo upload-image" width="100px" data-type="Images" alt="">

                </div>
                <div class="mb-3">
                    <label for="name">Tên bài viết</label>
                    <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="short_content">Mô tả ngắn</label>
                    <input type="text" name="short_content" value="{{ old('short_content') }}" id="short_content"
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="id_category" class="form-label">Danh mục</label><br>
                    {{-- <input type="checkbox" id="id_category" value=""><span>Không có danh mục</span><br> --}}
                    @foreach ($categories as $key => $item)
                        <input type="checkbox" name="category_id[]" value="{{ $item->id }}" id="{{ $item->id }}">
                        <label for="{{ $item->id }}">{{ $item->name }}</label> <br>
                    @endforeach
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    
                    <div class="mb-3">
                        <label for="content">Nội dung bài viết</label>
                        <textarea  name="content" id="content" class="ck-editor"></textarea>

                    </div>
                    <div class="mb-3">
                        @include('admin.pages.components.seo')
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.post') }}" class="btn btn-warning">Quay về</a>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
            </form>
        </div>
    </div>
@endsection
