<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Instansi;
use Auth;

class BantuanRequest extends Request
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
            if(Instansi::findOrFail($this->input('instansi_id'))){
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
            'title'=>'required',
            'instansi_id'=> 'required',

        ];
    }
    public function messages()
    {
        return [
        'title.required' => 'Kolom nama bantuan wajib di isi',
        'instansi_id.required' => 'Pilihan nama instansi wajib di pilih',

        ];
    }
}
