<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengunjungRequest extends FormRequest
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
            'name'                    => 'required|min:4',
            'tanggal_lahir'           => 'required',
            'tempat_lahir'            => 'required',
            'jenis_kelamin'           => 'required',
            'no_telp'                 => 'required|min:10',
            'alamat'                  => 'required',
            'bio'                     => 'required',
            'image_user'              => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required'              => 'Masukkan Nama Lengkap Anda !',
            'name.min'                   => 'Nama minimal 4 karakter !',

            'no_telp.required'           => 'Masukkan Nomor Telepon Anda !',
            'no_telp.min'                => 'Nomor Telepon Minimal 10 karakter !',

            'tanggal_lahir.required'     => 'Masukkan Tanggal Lahir Anda !',
            'tempat_lahir.required'      => 'Masukkan Tempat Lahir Anda !',
            'jenis_kelamin.required'     => 'Masukkan Jenis Kelamin Anda !',
            'alamat'                     => 'Masukkan Alamat Anda !',
            'bio'                        => 'Masukkan Biografi Anda !',
            'Image_user'                 => 'Masukkan Foto Profil Anda !'
        ];
    }
}
