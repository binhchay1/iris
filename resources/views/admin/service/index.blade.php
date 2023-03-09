@extends('layouts.adminlte-custom')

@section('title', 'Dịch vụ | IRIS')

@section('content_header')
<div style="display: flex;justify-content: space-between;">
    <h1 class="m-0 text-dark">Dịch vụ</h1>
</div>
@stop

@section('content')
@include('sweetalert::alert')

<form action="" id="filter-product" method="get">
    <div class="d-flex">
        <div class="mb-2 ml-2">
            <label class="">Tên</label>
            <input type="text" name="name" placeholder="Nhập tên" value="{{ old('name', request()->name ?? null) }}" class="form-control">
        </div>
        <div class="mb-2 ml-2">
            <label class="w-100"> &nbsp;</label>
            <button type="submit" class="btn btn-primary pl-5 pr-5 pl-sm-3 pr-sm-3">Tìm kiếm</button>
            <a href="{{ route('admin.create.services') }}" type="submit" class="btn btn-warning ml-2 pl-5 pr-5 pl-sm-3 pr-sm-3">Tạo dịch vụ</a>
        </div>
    </div>
</form>

<section class="content mt-4 fnz-style-table">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 overflow-auto">
                <table class="table bg-white table-hover table-nowrap" id="service-table-list">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Nội dung</th>
                            <th scope="col">Đường dẫn</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col" class="pl-4">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($service->items() as $item)
                        <tr>
                            <td>
                                {{ (($service->currentPage() - 1) * $service->perPage()) + $loop->iteration }}
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>
                                {{ $item->description }}
                            </td>
                            <td>
                                {{ $item->url }}
                            </td>
                            <td>
                                @if ($item->created_at)
                                {{ $item->created_at->format('Y-m-d h:i:s') }}
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.update.services.view', $item->id) }}" class="btn btn-success" role="button"><i class="fas fa-edit"></i></a>
                                <a href="javascript:void(0)" data-id="{{ $item->id }}" data-name="{{ $item->name }}" class="btn btn-md btn-danger delete_service ml-2"><i class="fas fa-lock"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if ($service->hasPages())
        <div class="col-12 clearfix text-right">
            {{ $service->appends($_GET)->links("pagination::bootstrap-4") }}
        </div>
        @endif
    </div>
</section>

<!-- Modal -->
@include('include.modal_user_delete')
@stop