@extends('layouts.adminlte-custom')

@section('title', 'SILI - KIT')

@section('content_header')
<h1 class="m-0 text-dark">Trang chính</h1>
@stop

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-danger">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">
                            <i class="fas fa-chart-pie mr-1"></i>
                            Doanh thu trong năm {{ date('Y') }} ( <span id="total-order"></span> VNĐ )
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="tab-content p-0">
                            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas id="revenue-chart-canvas" height="300" style="height: 300px; display: block; width: 900px;" width="900" class="chartjs-render-monitor"></canvas>
                            </div>
                            <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas id="sales-chart-canvas" height="300" style="height: 300px; display: block; width: 900px;" class="chartjs-render-monitor" width="900"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header border-0">
                        <h3 class="card-title">Danh sách sản phẩm bán được trong {{ date('m/Y') }}</h3>
                    </div>
                    <div class="card-body table-responsive p-0" style="overflow-y:auto;" id="table-scroll-product">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Tên</th>
                                    <th>Số lượng bán được</th>
                                    <th>Tổng doanh thu</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title text-white">Doanh thu theo <span id="date-card-text"></span></h3>
                        <div class="card-tools d-flex">
                            <div class="dropdown">
                                <button type="button" class="btn btn-tool" data-date-format="yyyy" id="yearPicker">
                                    Theo năm
                                </button>
                            </div>
                            <div class="dropdown">
                                <button type="button" class="btn btn-tool" data-date-format="yyyy-mm" id="monthPicker">
                                    Theo tháng
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <div id="pieChart-area">
                            <div class="d-none" id="message-none">
                                <h3>Không có dữ liệu</h3>
                            </div>
                            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 764px;" width="764" height="250" class="chartjs-render-monitor"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card card-success">
                    <div class="card-header border-0">
                        <h3 class="card-title">Danh sách trong tháng </h3>
                    </div>
                    <div class="card-body table-responsive p-0" style="overflow-y:auto;" id="table-scroll-schedule">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop