<?php

namespace App\Http\Requests\Cart;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
        $this->convertToInt($this);
        return [
            '_token' => 'required',
            'delivery_id' => 'integer|required|min:1',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'email|nullable',
            'cashless_payment' => 'required|integer|min:1|max:3',
            'message' => 'nullable|string',
        ];
    }

    public function convertToInt($request)
    {
        $request->merge([
            'cashless_payment' => intval($request->cashless_payment),
            'delivery_id' => intval($request->delivery_id),
        ]);

        return $request;
    }
}
