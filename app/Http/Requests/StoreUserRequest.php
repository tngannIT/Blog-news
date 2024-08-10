<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'name' => 'required|',                   // kiểm tra name mình gửi lên có trống hay không
            'email' => 'required|email|unique:users',
            // Kiểm tra email có bị trốngn không
            // email : có hợp lệ không
            // unique: có trùng không
            'password' => 'required|min:5',
            // Kiểm tra pass có trống không 
            // min: thấp nhất 6 ký tự
            'password_c' => 'required|same:password',
            // Kiểm tra pass có trống không 
            // smae: có trùng với pass trên không
            'status' => 'required',
            'role' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Vui lòng nhập tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Vui lòng nhập đúng định dạng của email',
            'email.unique' => 'Email đã được sử dụng',
            'password.required' => 'Vui lòng nhập password',
            'password.min' => 'Độ dài mật khẩu tối thiểu là 5 ',
            'password_c.required' => 'Vui lòng nhập mật khẩu lại',
            'password_c.same' => 'Mật khẩu không giống nhau',
            'status.required' => 'Vui lòng chọn trạng thái',
            'role.required' => 'Vui lòng chọn quyền hạn'
        ];
    }
}
