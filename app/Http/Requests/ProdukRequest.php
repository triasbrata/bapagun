<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;
use App\UnitUsaha;
use Route;

class ProdukRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()){
            if(UnitUsaha::find(Request::input('unit_usaha_id'))){
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
        if(Route::currentRouteName() == 'admin.produk.post'){
            return [
                'foto'=>'required|image|mimes:png,jpeg,jpg,jpe,gif,bmp'
            ];
        }
        return [
                'nama'=>'required|min:3',
                'keterangan'=>'min:5'
        ];
    }
}
