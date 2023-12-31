<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'user_id' => ['required', 'numeric', 'exists:users,id'],
            'photo' => ['required', 'image', 'mimes:jpg,png,jpeg', 'max:1024'],
            'titre' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1000'],
            'contenu' => ['required', 'string', 'max:5000'],
            'harcelement_id' => ['required', 'numeric', 'exists:harcelements,id'],
        ];
    }
}
