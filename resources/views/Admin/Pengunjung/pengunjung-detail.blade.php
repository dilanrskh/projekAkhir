@extends('template.base')

@section('title', 'Profile')

@section('dila')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('pengunjung.index') }}">Back</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Data Profile</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ENd Header -->

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('storage/'.$pengunjung->image_user) }}" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">
                    {{ $pengunjung->name }} <br> @ <span class="text-muted text-center">{{ Auth::user()->username }}</span>
                </h3>
                <p class="text-muted text-center">{{ Auth::user()->name }} | 3</p>
                <ul class="list-group list-group-unbordered mb-3 text-center">
                    <li class="list-group-item">
                        <b class="text-center">{{ $pengunjung->bio }}</b>
                    </li>
                </ul>
                <strong><i class="fa-solid fa-calendar-days"></i>&ensp; Tanggal Lahir</strong>
                <p class="text-muted">
                {{ $pengunjung->tanggal_lahir }}
                </p>
                <hr>
                <strong><i class="fa-solid fa-tree-city"></i>&ensp; Tempat Lahir</strong>
                <p class="text-muted">{{ $pengunjung->tempat_lahir }}</p>
                <hr>
                <strong><i class="fa-solid fa-person-half-dress"></i>&ensp; Jenis Kelamin</strong>
                <p class="text-muted">{{ $pengunjung->jenis_kelamin }}</p>
                <hr>
                <strong><i class="fa-solid fa-phone-volume"></i>&ensp; Nomor Telepon</strong>
                <p class="text-muted">{{ $pengunjung->no_telp }}</p>
                <hr>
                <strong><i class="fa-solid fa-house-chimney"></i>&ensp; Alamat Rumah</strong>
                <p class="text-muted">{{ $pengunjung->alamat }}</p>
            </div>
        </div>
    </div>
</section>


<!-- End Content -->
@endsection