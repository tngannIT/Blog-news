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
        <form action="{{ route('admin.user.store') }}" method="POST" class="card-body row">
            @csrf
            <div class="col-6">
                <label for="name">Tên</label>
                <input type="text" value="{{ old('name') }}" name="name" id="name" class="form-control"
                    style="background-color: #ffffff;">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="email">Email</label>
                <input type="text" value="{{ old('email') }}" name="email" id="email" class="form-control"
                    style="background-color: #ffffff;">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" id="password" class="form-control"
                    style="background-color: #ffffff;">
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="password_c">Mật khẩu nhập lại</label>
                <input type="password" name="password_c" id="password_c" class="form-control"
                    style="background-color: #ffffff;">
                    @error('password_c')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 mt-3">
                <label for="name">Trạng thái</label>
                <select class="form-select" name="status" id="status">
                    <option value=""> [ CHỌN TRẠNG THÁI ] </option>
                    <option value="1"> On </option>
                    <option value="2"> Off </option>
                </select>
            </div>
            <div class="col-6 mt-3">
                <label for="name">Quyền hạn</label>
                <select class="form-select" name="role" id="status">
                    <option value=""> [ CHỌN QUYỀN HẠN ] </option>
                    @foreach($roles as $role)
                        <option>{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="{{ route('admin.user') }}" class="btn btn-success">Quay về</a>
            </div>
        </form>
    </div>
@endsection
