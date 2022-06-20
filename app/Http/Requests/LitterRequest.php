<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LitterRequest extends FormRequest
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
            'mom_id' => ['required', 'integer'],
            'dad_id' => ['required', 'integer'],
            'birthday' => ['required', 'string'],
            'pic' => ['nullable', 'image', 'max:1999'],
        ];
    }
}
