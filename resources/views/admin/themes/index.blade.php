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
            <div class="col-lg-12 overflow-auto" id="main-themes">
                <div class="card" id="slide-1">
                    <div class="card-header bg-blue">
                        Slide
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($themes as $key => $value)
                            <div class="col-3 d-flex flex-column justify-content-center align-items-center">
                                <div id="image-preview-{{ $key + 1 }}" alt="{{ $value->name }}" class="img-fluid rounded image-preview" data-value="{{ $key + 1 }}" style="background-image: url('{{ asset($value->url) }}');"></div>
                                <input id="upload-file-{{ $key + 1 }}" type="file" name="image" class="img upload-file" />
                                <div>Slide {{ $key + 1 }}</div>
                            </div>
                            <form id="image-upload-form-{{ $key + 1 }}" enctype="multipart/form-data" action="{{ route('upload-image') }}" method="post">
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 overflow-auto" id="main-themes">
                <div class="card" id="slide-1">
                    <div class="card-header bg-blue">
                        Description
                    </div>
                    <div class="card-body row">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Nhập mô tả" value="{{ old('description', $product->description ?? null) }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 overflow-auto" id="main-themes">
                <div class="card" id="slide-1">
                    <div class="card-header bg-blue">
                        Partner
                    </div>
                    <div class="card-body">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    window.addEventListener("load", function() {
        document.getElementById('main-themes').addEventListener("click", function(e) {
            const tgt = e.target;
            let id = tgt.dataset.value;
            let idImage = '#image-preview-' + id;
            let idUpload = '#upload-file-' + id;
            let idForm = '#image-upload-form-' + id;

            $(idUpload).click();

            $(idUpload).on("change", function() {
                let files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return;

                if (/^image/.test(files[0].type)) {
                    let reader = new FileReader();
                    reader.readAsDataURL(files[0]);

                    reader.onloadend = function() {
                        $(idImage).css("background-image", "url(" + this.result + ")");
                    }
                }

                $(idForm).submit();

                $(idForm).on('submit', (function(e) {
                    e.preventDefault();
                    let formData = new FormData(this);

                    console.log(formData)

                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            console.log("success");
                            console.log(data);
                        },
                        error: function(data) {
                            console.log("error");
                            console.log(data);
                        }
                    });
                }));
            });
        })
    });

    $(document).ready(function(e) {


        $("#ImageBrowse").on("change", function() {

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

    .upload-file {
        display: none
    }
</style>

<!-- Modal -->
@include('include.modal_user_delete')
@stop