<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;
class InstansiRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return Auth::check();
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required'
        ];
    }
    public function messages()
    {
        return[
        'title.required'=> 'Kolom nama instansi tidak boleh kosong'
        ];
    }
}
