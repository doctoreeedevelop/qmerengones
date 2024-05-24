<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionUsuario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            /* 'usuario' => 'required│max:50│unique:usuario,usuario,' . $this->route('id'), */
            /* 'email' => 'required|email|max:100|unique:email,email'.$this->route('id'),  */
            'email' => 'required|email|max:100|unique:users|email', 
            'name' => 'required|max:50', 
            'password' => 'required|min:5',
            're_password' => 'required|same:password',
            /* 'rol_id' => 'required│integer' */
        ];
    }
}
