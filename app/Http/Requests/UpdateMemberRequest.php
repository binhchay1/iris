<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'img' => ['required'],
            'role' => ['required', 'string', 'max:100']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống.',
            'name.string' => 'Tên không đúng định dạng.',
            'name.max' => 'Tên không vượt quá 255 kí tự.',
            'gender.required' => 'Giới tính không được để trống.',
            'img.required' => 'Ảnh không được để trống.',
            'role.required' => 'Chức vụ không được để trống.',
            'role.string' => 'Chức vụ không được để trống.',
            'role.max' => 'Chức vụ không vượt quá 100 kí tự.'
        ];
    }
}
