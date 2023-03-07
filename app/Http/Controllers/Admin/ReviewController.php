<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Produk;
use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\ReviewProduk;
use App\Http\Requests\ReviewProdukRequest;

class ReviewController extends Controller
{
    public function reviewpr()
    {
        $review = Review::all();
        return view('Admin.Review.review', [
            'review'  => $review,
        ]);
    }

    public function barureviewpr()
    {
        $produk = Produk::all();
        $user   = User::all();
        return view('Admin.Review.reviewpr-create', [
            'produk' => $produk,
            'user'   => $user,
        ]);
    }

    public function addreviewpr(ReviewProduk $request)
    {
        // dd($request->all());

        Review::create([
            'name'                         => $request->name,
            'nama_produk'                  => $request->nama_produk,
            'review'                       => $request->review,
            'image_review'                 => $request->file('image_review')->store('img-review'),
        ]);

        return redirect()->route('review.index.admin')->with('Ok', "Review $request->nama_produk  berhasil disimpan");
    }

    public function hapusreviewpr(Request $request)
    {
        // dd($request->all());

        $review = Review::findOrFail($request->id);  // Cari data
        Storage::delete($review->image_review); // Hapus file directory system
        $review->delete(); // Hapus data di database
        return redirect()->back();
    }

    public function editreviewpr($id)
    {
        $produk = Produk::all();
        $user   = User::all();

        $review = Review::findOrFail($id);
        return view('Admin.Review.reviewpr-update', compact('produk', 'user', 'review'));
    }

    public function updatereviewpr(Request $request, $id)
    {
        // dd($request->all());

        $review = Review::findOrFail($id);
        //Proses Ubah datanya


        if ($request->hasFile('image')) {

            //upload new image
            $image_review = $request->file('image_review');
            $image_review->storeAs('public/storage/img-review', $image_review->hashName());

            //delete old image
            Storage::delete('public/storage/img-review' . $review->image_review);

            //update post with new image
            $review->update([
                'image_review'     => $image_review->hashName(),
            ]);
        } else {

            $review->name                = $request->name;
            $review->nama_produk         = $request->nama_produk;
            $review->review              = $request->review;
            $review->image_review        = $request->file('image_review')->store('img-review');

        }

        // Menyimpan data perubahan
        $review->update();

        // Setelah proses perubahan selesai diantar ke halaman index
        return redirect()->route('review.index.admin');
    }
}
