@extends('admin.layouts.layout')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h1> {{ $title ?? 'Chưa có title' }} </h1>
            </div>

            <form action="{{ route('admin.category.update', ['id' => $category->id]) }}" method="POST" class="card-body row">
                @csrf
                <div class="col-12">
                    <label for="name">Tên</label>
                    <input type="text" value="{{ $category->name }}" name="name" id="name" class="form-control"
                        style="background-color: #ffffff;">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="name">Keyword</label>
                    <input type="text" value="{{ $category->meta_keyword }}" name="meta_keyword" id="name"
                        class="form-control" style="background-color: #ffffff;">
                </div>
                <div class="col-12">
                    <label for="name">Tiêu đề</label>
                    <input type="text" value="{{ $category->meta_title }}" name="meta_title" id="name"
                        class="form-control" style="background-color: #ffffff;">
                </div>
                <div class="col-12">
                    <label for="name">Mô tả</label>
                    <input type="text" value="{{ $category->meta_description }}" name="meta_description" id="name"
                        class="form-control" style="background-color: #ffffff;">
                </div>
                <div class="mt-5">
                    <a href="{{ route('admin.category') }}" class="btn btn-success">Quay về</a>
                    <button type="submit" class="btn btn-success">Lưu</button>
                </div>
            </form>
        </div>
    </div>
@endsection
