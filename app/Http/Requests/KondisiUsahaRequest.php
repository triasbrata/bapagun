<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class KondisiUsahaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'unit_usaha_id' => 'required',
            'tahun' => 'required',
            'bulan' => 'required',
            'aset' => 'required',
            'omset' => 'required',
            'pirt' => 'required',
            'mn' => 'required',
            'halal' => 'required',
            'iso' => 'required',
            'lain_lain' => 'required',
            'tujuan_pemasaran' => 'required',
            'tempat_pemasaran' => 'required',
            'bahan_baku' => 'required',
            'permodalan' => 'required',
            'manajement' => 'required',
        ];
    }
}
