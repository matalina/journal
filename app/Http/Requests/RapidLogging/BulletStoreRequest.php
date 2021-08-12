<?php

namespace App\Http\Requests\RapidLogging;

use Illuminate\Foundation\Http\FormRequest;

class BulletStoreRequest extends FormRequest
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
            'type_id' => ['required','integer','exists:types,id'],
            'content' => ['required','string'],
            'date' => ['required','date'],
            'signifier' => ['nullable','integer','exists:types,id'],
        ];
    }
}
