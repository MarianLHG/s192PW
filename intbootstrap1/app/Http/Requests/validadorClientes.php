<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorClientes extends FormRequest
{
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
            'txtnombre'=>'required|min:3|max:25',
            'txtapellido'=>'required',
            'txtcorreo'=>'required|email:rfc,dns',
            'txttelefono'=>'required|numeric',
        ];
    }
}
