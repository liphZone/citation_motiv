<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CitationFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'auteur'   => 'required|string',
            'citation' => 'required|string|max:150',
            'profil'   => 'sometimes|file|image|mimes:jpeg,png,jpg',
        ];
    }
}
