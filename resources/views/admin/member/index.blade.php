@extends('layouts.adminlte-custom')

@section('title', 'Thành viên | IRIS')

@section('content_header')
<div style="display: flex;justify-content: space-between;">
    <h1 class="m-0 text-dark">Thành viên</h1>
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
            <label class="">Chức vụ</label>
            <input type="text" name="role" placeholder="Nhập chức vụ" value="{{ old('role', request()->role ?? null) }}" class="form-control">
        </div>
        <div class="mb-2 ml-2">
            <label class="w-100"> &nbsp;</label>
            <button type="submit" class="btn btn-primary pl-5 pr-5 pl-sm-3 pr-sm-3">Tìm kiếm</button>
            <a href="{{ route('admin.create.members') }}" type="submit" class="btn btn-warning ml-2 pl-5 pr-5 pl-sm-3 pr-sm-3">Tạo thành viên</a>
        </div>
    </div>
</form>

<section class="content mt-4 fnz-style-table">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 overflow-auto">
                <table class="table bg-white table-hover table-nowrap" id="member-table-list">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Chức vụ</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col" class="pl-4">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($member->items() as $item)
                        <tr>
                            <td>
                                {{ (($member->currentPage() - 1) * $member->perPage()) + $loop->iteration }}
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->gender == 1 ? 'Nam' : 'Nữ' }}</td>
                            <td>
                                <img src="{{ url($item->img) }}" width="150" height="100">
                            </td>
                            <td>
                                {{ $item->role }}
                            </td>
                            <td>
                                @if ($item->created_at)
                                {{ $item->created_at->format('Y-m-d h:i:s') }}
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.update.members.view', $item->id) }}" class="btn btn-success" role="button"><i class="fas fa-edit"></i></a>
                                <a href="javascript:void(0)" data-id="{{ $item->id }}" data-name="{{ $item->name }}" class="btn btn-md btn-danger delete_member ml-2"><i class="fas fa-lock"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @if ($member->hasPages())
        <div class="col-12 clearfix text-right">
            {{ $member->appends($_GET)->links("pagination::bootstrap-4") }}
        </div>
        @endif
    </div>
</section>

<!-- Modal -->
@include('include.modal_user_delete')
@stop