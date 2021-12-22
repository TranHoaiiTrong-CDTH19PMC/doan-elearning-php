<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class suathongtinRequest extends FormRequest
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
           
           
            'tieu_de' => 'required|min:5',
            'name'          => 'required|min:5',
            
        ];
    }
    public function messages()
    {
        return [
           
            'tieu_de.required' => 'Chưa nhập tieu_de',
            'tieu_de.min'      =>'Tiêu đề phải trên 5 kí tự',
            'name.required' => 'Chưa nhập Họ và tên',
            'name.min'      =>'Tên phải trên phải trên 5 kí tự',
        ];
    }
}
