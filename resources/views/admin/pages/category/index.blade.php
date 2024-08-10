@extends('admin.layouts.layout')

@section('content')

<div class="card mt-4">
    <h2>{{ $title ?? 'Chưa có title' }}</h2>
    <a href="{{ route('admin.category.create')}}" class="btn btn-primary"><i class="bi bi-plus"></i>Thêm danh mục</a>
    <table id="dataTable" class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên danh mục</th>
                <th>Slug SEO</th>
                <th>Keyword</th>
                <th>Tiêu đề SEO</th>
                <th>Mô tả SEO</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $key => $item)
                <tr>
                    <td>{{$key +1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->slug}}</td>
                    <td>
                        @foreach ((json_decode($item->meta_keyword)) as $value)
                            <button class="btn btn-sm btn-secondary">{{$value->value}}</button>
                        @endforeach
                    </td>
                    <td>{{$item->meta_title}}</td>
                    <td>{{$item->meta_description}}</td>
                    <td>
                        <a href="{{ route('admin.category.delete', $item->id) }}" onclick="return confirm('Bạn có chắc muốn xóa danh mục này không?')" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        <a href="{{ route ('admin.category.edit', $item->id)}}" class="btn btn-sm btn-primary"><i class="bi bi-pen"></i></a>
                    </td>
                </tr>

            @endforeach
            
        </tbody>
    </table>
</div>

@endsection