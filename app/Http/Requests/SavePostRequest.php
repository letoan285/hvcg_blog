<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
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
            'name' => 'required|min:10|max:255',
            'description' => 'required|min:10'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên bài viết không để trống',
            'description.required' => 'Nội dung bài viết không để trống',
            'name.min' => 'Tên bài viết lớn hơn 10 ký tự'
        ];
    }
}
