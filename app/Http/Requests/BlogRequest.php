<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255', 'unique:blogs'],
            'img' => ['required'],
            'description' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'title.unique' => 'Tiêu đề không được trùng.',
            'title.required' => 'Tiêu đề không được để trống.',
            'title.string' => 'Tiêu đề không đúng định dạng.',
            'title.max' => 'Tiêu đề không vượt quá 255 kí tự.',
            'img.required' => 'Ảnh không được để trống.',
            'description.required' => 'Nội dung không được để trống.',
        ];
    }
}
