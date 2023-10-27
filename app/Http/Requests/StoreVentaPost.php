<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVentaPost extends FormRequest
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
            'quantity'=>'required',
            //'name'=>'required|min:5|Max:500',
            'price'=>'required',
            'subtotal'=>'required',
            'Sucursal'=>'required|Max:500',
            'Cliente'=>'required|min:5|Max:500',
        ];
    }
}
