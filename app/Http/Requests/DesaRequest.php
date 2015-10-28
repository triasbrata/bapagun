<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Provinsi;
use App\Kabupaten;
use App\Kecamatan;
class DesaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        if(Auth::check()){
            if(provinsi::findOrFail($this->input('provinsi_id'))){
                if(Kabupaten::findOrFail($this->input('Kabupaten_id'))){
                    if(Kecamatan::findOrFail($this->input('Kecamatan_id'))){
                        return true;
                    }
                }
            }
        }
        return false;
        
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'label'=>'required',
            'provinsi_id'=> 'required',
            'kabupaten_id'=> 'required',
            'kecamatan_id'=> 'required',

        ];
    }
    public function messages()
    {
        return [
        'label.required' => 'Kolom desa/kelurahan wajib di isi',
        'provinsi_id.required' => 'Pilihan provinsi wajib di pilih',
        'kabupaten_id.required' => 'Pilihan kabupaten wajib di pilih',
        'kecamatan_id.required' => 'Pilihan kecamatan wajib di pilih',

        ];
    }
}
