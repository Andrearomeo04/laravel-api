<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTypeRequest extends FormRequest
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
             'title' => 'required|max:150'
        ];
    }
    public function messages() {
        return [
            'title.required' => 'Inserisci il titolo della tipologia',
            'title.max' => 'Il titolo della tipologia non può superare i :max caratteri'
        ];
    }
}
