<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInstitutionRequest extends FormRequest
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
            'type' => ['required', 'in:ong,gendarmerie,police'],
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'grade' => ['nullable', 'string', 'max:255'],
            'nom' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:1024'],
            'description' => ['nullable', 'string'],
        ];
    }
}
