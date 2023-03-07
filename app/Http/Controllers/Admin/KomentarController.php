<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KomentarRequest;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function komentarpr()
    {
        $komentar = Komentar::all();
        return view('Admin.Komentar.komentar', [
            'komentar'  => $komentar,
        ]);
    }

    public function barukomentar()
    {
        $produk = Produk::all();
        $user   = User::all();
        return view('Admin.Komentar.komentar-create', [
            'produk' => $produk,
            'user'   => $user,
        ]);
    }

    public function addkomentar(KomentarRequest $request)
    {
        // dd($request->all());

        Komentar::create([
            'name'                         => $request->name,
            'nama_produk'                  => $request->nama_produk,
            'komentar'                     => $request->komentar,
        ]);

        return redirect()->route('komentar.index.admin')->with('Ok', "Komentar $request->nama_produk  berhasil disimpan");
    }

    public function hapuskomentar(Request $request)
    {
        // dd($request->all());

        $komentar = Komentar::findOrFail($request->id);  // Cari data

        $komentar->delete(); // Hapus data di database
        return redirect()->back();
    }

    public function editkomentar($id)
    {
        $produk = Produk::all();
        $user   = User::all();

        $komentar = Komentar::findOrFail($id);
        return view('Admin.Komentar.komentar-update', compact('produk', 'user', 'komentar'));
    }

    public function updatekomentar(Request $request, $id)
    {
        // dd($request->all());

        $komentar = Komentar::findOrFail($id);

        $komentar->name                = $request->name;
        $komentar->nama_produk         = $request->nama_produk;
        $komentar->komentar              = $request->komentar;


        // Menyimpan data perubahan
        $komentar->update();

        // Setelah proses perubahan selesai diantar ke halaman index
        return redirect()->route('komentar.index.admin');
    }
}
