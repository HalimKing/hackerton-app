<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsUpdateRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required','nullable'],
            'location' => ['required', 'max:255', 'string'],
            'salary' => ['required'],
            'url' => ['required','url'],
            'available' => ['nullable']
        ];
    }
}