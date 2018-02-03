<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|max:100',
            'description' => 'max:1000',
            'quantity' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Merci de renseigner un nom.',
            'name.max' => 'Le nom renseigné est trop long.',
            'description.max' => 'La description renseignée est trop longue (max. 1000).',
            'quantity.required' => 'Merci de renseigner une quantité.',
        ];
    }
}
