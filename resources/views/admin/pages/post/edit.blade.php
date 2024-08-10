@extends('admin.layouts.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <h2>{{ $title ?? 'Chưa có title' }}</h2>
            <form action="{{ route('admin.post.update', $post->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="thumbnail">Ảnh bìa</label>
                    <input type="hidden" name="thumbnail" class="upload-image form-control value_post_thumbnail"
                        value="{{ $post->thumbnail }}">
                    <img src="{{ $post->thumbnail ? asset($post->thumbnail) : 'https://st4.depositphotos.com/14953852/24787/v/380/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg' }}"
                        class="img_demo upload-image" width="100px" alt="Ảnh bìa">
                </div>
                <div class="mb-3">
                    <label for="name">Tên bài viết</label>
                    <input type="text" name="name" value="{{ old('name', $post->name) }}" id="name"
                        class="form-control">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="short_content">Mô tả ngắn</label>
                    <input type="text" name="short_content" value="{{ old('short_content', $post->short_content) }}"
                        id="short_content" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="id_category" class="form-label">Danh mục</label><br>
                    @foreach ($categories as $key => $item)
                        @php
                            $check[$key] = '';
                        @endphp
                        @foreach ($post->categories as $category)
                            @php
                                if ($item->id == $category->id) {
                                    $check[$key] = 'checked';
                                }
                            @endphp
                        @endforeach
                            <input {{ $check[$key] }} type="checkbox" name="category_id[]" value="{{ $item->id }}" class="form-check-input"
                                id="{{ $item->id }}">
                            <label for="{{ $item->id }}" class="form-check-label">{{ $item->name }}</label><br>
                        @error('category_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    @endforeach
                </div>

                
                <div class="mb-3">
                    <label for="content">Nội dung bài viết</label>
                    @include('admin.pages.components.editor', [
                        'content' => old('content', $post->content),
                    ])
                </div>
                <div class="mb-3">
                    <label for="meta_title">Tiêu đề SEO</label>
                    <input type="text" name="meta_title" value="{{ old('meta_title', $post->meta_title) }}"
                        id="meta_title" class="form-control" placeholder="Nhập tiêu đề SEO">
                </div>
                <div class="mb-3">
                    <label for="meta_keyword">Từ khóa SEO</label>
                    <input type="text" name="meta_keyword" value="{{ old('meta_keyword', $post->meta_keyword) }}"
                        id="meta_keyword" class="form-control" placeholder="Nhập từ khóa SEO">
                </div>
                <div class="mb-3">
                    <label for="meta_description">Mô tả SEO</label>
                    <textarea name="meta_description" id="meta_description" class="form-control" placeholder="Nhập mô tả SEO">{{ old('meta_description', $post->meta_description) }}</textarea>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.post') }}" class="btn btn-warning">Quay về</a>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>

        </div>
    </div>
@endsection
