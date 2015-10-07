<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class SesiControllerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    
    public function authorize()
    {
        if(Auth::guest()){
            return true;
        }
        return redirect()->route(Auth::user()->level.".landing");

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required',
            'username' => 'required',
        ];
    }
    public function messages()
    {
        return [
        'password.required' => 'Password dibutuhkan untuk otentifikasi User',
        'username.required' => 'Username dibutuhkan untuk otentifikasi User'
        ];
    }
}
