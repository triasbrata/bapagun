<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Kriteria;
use App;

class IndikatorRequest extends Request
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
              if(Kriteria::findOrFail($this->input('kriteria_id'))){
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
              'bobot'=>'required',
              'kriteria_id'=> 'required',

          ];
      }
      public function messages()
      {
          return [
          'title.required' => 'Kolom nama indikator wajib di isi',
          'kriteria_id.required' => 'Pilihan nama kriteria wajib di pilih',
          'bobot.required' => 'Kolom bobot wajib di isi',
          ];
      }
}
