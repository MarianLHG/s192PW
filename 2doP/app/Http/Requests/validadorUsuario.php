<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorUsuario extends FormRequest
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
            'txtcorreo'=>'required|email:rfc, dns',
            'txtcontraseña'=>'required|min:8',
            'txtedad'=>'required|integer|min: 18'
        ];
    }
}
