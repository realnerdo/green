<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'regular_price' => 'required',
            'category_list' => 'required'
        ];
    }

    /**
     * Custom validation messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'No le has puesto título a tu producto',
            'description.required' => 'No le has puesto una descripción a tu producto',
            'regular_price.required' => 'No le has puesto un precio a tu producto',
            'photo.required' => 'No le has puesto una foto a tu producto',
            'category_list.required' => 'No has seleccionado una categoría para tu producto'
        ];
    }
}
