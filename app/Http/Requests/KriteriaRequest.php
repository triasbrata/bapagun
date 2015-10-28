<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Bantuan;

class KriteriaRequest extends Request
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
            if(Bantuan::findOrFail($this->input('bantuan_id'))){
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
            'bantuan_id'=> 'required',

        ];
    }
    public function messages()
    {
        return [
        'title.required' => 'Kolom nama bantuan wajib di isi',
        'bantuan_id.required' => 'Pilihan nama bantuan wajib di pilih',

        ];
    }
}
