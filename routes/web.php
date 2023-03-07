<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\Chart\CobaController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\AddAdminController;
use App\Http\Controllers\Admin\KomentarController;
use App\Http\Controllers\Admin\ImgProdukController;
use App\Http\Controllers\Admin\InfoProdukController;
use App\Http\Controllers\Admin\MerkProdukController;
use App\Http\Controllers\Admin\PengunjungController;
use App\Http\Controllers\Admin\ImageBrandControlller;
use App\Http\Controllers\Admin\ImageProdukController;
use App\Http\Controllers\Admin\JenisProdukController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Admin\KategoriProdukController;
use App\Http\Controllers\Chart\ChartProdukController;
use App\Http\Controllers\Front\FrontController;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return Inertia::render('landing');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(FrontController::class)->group(function () {
    Route::get('/girldaily', 'index')->name('landing');
    Route::get('/brand', 'brand')->name('brand');
    Route::get('/makeup/product', 'MakeUp')->name('front.makeup');
    Route::get('/skincare/product', 'SkinCare')->name('front.skincare');
    Route::get('/haircare/product', 'HairCare')->name('front.haircare');
    Route::get('/nailcare/product', 'NailCare')->name('front.nailcare');
    Route::get('/bodycare/product', 'BodyCare')->name('front.bodycare');
    Route::get('/fragrance/product', 'Fragrance')->name('front.fragrance');
});

Auth::routes();

Route::controller(BaseController::class)->group(function () {
    Route::get('/home', 'index')->name('index');
});

