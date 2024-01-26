<?php

namespace App\Http\Requests\Patient;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
            "sex" => "required|string|min:0",
            "age" => "required|integer|min:0|max:120",
            "address" => "required|string|max:40",
            "treatment_start_date" => "required|date",
            "vot" => "required|boolean",
        ];
    }
}
