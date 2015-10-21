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
        if(Request::input('unggulan')){
            return [
                'unggulan'=>'required'
            ];
        }
        if(Route::currentRouteName() == 'admin.produk.store'){
            return [
                'foto'=>'required|image|mimes:png,jpeg,jpg,jpe,gif,bmp'
            ];
        }else{
            return [
                    'nama'=>'required|min:3',
                    'keterangan'=>'min:5'
            ];
        }
    }
    public function messages()
    {
        return ['unggulan.required'=>'Produk Unggulan tidak terpilih'];
    }
}
