@extends('layouts.adminlte-custom')

@section('title', 'Tạo | IRIS')

@section('content_header')
<div style="display: flex;justify-content: space-between;">
    <h1 class="m-0 text-dark"></h1>
</div>
@stop

@push('css')
<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
<link rel="stylesheet" href="{{ asset('/css/common.css') }}">
@endpush

@section('content')
@include('sweetalert::alert')
<section class="content">
    <form action="{{ route('admin.store.members') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row form-area">
                <div class="col-md-12 form-header text-center">
                    <h1 class="form-title fs-20 pd5">Thêm thành viên</h1>
                </div>
                <div class="col-md-12 form-body">
                    <div class="form-group row">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tên</label>
                        <div class="col-sm-10 col-form-input">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" style="width: 40%;">
                            @if ($errors->has('name'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ảnh</label>
                        <div class="col-sm-10 col-form-input">
                            <input type="file" name="img" value="{{ old('img') }}" class="form-control" style="width: 40%;">
                            @if ($errors->has('img'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('img') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Giới tính</label>
                        <div class="col-sm-10 col-form-input">
                            <select class="form-control" name="gender" value="{{ old('gender') }}" style="width: 40%;">
                                <option value="1">Nam</option>
                                <option value="2">Nữ</option>
                            </select>
                            @if ($errors->has('gender'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('gender') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Chức vụ</label>
                        <div class="col-sm-10 col-form-input">
                            <input type="text" name="role" value="{{ old('role') }}" class="form-control" style="width: 40%;">
                            @if ($errors->has('role'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('role') }}</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-sm-12  form-footer pd20 d-inline-block text-right">
                    <button type="submit" class="btn btn-primary">Tạo</button>
                </div>
            </div>
        </div>
    </form>
</section>
@stop