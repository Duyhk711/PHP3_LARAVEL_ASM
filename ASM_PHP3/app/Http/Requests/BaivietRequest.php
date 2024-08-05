<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaivietRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return
            [
       'ten_bai_viet' => 'required|max:255',
                'hinh_anh' => 'image|mimes:jpg,jpeg,webp,gif,png',
                'noi_dung' => 'required|string',
                'ngay_dang' => 'required|date'
                
            ];
    }

    public function messages(): array
    {
        return [
            'ten_bai_viet.required' => 'Tên bài viết bắt buộc điền',
            'ten_bai_viet.max' => 'Tên bài viết không được quá 100 ký tự',
            'hinh_anh.image' => 'Hình ảnh không hợp lệ',
            'hinh_anh.mimes' => 'Hình ảnh không hợp lệ',
            'ngay_dang.required' => 'Ngày nhập bắt buộc điền',
            'ngay_dang.date' => 'Ngày nhập sai định dạng',
            'noidung.string' => 'Mô tả không hợp lệ',
            'noidung.required' => 'Mô tả không hợp lệ',
        ];
    }

}
