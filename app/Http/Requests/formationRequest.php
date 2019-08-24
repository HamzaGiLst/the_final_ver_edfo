<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class formationRequest extends FormRequest
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
            'entreprise'=> ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:15'],
            'choix_formation'=>['required', 'string', 'max:255'],
            'besoinf'=>['required', 'string', 'max:255'],
            'sms'=>['required', 'string', 'max:255'],

        ];
    }
}
