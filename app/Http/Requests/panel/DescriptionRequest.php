<?php

namespace App\Http\Requests\Panel;

use Illuminate\Foundation\Http\FormRequest;

class DescriptionRequest extends FormRequest
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
            'name' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'position' => 'required|numeric',
            'body' => 'required',
            'url' => 'nullable|max:500|min:5',
            'status' => 'required|numeric|in:0,1',
        ];

        return [
            'name' => 'required|max:120|min:2|regex:/^[ا-یa-zA-Z0-9\-۰-۹ء-ي., ]+$/u',
            'position' => 'required|numeric',
            'body' => 'required',
            'url' => 'nullable|max:500|min:5',
            'status' => 'required|numeric|in:0,1',
    ];
    }
}
