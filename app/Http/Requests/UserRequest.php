<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            

            'name'=>'required|min:2',
            'email'=>'required|unique:users',
            'password'=>'required|confirmed|min:8',
        ];

           
    }

    public function messages()
            {
                return [
                    'name.required' => 'Veuillez saisir votre Nom',
                    'name.min' => 'Votre Nom doit comporter au minimum caractéres',
                    'email.required'  => 'Veuillez saisir votre Email',
                    'email.unique'  => 'Cet Email déja existe',
                    'password.required'  => 'Veuillez saisir votre Mot de Passe',
                    'password.confirmed'  => 'Password et confirmation-password ne sont pas identiques',
                    'password.min'  => 'Votre Mot de Passe doit comporter au minimum caractéres',
                ];
            }
}
