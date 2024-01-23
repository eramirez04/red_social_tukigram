<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegister extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required | min:3 ',
            'username' => 'required | min:3 | max:20 | unique:users',
            'email' => 'required | min:3 | max:90 | unique:users',
            'password' => 'required',
            'password_confirmation' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Este campo es obligatorio'
        ];
    }

    public function attributes() : array
    {
        return  [
            // esta funcion cambia el nombre de los atributos de los campos de entrada
            // 'name' => 'mensaje',
        ];
    }
}
