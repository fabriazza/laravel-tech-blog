<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => "required|min:5|max:35",
            'mail' => "required|email:rfc",
            'message' => "required|min:5|max:400"
        ];
    }

    public function messages() {
        return [
            'name.required' => "Il nome è obbligatorio.",
            'name.min' => "Il nome deve contenere almeno 5 caratteri.",
            'name.max' => "Il nome deve contenere al massimo 35 caratteri.",
            'mail.required' => "La email è obbligatoria.",
            'mail.required' => "La email deve essere valida.",
            'message.required' => "Il messaggio è obbligatorio.",
            'message.min' => "Il messaggio deve contenere almeno 5 caratteri.",
            'message.max' => "Il messaggio deve contenere al massimo 400 caratteri.",
        ];
    }
}
