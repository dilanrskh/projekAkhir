<?php

namespace App\Http\Requests\Produk;

use Illuminate\Foundation\Http\FormRequest;

class InfoProdukRequest extends FormRequest
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
             'information'            => 'required',
 
         ];
     }
 
     public function messages()
     {
         return [
             'nama_produk.required'               => 'Silahkan Masukkan Nama Produk',
             'information.required'               => 'Silahkan Masukkan Informasi Produk',
             
         ];
         
     }
}
