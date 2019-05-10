<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;
class Userupdaterequest extends FormRequest
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

        $id=Route::getCurrentRoute()->parameters();
        $id=$id['user'];
        
        //$id = $this->route('user');
        return [
            
            'name'=>'required',
             'email' => [
                'required',
                Rule::unique('users')->ignore($id),
                ],
            'password'=>'required|confirmed',
        ];


         


    }
}
