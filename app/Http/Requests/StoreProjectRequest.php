<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
           'date'   => 'required',
           'description' => 'required',
        ];
    }

    public function messages(){
        return[

            'title.required' => 'Il titolo è obbligatorio !',
            'title.max' =>  'Numero massimo di caratteri nel titolo è :max !',
            'date.required' => 'La data di creazione è obbligatoria !',
            'description.required' => 'La descrizione è obbligatoria !',

        ];
    }
}
