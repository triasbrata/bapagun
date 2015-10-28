<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Provinsi;
use App\Kabupaten;
class KecamatanRequest extends Request
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
            if(provinsi::findOrFail($this->input('instansi_id'))){
                if(Kabupaten::findOrFail($this->input('instansi_id'))){
                    return true;
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

        ];
    }
    public function messages()
    {
        return [
        'label.required' => 'Kolom kecamatan wajib di isi',
        'provinsi_id.required' => 'Pilihan provinsi wajib di pilih',
        'kabupaten_id.required' => 'Pilihan kabupaten wajib di pilih',

        ];
    }
}
