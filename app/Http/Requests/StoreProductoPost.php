<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoPost extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name'=>'required|min:5|Max:500',
            'slug'=>'required|min:5|Max:500',
            'details'=>'required|min:5|Max:500',
            'price'=>'required',
            'shipping_cost'=>'required',
            'description'=>'required|min:5|Max:500',
            'category'=>'required|min:5|Max:500',
            'brand'=>'required|min:2|Max:500',
            'image_path'=>'required|min:5|Max:500',
        ];
    }
}
