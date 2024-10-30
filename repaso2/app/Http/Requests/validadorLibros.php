<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Carbon\Carbon;
Carbon::setLocale(app()->getLocale());
        $fechaActual=Carbon::now()->isoFormat('LL');
class validadorLibros extends FormRequest
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
            'txtisbn'=>'required|min:13|max:13',
            'txtlibro'=>'required|min:10|max:150',
            'txtautor'=>'required|min:3|max:25',
            'txtpaginas'=>'required|integer|min:1',
            'txtyear'=> ['required','integer','min_digits:4','min:1000','max:'.date('Y')],
            'txteditorial'=>'required|min:5|max:150',
            'txtcorreo'=>'required|email:rfc,dns',
        ];
    }
}
