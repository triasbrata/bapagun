<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JenisProdukUsahaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !\Auth::guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_usaha'=>'required',
            'keterangan'=>'required',
            'tipe_program'=>'required',
            'telp'=>'digits:7',
            'email'=>'email',
            'personal_no_ktp'=>'required',
            'personal_name'=>'required',
            'personal_jenis_kelamin'=>'required',
            'personal_tanggal_lahir'=>'required',
            'personal_tempat_lahir'=>'required',
            'personal_agama'=>'required',
        ];
    }
}
