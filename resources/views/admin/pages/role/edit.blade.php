@extends('admin.layouts.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h1> {{ $title ?? 'Chưa có title' }} </h1>
            {{-- @if ($errors->any())           
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
        </div>
        <form action="{{ route('admin.role.update', $role->id) }}" method="POST" class="card-body row">
            @csrf
            <div class="col-6">
                <label for="role_name">Tên vai trò</label>
                <input type="text" value="{{ old('role_name', $role->name) }}" name="role_name" id="role_name"
                    class="form-control" style="background-color: #ffffff;">
                @error('role_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="permissions">Quyền</label><br>
                @foreach ($permissions as $key => $permission)
                <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}" id="{{ $key }}" 
                        {{-- Đặt tên cho input, sử dụng dấu [] để tạo mảng các giá trị khi dữ liệu được gửi đi. --}}
                        {{-- value="{{ $permission->name }}": Đặt giá trị của checkbox là tên của quyền hạn.                 sử dụng biến $key để đảm bảo ID là duy nhất. --}}
                        @if(in_array($permission->name, $role->permissions->pluck('name')->toArray())) checked @endif>
                        {{-- Phương thức pluck lấy tất cả các giá trị của cột name từ tập hợp quyền hạn, trả về một tập hợp chỉ chứa tên của các quyền hạn. --}}
                        <label class="form-check-label" for="{{ $key }}">{{ $permission->name }}</label><br>
                    {{-- @error('permissions')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror --}}
                @endforeach

            </div>

            <div class="mt-5">
                <a href="{{ route('admin.role') }}" class="btn btn-success">Quay về</a>
                <button type="submit" class="btn btn-success">Cập nhật vai trò</button>
            </div>
        </form>
    </div>
@endsection
