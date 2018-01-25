<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => 'required|max:50',
            'description' => 'required|max:500',
            'url_img' => 'nullable|max:150',
            'url_ext' => 'nullable|url|max:150',
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
            'name.required' => 'Merci de renseigner le nom du projet.',
            'name.max' => 'Le nom renseigné est trop long.',
            'description.required' => 'Merci de renseigner une description du projet.',
            'description.max' => 'La description renseignée est trop longue.',
            'url_img.max' => 'L\'URL renseignée est trop longue',
            'url_ext.url' => 'L\'URL renseignée est invalide.',
            'url_ext.max' => 'L\'URL renseignée est trop longue',
        ];
    }
}
