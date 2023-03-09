@extends('layouts.adminlte-custom')

@section('title', 'Cập nhật | IRIS')

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
    <form action="{{ route('admin.update.members' , $member->id) }}" method="post">
        @csrf
        <div class="container-fluid">
            <div class="row form-area">
                <div class="col-md-12 form-header text-center">
                    <h1 class="form-title fs-20 pd5">Cập nhật thành viên : {{ $member->name }}</h1>
                </div>
                <div class="col-md-12 form-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tên</label>
                        <div class="col-sm-10 col-form-input">
                            <input type="text" name="name" value="{{ old('name', $member->name ?? null) }}" class="form-control" style="width: 40%;">
                            @if ($errors->has('name'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Ảnh</label>
                        <div class="col-sm-10 col-form-input">
                            @if($member->img)
                            <img id="previewImg" class="logo-preview" src="{{ URL::to($member->img) }}">
                            @else
                            <img src="{{ asset("logo/company_logo_default.png") }}" class="p-0" alt="100x40" style="min-width: 100px; height: 40px;" />
                            @endif
                            <input type="file" class="form-control input-image-preview" name="img" onchange="previewFile(this)" value="{{ $member->img }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Giới tính</label>
                        <div class="col-sm-10 col-form-input">
                            <select class="form-control" value="{{ old('gender', $member->gender ?? null) }}" style="width: 40%;">
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
                            <input type="text" name="role" value="{{ old('role', $member->role ?? null) }}" class="form-control" style="width: 40%;">
                            @if ($errors->has('role'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('role') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 form-footer pd20 d-inline-block text-right">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
        </div>
    </form>
</section>
@stop