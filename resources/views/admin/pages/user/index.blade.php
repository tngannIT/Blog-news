@extends('admin.layouts.layout')

@section('content')

<div class="card mt-5">
    <h2>{{ $title ?? 'Chưa có title' }}</h2>
    <a href="{{ route('admin.user.create')}}" class="btn btn-primary"><i class="bi bi-plus"></i>Thêm thành viên</a>
    <table id="dataTable" class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Quyền hạn</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $item)
                <tr>
                    <td>{{$key +1}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->getRoleNames()->first()}}</td>
                    <td>{!! $item->status == '1'
                        ? '<span class="badge bg-success">On</span>'
                        : '<span class="badge bg-danger">Off</span>' !!}
                    </td>
                    <td>
                        <a href="{{ route('admin.user.delete', $item->id) }}" onclick="return confirm('Bạn có chắc muốn xóa không>')" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        <a href="{{ route ('admin.user.edit', $item->id)}}" class="btn btn-sm btn-primary"><i class="bi bi-pen"></i></a>
                    </td>
                </tr>

            @endforeach
            
        </tbody>
    </table>
</div>

@endsection