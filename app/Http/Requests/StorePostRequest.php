<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required',
            'content' => 'required',
            'description' => 'nullable|string|max:500',
            'image' => 'nullable|image|mimes:jpg,png,jpeg',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề!',
            'title.max' => 'Tiêu đề không được quá 255 ký tự!',
            'content.required' => 'Vui lòng nhập nội dung!',
            'content.string' => 'Nội dung phải là chuỗi!',
            'description.string' => 'Mô tả phải là chuỗi!',
            'description.max' => 'Mô tả không được quá 500 ký tự!',
        ];
    }

    // public function failedValidation(Validator $validator)
    // {
    //     dd($validator->errors());
    //     throw new HttpResponseException(response()->json($validator->errors(), 422));
    // }
}
