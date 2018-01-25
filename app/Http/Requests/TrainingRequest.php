<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingRequest extends FormRequest
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
            'description' => 'required',
            'duration' => 'nullable|max:200',
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
            'name.required' => 'Merci de renseigner le nom de la formation.',
            'name.max' => 'Le nom renseigné est trop long.',
            'description.required' => 'Merci de renseigner une description de la formation.',
            'duration.max' => 'La durée renseignée dépasse 200 caractères.',
        ];
    }
}
