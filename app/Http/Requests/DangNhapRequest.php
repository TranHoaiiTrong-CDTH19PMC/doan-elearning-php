<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DangNhapRequest extends FormRequest
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
            'email'          => 'required|email',
            'password'           => 'required|min:1'
        ];
    }
    public function messages()
    {
        return [
        'email.required' => 'Chưa nhập Email',
        'email.email'    =>'Chưa nhập đúng định dạng Email',
        'password.required' => 'Chưa nhập mật khẩu',
        'password.min'      =>'Mật khẩu phải trên 1 kí tự'
        ];
    }
}
