<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
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
            'name' => 'required|max:20',
            'level' => 'required|between:1,100',
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
            'name.required' => 'Merci de renseigner le nom de l\'aptitude.',
            'name.max' => 'Le nom renseigné est trop long.',
            'level.required' => 'Merci de renseigner le niveau.',
            'level.between' => 'Le niveau doit être compris entre 1 et 100.',
        ];
    }
}
