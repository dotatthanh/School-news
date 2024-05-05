<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSubCategoryRequest extends FormRequest
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
            'name' => [
                'required', 'max:255',
                Rule::unique('categories')->ignore($this->category),
            ],
            'category_id' => 'required',
            'description' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'parent category',
            'name' => 'category name',
            'description' => 'description',
        ];
    }
}
