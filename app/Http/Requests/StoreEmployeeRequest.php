<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'cin' => 'required|string|max:255',
            'stuation' => 'required|string|max:255',
            'cnss' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees',
            'contact' => 'required|string|max:255',
            'departement_id' => 'required|integer'
        ];
    }
}
