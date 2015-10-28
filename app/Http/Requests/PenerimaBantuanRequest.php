<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Indikator;
use Auth;
class PenerimaBantuanRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()){
            return true;           
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
            'penduduk_id'=>'required',
            'instansi_id'=> 'required',
            'bantuan_id'=> 'required',

        ];
    }
    public function messages()
    {
        return [
        'penduduk_id.required' => 'Pilihan Penduduk wajib di pilih',
        'instansi_id.required' => 'Pilihan instansi wajib di pilih',
        'bantuan_id.required' => 'Pilihan bantuan wajib di pilih',

        ];
    }
}
