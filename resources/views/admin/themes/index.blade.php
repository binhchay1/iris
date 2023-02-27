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
            @for($i = 0; $i < $page; $i++) <div class="col-lg-12 overflow-auto" id="main-themes">
                <div class="card" id="slide-1">
                    <div class="card-header bg-blue">
                        Slide {{ $i + 1 }}
                    </div>
                    <div class="card-body row">
                        <div class="col-6 d-flex justify-content-around">
                            <figure class="figure">
                                <div id="image-preview-background-left-slide-{{ $i + 1 }}" alt="Background left" class="figure-img img-fluid rounded image-preview" data-value="background-left-slide-1"></div>
                                <input id="uploadFile" type="file" name="image" class="img upload-file" />
                                <figcaption class="figure-caption text-center">Background left</figcaption>
                            </figure>

                            <figure class="figure">
                                <div id="image-preview-small-left-slide-{{ $i + 1 }}" alt="Small image left" class="figure-img img-fluid rounded image-preview" data-value="small-left-slide-1"></div>
                                <input id="uploadFile" type="file" name="image" class="img upload-file" />
                                <figcaption class="figure-caption text-center">Small image left</figcaption>
                            </figure>
                        </div>
                        <div class="col-6 d-flex justify-content-around">
                            <figure class="figure">
                                <div id="image-preview-background-left-slide-{{ $i + 1 }}" alt="Background right" class="figure-img img-fluid rounded image-preview" data-value="background-right-slide-1"></div>
                                <input id="uploadFile" type="file" name="image" class="img upload-file" />
                                <figcaption class="figure-caption text-center">Background right</figcaption>
                            </figure>

                            <figure class="figure">
                                <div id="image-preview-small-right-slide-{{ $i + 1 }}" alt="Small image right" class="figure-img img-fluid rounded image-preview" data-value="Small-right-slide-1"></div>
                                <input id="uploadFile" type="file" name="image" class="img upload-file" />
                                <figcaption class="figure-caption text-center">Small image right</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    window.addEventListener("load", function() {
        document.getElementById('main-themes').addEventListener("click", function(e) {
            const tgt = e.target;
            console.log("az clicked", tgt.dataset.value)

            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return;

            if (/^image/.test(files[0].type)) {
                var reader = new FileReader();
                reader.readAsDataURL(files[0]);

                reader.onloadend = function() {
                    $("#image-preview").css("background-image", "url(" + this.result + ")");
                }
            }
        })
    })

    $(function() {
        $("#uploadFile").on("change", function() {

        });
    });

    $('#image-preview').click(function() {
        $('#uploadFile').click();
    });
</script>

<style>
    .image-preview {
        width: 180px;
        height: 180px;
        background-position: center center;
        background-size: cover;
        display: inline-block;
        background-image: url('img/960x1100.png');
    }

    .upload-file {
        display: none
    }
</style>

<!-- Modal -->
@include('include.modal_user_delete')
@stop