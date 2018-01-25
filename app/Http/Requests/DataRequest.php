<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
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
            'last_name' => 'required|max:50',
            'first_name' => 'required|max:50',
            'age' => 'required',
            'city' => 'required|max:50',
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
            'last_name.required' => 'Merci de renseigner votre nom.',
            'last_name.max' => 'Le nom renseigné est trop long.',
            'first_name.required' => 'Merci de renseigner votre prénom.',
            'first_name.max' => 'Le prénom renseigné est trop long.',
            'age.required' => 'L\'âge doit être renseigné.',
            'city.required' => 'La ville doit être renseignée.',
        ];
    }
}
