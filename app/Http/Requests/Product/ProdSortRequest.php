<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProdSortRequest extends FormRequest
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
            'type_id' => 'integer|required',
            'subtype_id' => 'integer|required',
            'sortBy' => 'string|required',
            'paginate' => 'integer|required',
        ];
    }
}
