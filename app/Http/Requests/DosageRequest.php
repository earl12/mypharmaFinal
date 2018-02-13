<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DosageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
         'medicine_id' => 'required|numeric',
         'dosage_volume' => 'required',
         'form' => 'required',
         'price'=> 'required|numeric',
         // 'photo' =>'required|image|mimes:jpeg,png,jpg,gif,svg|'
       ];

     
   }

}