// Akses Admin = 1
Route::prefix('b')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::controller(BaseController::class)->group(function () {
        Route::get('/welcome', 'index')->name('home.index');
    });
    Route::controller(JenisProdukController::class)->group(function () {
        Route::get('/jenis_produk', 'jenisproduk')->name('jp.index');
        Route::post('/jenis_produk/create', 'tambahjp')->name('jp.tambah');
        Route::put('/jenis_produk/update', 'updatejp')->name('jp.update');
        Route::delete('/jenis_produk/hapus', 'hapusjp')->name('jp.hapus');
    });
    Route::controller(MerkProdukController::class)->group(function () {
        Route::get('/merk_produk', 'merkproduk')->name('mp.index');
        Route::post('/merk_produk/create', 'tambahmp')->name('mp.tambah');
        Route::put('/merk_produk/update', 'updatemp')->name('mp.update');
        Route::delete('/merk_produk/hapus', 'hapusmp')->name('mp.hapus');
    });
    Route::controller(KategoriProdukController::class)->group(function () {
        Route::get('/kategori_produk', 'ktproduk')->name('kt.index');
        Route::post('/kategori_produk/create', 'tambahkt')->name('kt.tambah');
        Route::put('/kategori_produk/update', 'updatekt')->name('kt.update');
        Route::delete('/kategori_produk/hapus', 'hapuskt')->name('kt.hapus');
    });
    Route::controller(ProdukController::class)->group(function () {
        Route::get('/produk', 'produk')->name('produk.index');
        Route::get('/produk/baru', 'baruproduk')->name('produk.baru');
        Route::post('produk/add', 'addproduk')->name('produk.tambah');
        Route::get('/produk/detail/{id}', 'detailproduk')->name('produk.detail');
        Route::get('/produk/edit/{id}', 'edit')->name('produk.edit');
        Route::put('/produk/update/{id}', 'updateproduk')->name('produk.update');
        Route::delete('produk/hapus', 'hapusproduk')->name('produk.hapus');
    });
    Route::controller(ImageProdukController::class)->group(function () {
        Route::get('/img-produk', 'imgproduk')->name('imgpr.index');
        Route::get('/img-produk/baru', 'baruimgproduk')->name('imgpr.baru');
        Route::post('img-produk/add', 'addimgproduk')->name('imgpr.tambah');
        Route::delete('img-produk/hapus', 'hapusimgproduk')->name('imgpr.hapus');
    });
    Route::controller(ImageBrandControlller::class)->group(function () {
        Route::get('/image-brand', 'imageBrand')->name('imagebrand.index');
        Route::get('/image-brand/baru', 'baruimageBrand')->name('imagebrand.baru');
        Route::post('image-brand/add', 'addimageBrand')->name('imagebrand.tambah');
        Route::delete('image-brand/hapus', 'hapusimagebrand')->name('imagebrand.hapus');
    });
    Route::controller(InfoProdukController::class)->group(function () {
        Route::get('/info-produk', 'infoproduk')->name('infopr.index');
        Route::get('/info-produk/baru', 'baruinfoproduk')->name('infopr.baru');
        Route::post('info-produk/add', 'addinfoproduk')->name('infopr.tambah');
        Route::delete('info-produk/hapus', 'hapusinfoproduk')->name('infopr.hapus');
        Route::get('/info-produk/edit/{id}', 'editinfoproduk')->name('infopr.edit');
        Route::put('/info-produk/update/{id}', 'updateinfoproduk')->name('infopr.update');
    });
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard/produk', 'dashproduk')->name('dashpr.index');
        Route::get('/dashboard/transaksi', 'dashtransaksi')->name('transpr.index');
        Route::get('/dashboard/user', 'dashuser')->name('userpr.index');
        Route::get('/dashboard/kegiatan', 'dashkegiatan')->name('kegiatanpr.index');
    });
    Route::controller(AddAdminController::class)->group(function () {
        Route::get('/add/admin', 'addadmin')->name('admin.index');
        Route::get('/admin/baru', 'baruadmin')->name('admin.baru');
        Route::post('admin/add', 'tambahadmin')->name('admin.tambah');
        Route::get('/admin/edit/{id}', 'editadmin')->name('admin.edit');
        Route::put('/admin/update/{id}', 'updateadmin')->name('admin.update');
        Route::delete('admin/hapus', 'hapusadmin')->name('admin.hapus');
    });
    Route::controller(ReviewController::class)->group(function () {
        Route::get('/review/produk', 'reviewpr')->name('review.index.admin');
        Route::get('/review/produk/baru', 'barureviewpr')->name('review.baru.admin');
        Route::post('review/produk/add', 'addreviewpr')->name('review.tambah.admin');
        Route::delete('/review/produk/hapus', 'hapusreviewpr')->name('review.hapus.admin');
        Route::get('/review/produk/edit/{id}', 'editreviewpr')->name('review.edit.admin');
        Route::put('/review/produk/update/{id}', 'updatereviewpr')->name('review.update.admin');
    });
    Route::controller(KomentarController::class)->group(function () {
        Route::get('/komentar/produk', 'komentarpr')->name('komentar.index.admin');
        Route::get('/komentar/produk/baru', 'barukomentar')->name('komentar.baru.admin');
        Route::post('/komentar/produk/add', 'addkomentar')->name('komentar.tambah.admin');
        Route::delete('/komentar/produk/hapus', 'hapuskomentar')->name('komentar.hapus.admin');
        Route::get('/komentar/produk/edit/{id}', 'editkomentar')->name('komentar.edit.admin');
        Route::put('/komentar/produk/update/{id}', 'updatekomentar')->name('komentar.update.admin');
    });
    Route::controller(PengunjungController::class)->group(function () {
        Route::get('/data/pengunjung', 'pengunjung')->name('pengunjung.index');
        Route::get('/data/pengunjung/baru', 'barupengunjung')->name('pengunjung.baru');
        Route::post('data/pengunjung/tambah', 'tambahpengunjung')->name('pengunjung.tambah');
        Route::delete('/data/pengunjung/hapus', 'hapuspengunjung')->name('pengunjung.hapus');
        Route::get('/pengunjung/detail/{id}', 'detailpengunjung')->name('pengunjung.detail');

    });
    Route::controller(ChartProdukController::class)->group(function () {
        Route::get('/chart/produk', 'chartProduk')->name('chart.produk.index');
        Route::get('/chart/user', 'chartUser')->name('chart.user.index');
        Route::get('/chart/komentar-review', 'chartRC')->name('chart.rc.index');
    });
});
// End Akses Admin

// Akses Member = 2
Route::prefix('m')->middleware(['auth', 'isMember'])->group(function () {
    Route::get('/halo', function () {
        echo "Halooo Memberrr";
    });
});
// End Akses Member

// Akses Pengunjung = 3
Route::prefix('p')->middleware(['auth', 'isPengunjung'])->group(function () {
    Route::get('/halo', function () {
        echo "Halooo Pesertaaa";
    });
});
// End Akses Pengunjung

// Chart
Route::get('/chart', [App\Http\Controllers\ChartController::class, 'chartproduk']);
Route::get('/chart-coba', [App\Http\Controllers\Chart\CobaController::class, 'chart']);
// End Chart