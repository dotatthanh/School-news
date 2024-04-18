<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
            'content' => 'required',
            'summary' => 'required',
            'parent_category_id' => 'required',
            'category_id' => 'required',
            'image' => 'required|image',
        ];
    }

    public function attributes()
    {
        return [
            'parent_category_id' => 'parent category',
            'category_id' => 'sub category',
        ];
    }
}
