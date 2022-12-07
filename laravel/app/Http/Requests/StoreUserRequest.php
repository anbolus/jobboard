<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class StoreUserRequest extends FormRequest 
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
            
            'nom'=> ['required', 'string', 'max:255'],
            'prenom'=> ['required', 'string', 'max:255'],
            'email' => ['required','string', 'max:255'],
            'password' => ['required','confirmed',Rules\Password::defaults()],
            'role' => ['required','string', 'max:255'],
            'id_companies' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'string', 'max:255'],
        ];
    }
}
