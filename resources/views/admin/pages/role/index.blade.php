@extends('admin.layouts.layout')

@section('content')
<div class="card mt-5">
    <h2>{{ $title ?? 'Chưa có title' }}</h2>
    <a href="{{ route('admin.role.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i> Thêm vai trò</a>
    <table id="dataTable"  class="table table-bordered ">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên </th>
                <th>Quyền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $key => $role)
            <tr>
                <td>{{ $key + 1 }}</td>
                
                <td>{{ $role->name }}</td>
                
                <td>
                    @foreach ($role->permissions as $item)
                        - {{ $item->name}} <br>
                    @endforeach
                </td>
                
                
                
                <td>
                    <a href="{{ route('admin.role.delete', $role->id) }}" onclick="return confirm('Bạn có chắc muốn xóa role này không?')" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                    <a href="{{ route('admin.role.edit', $role->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pen"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection