@extends('admin.layouts.layout')
@section('content')
    <div class="card mt-5">
        <h2>{{ $title ?? 'Chưa có title' }}</h2>
        <a href="{{ route('admin.post.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i> Thêm bài viết</a>
        <table id="dataTable" class="table table-bordered ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ảnh bìa</th>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Mô tả ngắn</th>
                    <th>Danh mục</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $key => $post)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            <img src="{{ $post->thumbnail ? asset($post->thumbnail) : 'https://st4.depositphotos.com/14953852/24787/v/380/depositphotos_247872612-stock-illustration-no-image-available-icon-vector.jpg' }}"
                                alt="Thumbnail" class="img-thumbnail" style="max-width: 100px;">
                        </td>
                        <td>{{ $post->name }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->short_content }}</td>
                        <td>
                            @foreach ($post->categories as $item)
                                - {{ $item->name }} <br>
                            @endforeach
                        </td>
                        <td>
                            @switch($post->status)
                                @case('public')
                                    Công khai
                                @break

                                @case('pending')
                                    Chờ duyệt
                                @break

                                @case('refuse')
                                    Từ chối
                                @break

                                @default
                            @endswitch
                        </td>


                        <td>
                            @if (Auth()->user()->id == $post->user->id)
                                <a href="{{ route('admin.post.delete', $post->id) }}"
                                    onclick="return confirm('Bạn có chắc muốn xóa bài viết này không?')"
                                    class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                                <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-sm btn-primary"><i
                                        class="bi bi-pen"></i></a>
                            @endif

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
