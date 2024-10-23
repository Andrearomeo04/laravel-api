<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'image' => 'nullable|image|max:4084',
            'description' => 'required',
            'type_id' => 'nullable'
        ];
    }
    public function messages() {
        return [
            'title.required' => 'Inserisci il titolo',
            'title.max' => 'Il titolo non può superare i :max caratteri'
        ];
    }
}
