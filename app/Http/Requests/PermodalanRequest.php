<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class PermodalanRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !Auth::guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'label'=>'required|string:3'
        ];
    }
}
