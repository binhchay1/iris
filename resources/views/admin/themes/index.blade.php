@extends('layouts.adminlte-custom')

@section('title', 'Giao diện | IRIS')

@section('content_header')
<div style="display: flex;justify-content: space-between;">
    <h1 class="m-0 text-dark">Giao diện</h1>
</div>
@stop

@section('content')
@include('sweetalert::alert')


@include('include.modal_user_delete')
@stop