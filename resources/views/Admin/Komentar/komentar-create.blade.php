@extends('template.base')

@section('title', 'Tambah Komentar Produk')

@section('dila')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Komentar Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('komentar.index.admin') }}">Back</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Komentar Produk</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ENd Header -->

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card-body">
                <!-- Alert -->
                @if(Session::get('Ok'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('Ok') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                @if(Session::get('Oke'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('Oke') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <!-- End Alert -->
                <form action="{{ route('komentar.tambah.admin') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <select class="custom-select @error('name') is-invalid @enderror" name="name" id="name">
                            <option value="">Pilih Nama</option>
                            @foreach($user as $row)
                            <option value="{{ $row->id }}" {{ old('name') == $row->id ? 'selected' : '' }}>{{ $row->name }}</option>
                            @endforeach
                        </select>
                        @error('name')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <select class="custom-select @error('nama_produk') is-invalid @enderror" name="nama_produk" id="nama_produk">
                            <option value="">Pilih Nama Produk</option>
                            @foreach($produk as $row)
                            <option value="{{ $row->id }}" {{ old('nama_produk') == $row->id ? 'selected' : '' }}>{{ $row->nama_produk }}</option>
                            @endforeach
                        </select>
                        @error('nama_produk')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="komentar">Komentar Produk</label>
                        <textarea class="form-control @error('komentar') is-invalid @enderror" name="komentar" value="{{old('komentar')}}" id="komentar" rows="3" placeholder="Masukkan Komentar Produk"></textarea>
                        @error('komentar')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- End Main Content -->

@endsection