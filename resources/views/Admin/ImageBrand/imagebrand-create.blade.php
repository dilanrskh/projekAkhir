@extends('template.base')

@section('title', 'Tambah Image Brand')

@section('dila')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Image Brand</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('imagebrand.index') }}">Back</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Image Brand</li>
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
                <form action="{{ route('imagebrand.tambah') }}" method="POST" enctype="multipart/form-data">
                    @csrf

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
                    
                    <!-- Foto Produk 1 -->
                    <div class="form-group">
                        <label for="image_brand">Image Brand</label>
                        <div class="input-group" id="image_brand">
                            <div class="custom-file" id="image_brand">
                                <input type="file" name="image_brand" class="custom-file-input @error('image_brand') is-invalid @enderror" id="image_brand">
                                <label class="custom-file-label" for="image_brand">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                            @error('image_brand')
                            <div class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- End Main Content -->

@endsection