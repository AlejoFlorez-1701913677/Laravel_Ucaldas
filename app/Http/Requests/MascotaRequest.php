<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MascotaRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'race' => ['required', 'string'],
            'weight' => ['required', 'numeric', 'min:1', 'max:999'],
            'height' => ['required', 'numeric', 'min:1', 'max:999'],
            'width' => ['required', 'numeric', 'min:1', 'max:999'],
            'birthday' => ['required', 'date']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Debe definir un nombre a su Mascota',
            'race.required' => 'Debe definir una raza a su Mascota',
            'weight.required' => 'Debe definir un peso a su Mascota',
            'height.required' => 'Debe definir un alto a su Mascota',
            'width.required' => 'Debe definir un ancho a su Mascota',
            'birthday.required' => 'Debe definir una fecha de nacimiento a su Mascota'
        ];
    }
}
