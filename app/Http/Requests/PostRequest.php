<?php

namespace App\Http\Requests;

use Fideloper\Proxy\TrustProxies;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        'title' => "required|string|min:1|max:100",
        'contents' => "required|string|min:1",
        "image" => "image",
        'category_id' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Debe completar :attribute',
            'category_id.required' => 'Debe seleccionar una categoria',
            'min' => 'El campo :attribute debe tener al menos :min caracteres',
            'max' => 'El campo :attribute no bebe superar :max caracteres',
            'image' => 'La imagen debe ser de formato .jpg, .png, etc'
        ];
    }
}
