@extends('template.base')

@section('title', 'Form Produk Detail')

@section('dila')
<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Detail Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Detail Produk</li>
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
                <form action="{{ route('produk.tambah') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="foto_produk">Foto Produk</label>
                        <div class="input-group" id="foto_produk">
                            <div class="custom-file" id="foto_produk">
                                <input type="file" name="foto_produk" class="custom-file-input @error('foto_produk') is-invalid @enderror" id="foto_produk">
                                <label class="custom-file-label" for="foto_produk">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                            @error('foto_produk')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="merk_produk">Merk Produk</label>
                        <select class="custom-select @error('merk_produk') is-invalid @enderror" name="merk_produk" id="merk_produk">
                            <option value="">Pilih Merk Produk</option>
                            @foreach($merk_produk as $row)
                            <option value="{{ $row->id }}" {{ old('merk_produk') == $row->id ? 'selected' : '' }}>{{ $row->merk_produk }}</option>
                            @endforeach
                        </select>
                        @error('merk_produk')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" value="{{old('nama_produk')}}" id="nama_produk" placeholder="Masukkan  Nama Produk">
                        @error('nama_produk')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_produk">Jenis Produk</label>
                        <select class="custom-select @error('jenis_produk') is-invalid @enderror" name="jenis_produk" id="jenis_produk">
                            <option value="">Pilih Jenis Produk</option>
                            @foreach($jenis_produk as $row)
                            <option value="{{ $row->id }}" {{ old('jenis_produk') == $row->id ? 'selected' : '' }}>{{ $row->jenis_produk }}</option>
                            @endforeach
                        </select>
                        @error('jenis_produk')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori_produk">Kategori Produk</label>
                        <select class="custom-select @error('kategori_produk') is-invalid @enderror" name="kategori_produk" id="kategori_produk">
                            <option value="">Pilih Jenis Produk</option>
                            @foreach($kategori_produk as $row)
                            <option value="{{ $row->id }}" {{ old('kategori_produk') == $row->id ? 'selected' : '' }}>{{ $row->kategori_produk }}</option>
                            @endforeach
                        </select>
                        @error('kategori_produk')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kandungan_produk">Kandungan Produk</label>
                        <input type="text" class="form-control @error('kandungan_produk') is-invalid @enderror" name="kandungan_produk" value="{{old('kandungan_produk')}}" id="kandungan_produk" placeholder="Masukkan Kandungan Produk">
                        @error('kandungan_produk')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{old('harga')}}" id="harga" placeholder="Masukkan Harga Produk">
                        @error('harga')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{old('stok')}}" id="stok" placeholder="Masukkan Stok Produk">
                        @error('stok')
                        <div class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi Produk</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{old('deskripsi')}}" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi Produk"></textarea>
                        @error('deskripsi')
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