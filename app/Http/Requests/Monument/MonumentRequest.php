<?php

namespace App\Http\Requests\Monument;

use App\Models\Product;
use Illuminate\Foundation\Http\FormRequest;

class MonumentRequest extends FormRequest
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
        if (isset($this->product_id)) {
            $product = Product::findOrFail($this->product_id);
            $arrayRules = $this->requiredRules();
            if ($this->is_fast_order == 'true') {
               $arrayRules = array_merge($this->requiredRules(), $this->fastOrderRules());
            }
            return $product->type_id == 1 ? $arrayRules : array_merge($arrayRules, $this->nullableRules());
        }
    }

    private function requiredRules(): array
    {
        return [
            '_token' => 'required',
            'product_id' => 'integer|required',
            'engraving_id' => 'integer',
            'medallion_id' => 'integer',
            'name_left' => 'string|required',
            'name_color_id' => 'integer|required',
            'left_date_of_birth' => 'date|required',
            'left_date_of_die' => 'date|required',
            'dates_color_id' => 'integer|required',
            'left_epitaph' => 'string',
            'epitaph_color_id' => 'integer',
            'left_stella_image_id' => 'integer',
            'left_stella_color_id' => 'integer',
            'left_tombstone_image_id' => 'integer',
            'left_tombstone_color_id' => 'integer',
            'beautification_id' => 'integer',
            'on_pedestal_epitaph' => 'string',
            'parterres' => 'array|required',
            'stella' => 'array|required',
            'pedestals' => 'array|required',
            'tombstones' => 'array|required',
            'monument_qty' => 'integer|max:5|min:1',
        ];
    }

    private function nullableRules(): array
    {
        return [
            'name_right' => 'string',
            'right_date_of_birth' => 'date',
            'right_date_of_die' => 'date',
            'right_epitaph' => 'string',
            'right_stella_image_id' => 'integer',
            'right_stella_color_id' => 'integer',
            'right_tombstone_image_id' => 'integer',
            'right_tombstone_color_id' => 'integer',
        ];
    }

    private function fastOrderRules(): array
    {
        return [
            'name' => 'string|required',
            'phone' => 'string|required',
            'email' => 'email|required',
        ];
    }

}
