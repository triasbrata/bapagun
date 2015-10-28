<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Provinsi;
use Auth;
class PendudukRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()){
            $data = Provinsi::where('id',$this->input('provinsi_id'))->whereHas('kabupaten',function ($q)
            {
                $q->where('id',$this->input('kabupaten_id'))->whereHas('kecamatan',function ($q2)
                {
                    $q2->where('id',$this->input('kecamatan_id'))->whereHas('desa',function ($q3)
                    {
                        $q3->where('id',$this->input('desa_id'));
                    });
                });
            });
            if($data->count() > 0){
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
            'no_nik'=>'required',
            'nama'=> 'required',
            'jenis_kelamin'=> 'required',
            'agama'=> 'required',
            'tempat_lahir'=> 'required',
            'tanggal_lahir'=> 'required',
            'provinsi_id'=> 'required',
            'kecamatan_id'=> 'required',
            'kabupaten_id'=> 'required',
            'desa_id'=> 'required',

        ];
    }
    public function messages()
    {
        return [
        'no_nik.required' => 'Kolom No. NIK wajib di isi',
        'nama.required' => 'Kolom No. NIK wajib di isi',
        'jenis_kelamin.required' => 'Pilihan jenis kelamin wajib di pilih',
        'agama.required' => 'Kolom Agama wajib di isi',
        'tanggal_lahir.required' => 'Kolom tanggal lahir wajib di isi',
        'tempat_lahir.required' => 'Kolom tempat lahir wajib di isi',
        'provinsi_id.required' => 'Pilihan provinsi wajib di pilih',
        'kabupaten_id.required' => 'Pilihan kabupaten wajib di pilih',
        'kecamatan_id.required' => 'Pilihan provinsi wajib di pilih',
        'desa_id.required' => 'Pilihan kabupaten wajib di pilih',

        ];
    }
}
