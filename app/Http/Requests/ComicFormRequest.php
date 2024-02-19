<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicFormRequest extends FormRequest
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
            'title' => 'required|string|min:3|max:255',
            'author' => 'required|string|min:3|max:255',
            'price' => 'required|numeric',
        ];
    }

    public function messages() {

        return [
            'title.required' => 'Non è possibile lasciare il campo "Titolo" vuoto',
            'title.min' => 'Il campo "Titolo" deve avere almeno 3 caratteri',
            'title.max' => 'Il campo "Titolo" non può superare i 255 caratteri',

            'author.required' => 'Non è possibile lasciare il campo "Autore" vuoto',
            'author.min' => 'Il campo "Autore" deve avere almeno 3 caratteri',
            'author.max' => 'Il campo "Autore" non può superare i 255 caratteri',

            'price.required' => 'Non è possibile lasciare il campo "Prezzo" vuoto',
            'price.numeric' => 'Il prezzo deve essere un valore numerico',
            
        ];

    }
}
