<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
    public function rules() {
        return [
            'name' => 'required|min:10|max:20',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|min:4|max:80',
        ];
    }

    public function messages() {
    return [
        'name.required' => 'Devi inserire un nome',
        'name.min' => 'Il nome deve contenere minimo 10 caratteri',
        'name.max' => 'Il nome deve contenere massimo 20 caratteri',

        'email.required' => 'Devi inserire una email',
        'email' => 'Devi inserire un indirizzo valido',

        'message.required' => 'Devi inserire un messaggio',
        'message.min' => 'Devi inserire un messaggio di almeno 10 caratteri',
        'message.max' => 'Devi inserire un messaggio di massimo 80 caratteri',
    ];
}

}