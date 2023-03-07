<?php

namespace App\Http\Requests\Produk;

use Illuminate\Foundation\Http\FormRequest;

class ProdukRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'foto_produk'                  => 'required',
            'merk_produk'                  => 'required',
            'nama_produk'                  => 'required|unique:produks',
            'jenis_produk'                 => 'required',
            'kategori_produk'              => 'required',
            'kandungan_produk'             => 'required',
            'harga'                        => 'required',
            'stok'                         => 'required',
            'deskripsi'                    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'foto_produk.required'         => 'Tolong Masukkan Foto Produk',
            'merk_produk.required'         => 'Silahkan Masukkan Merk Produk',
            'nama_produk.required'         => 'Silahkan Masukkan Nama Produk',
            'jenis_produk.required'        => 'Silahkan Masukkan Jenis Produk',
            'kategori_produk.required'     => 'Silahkan Masukkan Kategori Produk',
            'kandungan_produk.required'    => 'Silahkan Masukkan Kandungan Produk',
            'harga.required'               => 'Silahkan Masukkan Harga produk',
            'stok.required'                => 'Silahkan Masukkan Stok produk',
            'deskripsi.required'           => 'Silahkan Masukkan Deskripsi produk',
        ];
        
    }
}
