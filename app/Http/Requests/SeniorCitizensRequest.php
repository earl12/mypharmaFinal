<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class SeniorCitizensRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true   ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|max:12|unique:users',
            'first_name' => 'required|max:40',
            'middle_name' => 'required|max:40',
            'last_name' => 'required|max:40', 
            'phone' => 'required|numeric|min:10', 
            'telephone' => 'required|numeric',
            'caretakers_name' => 'required|min:3',
            'caretakers_phone' => 'required|numeric',
            'geoposition1a' => 'required',
            'geoposition1b' => 'required',
            'geoposition1c' => 'required',
            'geoposition1d' => 'required',
            'upload_photo' => 'required|mimes:jpeg,bmp,png'
        ];
    }
}
