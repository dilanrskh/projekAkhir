@extends('template.base')

@section('title', 'Dashboard User')

@section('dila')

<!-- Page header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Back</a></li>
                    <li class="breadcrumb-item active">Dashboard User</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- End Header -->

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">

        <div class="row">
            <!-- Data User Utama -->
            <div class="col-lg-4 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $admin }}</h3>
                        <p>Data Admin</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('produk.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $member }}</h3>
                        <p>Data Member</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{ $pengunjung }}</h3>
                        <p>Data Pengunjung</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- End Data User Utama -->

            <!-- Data User Member atau Pengunjung -->
            <div class="col-lg-4 col-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Data user</p>
                        <span class="text-disable">Melakukan review</span>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i><i class="fa-light fa-memo-pad"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Data user</p>
                        <span class="text-disable">Memberikan Komentar</span>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i><i class="fa-light fa-memo-pad"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>0</h3>
                        <p>Data user</p>
                        <span class="text-disable">Melakukan Pembelian</span>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i><i class="fa-light fa-memo-pad"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- End Data User Member atau Pengunjung  -->

            <div class="col-lg-4 col-6">
                <div class="small-box bg-maroon">
                    <div class="inner">
                        <h3 class="text-center">Chart User</h3>
                    </div>
                    <a href="{{ route('chart.user.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ENd Main Content -->


@endsection

@section('script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="/public/plugins/chart.js/Chart.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@endsection