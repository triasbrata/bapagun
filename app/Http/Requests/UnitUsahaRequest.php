<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UnitUsahaRequest extends Request
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
            'nama'=>'required',
            'telp'=>'digits_between:11,13',
            'email'=>'email',
            'alamat'=>'required',
            // 'kordinat'=>'required',
            'foto'=>'required',
            'personal_no_ktp'=>'required',
            'personal_nama'=>'required',
            'personal_jenis_kelamin'=>'required',
            'personal_tanggal_lahir'=>'required',
            'personal_tempat_lahir'=>'required',
            'personal_agama'=>'required',
        ];
    }
}
