<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class KomentarRequest extends FormRequest
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
            'name'                         => 'required',
            'nama_produk'                  => 'required|unique:produks',
            'komentar'                     => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required'                => 'Silahkan Masukkan Nama Anda !',
            'nama_produk.required'         => 'Silahkan Masukkan Nama Produk',
            'komentar.required'            => 'Silahkan Masukkan Komentar Produk',
            
        ];
        
    }
}
