<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */

    public function messages(): array
    {
        return [
            'title.required' => 'Judul harus diisi',
            'title.min' => 'Judul minimal 3 karakter',
            'title.max' => 'Judul maksimal 255 karakter',
            'content.required' => 'Konten harus diisi',
            'content.min' => 'Konten minimal 3 karakter',
            'content.max' => 'Konten maksimal 255 karakter',
        ];
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:3|max:255',
        ];
    }
}
