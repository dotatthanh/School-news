<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCategoryRequest extends FormRequest
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
            'parent_category_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'parent_category_id' => 'parent category',
            'name' => 'category name',
        ];
    }
}
