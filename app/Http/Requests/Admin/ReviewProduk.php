<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ReviewProduk extends FormRequest
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
            'image_review'                 => 'required',
            'review'                       => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required'                => 'Silahkan Masukkan Nama Anda !',
            'nama_produk.required'         => 'Silahkan Masukkan Nama Produk',
            'image_review.required'        => 'Tolong Masukkan Foto Produk',
            'review.required'              => 'Silahkan Masukkan Review Produk',
            
        ];
        
    }
}
