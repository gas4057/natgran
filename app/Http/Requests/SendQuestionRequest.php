<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendQuestionRequest extends FormRequest
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
            '_token' => 'required',
//            'nickname' => 'required',
            'first_name' => 'string',
            'last_name' => 'string',
            'contact_phone' => 'required|string',
            'contact_email' => 'email',
            'contact_message' => 'required|string',
        ];
    }
}
