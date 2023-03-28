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
    <form action="{{ route('admin.store.works') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container-fluid">
            <div class="row form-area">
                <div class="col-md-12 form-header text-center">
                    <h1 class="form-title fs-20 pd5">Thêm công việc</h1>
                </div>
                <div class="col-md-12 form-body">
                    <div class="form-group row">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tiêu đề</label>
                        <div class="col-sm-10 col-form-input">
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" style="width: 40%;">
                            @if ($errors->has('title'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('title') }}</p>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nội dung</label>
                        <div class="col-sm-10 col-form-input">
                            <input type="text" name="description" value="{{ old('description') }}" class="form-control" style="width: 40%;">
                            @if ($errors->has('description'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('description') }}</p>
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
                        <label class="col-sm-2 col-form-label">Loại</label>
                        <div class="col-sm-10 col-form-input">
                            <select name="type" class="form-control" style="width: 40%;" value="{{ old('type') }}">
                                <option value="film">Film</option>
                                <option value="photography">Photography</option>
                            </select>
                            @if ($errors->has('type'))
                            <p class="help is-danger" style="color: red;">{{ $errors->first('type') }}</p>
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