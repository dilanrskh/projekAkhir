<?php

namespace App\Http\Requests\Produk;

use Illuminate\Foundation\Http\FormRequest;

class ImageProdukRequest extends FormRequest
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
            'nama_produk'                  => 'required|unique:produks',
            'image_produk'                 => 'required',

        ];
    }

    public function messages()
    {
        return [
            'nama_produk.required'               => 'Silahkan Masukkan Nama Produk',
            'image_produk.required'         => 'Tolong Masukkan Foto Produk',
            
        ];
        
    }
}
