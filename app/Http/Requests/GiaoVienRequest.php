<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GiaoVienRequest extends FormRequest
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
            'email'          => 'required|email|unique:accounts,email,'.$this->id,
            'name'          => 'required|min:5',
            'username'          => 'required|min:5',
            'avatar'          => 'required|min:5',
        ];
    }
    public function messages()
    {
        return [
        'email.required' => 'Chưa nhập Email',
        'email.unique'      =>'Email này đã tồn tại',
        'email.email'    =>'Chưa nhập đúng định dạng Email',
        'name.required' => 'Chưa nhập Họ và tên',
        'name.min'      =>'Tên phải trên phải trên 5 kí tự',
        'username.required' => 'Chưa nhập username',
        'username.min'      =>'Username phải trên 5 kí tự',
        'avatar.required' => 'Chưa nhập avatar',
        'avatar.min'      =>'Avatar phải trên 5 kí tự',
       
        ];
    }
}
