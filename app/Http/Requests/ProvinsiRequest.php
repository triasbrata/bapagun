<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Instansi;
use Auth;

class ProvinsiRequest extends Request
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
            'label'=>'required',
            // 'instansi_id'=> 'required',

        ];
    }
    public function messages()
    {
        return [
        'label.required' => 'Kolom nama provinsi wajib di isi',
        // 'instansi_id.required' => 'Pilihan nama instansi wajib di pilih',

        ];
    }
}
