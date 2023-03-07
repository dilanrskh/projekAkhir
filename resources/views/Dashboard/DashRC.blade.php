@extends('template.base')

@section('title', 'Dashboard Kegiatan')

@section('dila')

<!-- Page header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard Kegiatan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Back</a></li>
                    <li class="breadcrumb-item active">Dashboard Kegiatan</li>
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
            <div class="col-lg-4 col-5">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $review }}</h3>
                        <p>Data Review</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="{{ route('review.index.admin') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-5">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{ $komentar}}</h3>
                        <p>Data Komentar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-6">

                <div class="small-box bg-indigo disabled color-palette">
                    <div class="inner">
                        <h3>Data Chart</h3>
                        <p>Review dan Komentar</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-chatbubbles"></i>
                    </div>
                    <a href="{{ route('chart.rc.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

        </div>


    </div>
</section>
<!-- ENd Main Content -->


@endsection