<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ProsecutionRequest extends FormRequest
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
            'name' => 'required|string|max:100'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'اسم الجهة مطلوب.',
            'name.string'   => 'اسم الجهة يجب أن يكون نصًا.',
            'name.max'      => 'اسم الجهة يجب ألا يزيد عن 100 حرف.',
        ];
    }
}
