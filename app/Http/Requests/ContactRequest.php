<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nom' => 'required|max:50',
            'prenom' => 'required|max:50',
            'addrMail' => 'required|email|min:10|max:255',
            'tel' => [
                'nullable',
                'regex:/^(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}$/',
            ],
            'sujet' => 'required|min:5|max:255',
            'msguser' => 'required|min:20|max:1000',
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
            'nom.required' => 'Merci de renseigner votre nom.',
            'nom.max' => 'Le nom renseigné est trop long.',
            'prenom.required' => 'Merci de renseigner votre prénom.',
            'prenom.max' => 'Le prénom renseigné est trop long.',
            'addrMail.required' => 'Merci de renseigner votre adresse de messagerie électronique.',
            'addrMail.email' => 'L\'adresse de messagerie électronique renseignée est invalide.',
            'tel.regex' => 'Le numéro de téléphone renseigné est invalide.',
            'sujet.required' => 'Merci de renseigner un sujet.',
            'sujet.max' => 'Le sujet doit être composé de 255 caractères maximum.',
            'sujet.min' => 'Le sujet doit être composé de 5 caractères minimum.',
            'msguser.required' => 'Merci de renseigner un message.',
            'msguser.max' => 'Le message doit être composé de 1000 caractères maximum.',
            'msguser.min' => 'Le message doit être composé de 20 caractères minimum.',
        ];
    }
}
