<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Pengunjung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PengunjungRequest;

class PengunjungController extends Controller
{
    public function pengunjung()
    {
        $pengunjung = Pengunjung::all();
        return view('Admin.Pengunjung.pengunjung', [
            'pengunjung'  => $pengunjung,
        ]);
    }

    public function barupengunjung()
    {
        return view('Admin.Pengunjung.pengunjung-create');
    }

    public function tambahpengunjung(PengunjungRequest $request)
    {
        //    dd($request->all()); 

        $pengunjung                      = new Pengunjung();
        $pengunjung->name                = $request->name;
        $pengunjung->tanggal_lahir       = $request->tanggal_lahir;
        $pengunjung->tempat_lahir        = $request->tempat_lahir;
        $pengunjung->jenis_kelamin       = $request->jenis_kelamin;
        $pengunjung->no_telp             = $request->no_telp;
        $pengunjung->alamat              = $request->alamat;
        $pengunjung->bio                 = $request->bio;
        $pengunjung->role                = 3;
        $pengunjung->image_user          = $request->file('image_user')->store('image-user');

        $pengunjung->save();

        return redirect()->route('pengunjung.index')->with('Ok', "Berhasil Menyimpan Data $request->name");
    }

    public function hapuspengunjung(Request $request)
    {
        $pengunjung = Pengunjung::findOrFail($request->id);  // Cari data
        Storage::delete($pengunjung->image_user); // Hapus file directory system
        $pengunjung->delete(); // Hapus data di database
        return redirect()->back();
    }

    public function detailpengunjung($id)
    {
        $user = User::all();

        $pengunjung = Pengunjung::findOrFail($id);
        return view('Admin.Pengunjung.pengunjung-detail', compact('pengunjung', 'user'));
    }

}
