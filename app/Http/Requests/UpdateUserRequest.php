<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required',
            'role' => 'required',
            'status' => 'required',
        ];
    }

    public function messages(): array
    {
        return[
            'name.required' => 'Không được để trống họ và tên',
            'status.required' => 'Trạng thái chưa được chọn',
            'role.required' => 'Quyền hạn chưa được chọn',
        ];
    }
}
