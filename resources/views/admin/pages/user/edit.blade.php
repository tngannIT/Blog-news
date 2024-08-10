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
        <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="card-body row">
            @csrf
            <div class="col-6">
                <label for="name">Họ và Tên</label>
                <input type="text" id="name" value="{{ $user->name }}" name="name" class="form-control">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="status">Trạng thái</label>
                <select name="status" id="status" class="form-select">
                    <option value=""> [ CHỌN TRẠNG THÁI ] </option>
                    <option value="1" {{ $user->status == 1 ? 'selected' : '' }}> On </option>
                    <option value="2" {{ $user->status == 2 ? 'selected' : '' }}> Off </option>
                </select>
                @error('status')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="role">Quyền hạn</label>
                <select name="role" id="role" class="form-select">
                    <option value=""> [ CHỌN QUYỀN HẠN ] </option>
                    @foreach ($roles as $role)
                        <option {{$user->getRoleNames()->first() == $role->name ? 'selected' : ''}} value="{{$role->name}}">{{ $role->name }}</option>
                    @endforeach
                </select>
                @error('role')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-5">
                <a href="{{ route('admin.user') }}" class="btn btn-warning">Quay về</a>
                <button type="submit" class="btn btn-success">Lưu</button>
            </div>
        </form>
    </div>
@endsection
