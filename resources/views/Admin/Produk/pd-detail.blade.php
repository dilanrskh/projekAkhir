@extends('template.base')

@section('title', 'Data Detail Produk')

@section('dila')

<!-- Header -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>
                    Data Detail Produk
                </h1>

            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('produk.index') }}">Back</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Data Detail Produk</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ENd Header -->

<section class="content">

    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none">{{ $produk->merkproduk->merk_produk }} Review</h3>
                    <div class="col-12">
                        <img src="{{ asset('storage/'.$produk->foto_produk) }}" class="product-image" alt="Product Image">
                    </div>
                    <div class="col-12 product-image-thumbs">
                        @foreach($image_produk as $row)
                        <div class="product-image-thumb active"><img src="{{ asset('storage/'.$row->image_produk) }}" alt="Product Image"></div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3 text-bold">{{ $produk->merkproduk->merk_produk }} Review</h3>
                    <h5 class="text-regular" style="color: #adb5bd;">{{ $produk->nama_produk }}</h5>
                    <p>{{ $produk->deskripsi }}</p>
                    <hr>
                    <h4>Kategori Produk</h4>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-default text-center active">
                            <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
                            {{ $produk->kategoriproduk->kategori_produk }}
                        </label>
                    </div>
                    <h4 class="mt-3">Jenis Produk</h4>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-default text-center">
                            <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                            {{ $produk->jenisproduk->jenis_produk }}
                        </label>
                    </div>
                    <br>
                    <span class="mt-1">Stok : {{ $produk->stok }}</span>
                    <div class="btn btn-block btn-light btn-sm mt-1">
                        <h2 class="mb-0">
                            Rp. {{ $produk->harga }}
                        </h2>
                    </div>
                    <div class="mt-4">
                        <div class="btn btn-block btn-outline-secondary btn-sm">
                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                            Add to Cart
                        </div>
                        <div class="btn btn-block btn-outline-secondary">
                            <i class="fas fa-heart fa-lg mr-2"></i>
                            Add to Wishlist
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                        <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                        <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                        <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
                    </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                    @foreach($info_produk as $row)
                    <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{ $row->information}} </div>
                    @endforeach

                    @foreach($review as $row)
                    <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                        <h5>Name: {{ $row->user->name }}</h5>
                        {{ $row->review }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

</section>

<!-- Script Js -->

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('dist/js/adminlte.min.js?v=3.2.0')}}"></script>

<script src="{{asset('dist/js/demo.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.product-image-thumb').on('click', function() {
            var $image_element = $(this).find('img')
            $('.product-image').prop('src', $image_element.attr('src'))
            $('.product-image-thumb.active').removeClass('active')
            $(this).addClass('active')
        })
    })
</script>

<!-- End Script -->


@endsection