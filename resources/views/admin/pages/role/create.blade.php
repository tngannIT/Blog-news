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
        <form action="{{ route('admin.role.store') }}" method="POST" class="card-body row">
            @csrf
            <div class="col-6">
                <label for="role_name">Tên vai trò</label>
                <input type="text" value="{{ old('role_name') }}" name="role_name" id="role_name" class="form-control"
                    style="background-color: #ffffff;">
                @error('role_name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="permissions" class="form-label">Quyền:</label><br>
                <div class="form-check">
                    @foreach ($permissions as $key => $permission)
                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}" id="{{ $key }}">
                        <label class="form-check-label" for="{{ $key }}">{{ $permission->name }}</label><br>
                    @endforeach
                </div>
            </div>
            
            <div class="mt-5">
                <a href="{{ route('admin.role') }}" class="btn btn-success">Quay về</a>
                <button type="submit" class="btn btn-success">Thêm vai trò</button>
            </div>
        </form>
    </div>
@endsection
