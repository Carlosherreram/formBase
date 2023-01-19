<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'titulo'=>'string|max:150',
            'contenido'=>'string|max:100',
            'extracto'=>'string|max:255',
            'caducable'=>'boolean',
            'comentable'=>'boolean',
            'visibilidad'=>'boolean',
        ];
    }
}
