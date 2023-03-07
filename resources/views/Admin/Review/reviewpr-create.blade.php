@extends('template.base')

@section('title', 'Tambah Review Produk')

@section('dila')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Review Produk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('review.index.admin') }}">Back</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Review Produk</li>
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
                <form action="{{ route('review.tambah.admin') }}" method="POST" enctype="multipart/form-data">
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
                    
                    <!-- Foto Produk 1 -->
                    <div class="form-group">
                        <label for="image_review">Image Review</label>
                        <div class="input-group" id="image_review">
                            <div class="custom-file" id="image_review">
                                <input type="file" name="image_review" class="custom-file-input @error('image_review') is-invalid @enderror" id="image_review">
                                <label class="custom-file-label" for="image_review">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                            @error('image_review')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="review">Review Produk</label>
                        <textarea class="form-control @error('review') is-invalid @enderror" name="review" value="{{old('review')}}" id="review" rows="3" placeholder="Masukkan review Produk"></textarea>
                        @error('review')
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