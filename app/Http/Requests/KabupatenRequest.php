<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Provinsi;
use Auth;

class KabupatenRequest extends Request
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
                return true;
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

        ];
    }
    public function messages()
    {
        return [
        'label.required' => 'Kolom nama kabupaten/kota wajib di isi',
        'provinsi_id.required' => 'Pilihan nama Provinsi wajib di pilih',

        ];
    }
}
