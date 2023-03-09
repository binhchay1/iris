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
    <form action="{{ route('admin.update.services' , $service->id) }}" method="post">
        @csrf
        <div class="container-fluid">
            <div class="row form-area">
                <div class="col-md-12 form-header text-center">
                    <h1 class="form-title fs-20 pd5">Cập nhật dịch vụ : {{ $service->name }}</h1>
                </div>
                <div class="col-md-12 form-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tên</label>
                        <div class="col-sm-10 col-form-input">
                            <input type="text" name="name" value="{{ old('name', $service->name ?? null) }}" class="form-control" style="width: 40%;">
                            @if ($errors->has('name'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nội dung</label>
                        <div class="col-sm-10 col-form-input">
                            <input type="text" name="description" value="{{ old('description', $service->description ?? null) }}" class="form-control" style="width: 40%;">
                            @if ($errors->has('description'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('description') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Đường dẫn</label>
                        <div class="col-sm-10 col-form-input">
                            <input type="text" name="url" value="{{ old('url', $service->url ?? null) }}" class="form-control" style="width: 40%;">
                            @if ($errors->has('url'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('url') }}</p>
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