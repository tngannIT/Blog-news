<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules():array
    {
        return [
            'name' => 'required',
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required'

        ];
    }
    public function messages():array
    {
        return [
            'name.required' => 'Không được để trống tên',
            'meta_title' => 'Vui lòng nhập từ khóa SEO',
            'meta_keyword' => 'Vui lòng nhập từ khóa SEO',
            'meta_description' => 'Vui lòng nhập mô tả SEO'
        ];
    }
}
