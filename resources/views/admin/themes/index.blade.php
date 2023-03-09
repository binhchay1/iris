@extends('layouts.adminlte-custom')

@section('title', 'Giao diện | IRIS')

@section('content_header')
<div style="display: flex;justify-content: space-between;">
    <h1 class="m-0 text-dark">Giao diện</h1>
</div>
@stop

@section('content')
@include('sweetalert::alert')

<section class="content mt-4 fnz-style-table">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 overflow-auto" id="main-themes-slide">
                <div class="card" id="slide-1">
                    <div class="card-header bg-blue">
                        Slide
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($themeSlides as $key => $value)
                            <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                                <div id="image-preview-slide-{{ $key + 1 }}" alt="{{ $value->name }}" class="img-fluid rounded image-preview" data-value="{{ $key + 1 }}" style="background-image: url('{{ asset($value->url) }}');"></div>
                                <div>Slide {{ $key + 1 }}</div>
                                <form method="post" action="{{ route('upload-image') }}" enctype="multipart/form-data" id="upload-file-form-slide-{{ $key + 1 }}">
                                    @csrf
                                    <input id="upload-file-slide-{{ $key + 1 }}" type="file" name="img" class="img upload-file" />
                                    <input type="hidden" value="{{ $value->id }}" name="id">
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 overflow-auto">
                <div class="card" id="slide-1">
                    <div class="card-header bg-blue">
                        Description
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('upload-description') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                @if($description->isNotEmpty())
                                <input type="text" class="form-control" id="description" name="description" placeholder="Nhập mô tả" value="{{ $description[0]->note }}">
                                @else
                                <input type="text" class="form-control" id="description" name="description" placeholder="Nhập mô tả">
                                @endif
                                <button class="btn btn-success mt-2" type="submit">Thay đổi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 overflow-auto" id="main-themes-partner">
                <div class="card" id="slide-1">
                    <div class="card-header bg-blue">
                        Partner
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form method="post" action="{{ route('create-partner') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <button class="btn btn-success mt-2" type="submit">Thêm partner</button>
                                </div>
                            </form>
                        </div>
                        <div class="row">
                            @foreach($themePartners as $key => $value)
                            <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                                <div id="image-preview-partner-{{ $key + 1 }}" alt="{{ $value->name }}" class="img-fluid rounded image-preview-partner mt-3" data-value="{{ $key + 1 }}" style="background-image: url('{{ asset($value->url) }}');"></div>
                                <div>Partner {{ $key + 1 }}</div>
                                <form method="post" action="{{ route('delete-partner') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" value="{{ $value->id }}" name="id">
                                        <button type="submit" class="btn-x">X</button>
                                    </div>
                                </form>
                                <form method="post" action="{{ route('upload-partner') }}" enctype="multipart/form-data" id="upload-file-form-partner-{{ $key + 1 }}">
                                    @csrf
                                    <input id="upload-file-partner-{{ $key + 1 }}" type="file" name="img" class="img upload-file" />
                                    <input type="hidden" value="{{ $value->id }}" name="id">
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 overflow-auto">
                <div class="card" id="slide-1">
                    <div class="card-header bg-blue">
                        Social
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('upload-social') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <p>Facebook</p>
                                @if($facebook->isNotEmpty())
                                <input type="text" class="form-control" id="social" name="social" placeholder="Nhập link" value="{{ $facebook[0]->note }}">
                                <input type="hidden" value="{{ $facebook[0]->id }}" name="id">
                                @else
                                <input type="text" class="form-control" id="social" name="social" placeholder="Nhập link">
                                <input type="hidden" value="facebook" name="type">
                                @endif
                                <button class="btn btn-success mt-2" type="submit">Thay đổi</button>
                            </div>
                        </form>
                        <form method="post" action="{{ route('upload-social') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <p>Insta</p>
                                @if($insta->isNotEmpty())
                                <input type="text" class="form-control" id="social" name="social" placeholder="Nhập link" value="{{ $insta[0]->note }}">
                                <input type="hidden" value="{{ $insta[0]->id }}" name="id">
                                @else
                                <input type="text" class="form-control" id="social" name="social" placeholder="Nhập link">
                                <input type="hidden" value="insta" name="type">
                                @endif
                                <button class="btn btn-success mt-2" type="submit">Thay đổi</button>
                            </div>
                        </form>
                        <form method="post" action="{{ route('upload-social') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <p>Youtube</p>
                                @if($youtube->isNotEmpty())
                                <input type="text" class="form-control" id="social" name="social" placeholder="Nhập link" value="{{ $youtube[0]->note }}">
                                <input type="hidden" value="{{ $youtube[0]->id }}" name="id">
                                @else
                                <input type="text" class="form-control" id="social" name="social" placeholder="Nhập link">
                                <input type="hidden" value="youtube" name="type">
                                @endif
                                <button class="btn btn-success mt-2" type="submit">Thay đổi</button>
                            </div>
                        </form>
                        <form method="post" action="{{ route('upload-social') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <p>SĐT</p>
                                @if($sdt->isNotEmpty())
                                <input type="text" class="form-control" id="social" name="social" placeholder="Nhập link" value="{{ $sdt[0]->note }}">
                                <input type="hidden" value="{{ $sdt[0]->id }}" name="id">
                                @else
                                <input type="text" class="form-control" id="social" name="social" placeholder="Nhập link">
                                <input type="hidden" value="sdt" name="type">
                                @endif
                                <button class="btn btn-success mt-2" type="submit">Thay đổi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    window.addEventListener("load", function() {
        document.getElementById('main-themes-slide').addEventListener("click", function(e) {
            const tgt = e.target;
            let id = tgt.dataset.value;

            if (id === undefined || id == null || id == 'undefined') {
                return;
            }

            let idImage = '#image-preview-slide-' + id;
            let idUpload = '#upload-file-slide-' + id;
            let idForm = '#upload-file-form-slide-' + id;
            $(idUpload).click();

            $(idUpload).on("change", function() {
                $(idForm).submit();
            });
        });

        document.getElementById('main-themes-partner').addEventListener("click", function(e) {
            const tgt = e.target;
            let id = tgt.dataset.value;

            if (id === undefined || id == null || id == 'undefined') {
                return;
            }

            let idImage = '#image-preview-partner-' + id;
            let idUpload = '#upload-file-partner-' + id;
            let idForm = '#upload-file-form-partner-' + id;
            console.log(idUpload);
            $(idUpload).click();

            $(idUpload).on("change", function() {
                $(idForm).submit();
            });
        });
    });
</script>

<style>
    .image-preview {
        width: 180px;
        height: 180px;
        background-position: center center;
        background-size: cover;
        display: inline-block;
    }

    .image-preview-partner {
        width: 115px;
        height: 24px;
        background-position: center center;
        background-size: cover;
        display: inline-block;
    }

    .upload-file {
        display: none
    }
</style>

<!-- Modal -->
@include('include.modal_user_delete')
@stop