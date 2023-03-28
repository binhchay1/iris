<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'type' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tên không được để trống.',
            'title.string' => 'Tên không đúng định dạng.',
            'title.max' => 'Tên không vượt quá 255 kí tự.',
            'description.required' => 'Nội dung không được để trống.',
            'type.required' => 'Loại không được để trống.',
        ];
    }
}
