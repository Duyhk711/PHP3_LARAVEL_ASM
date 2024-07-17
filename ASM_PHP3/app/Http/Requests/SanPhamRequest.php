<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SanPhamRequest extends FormRequest
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
        return
            [
       
                'ten_san_pham' => 'required|max:100',
                'ma_san_pham' => 'required|max:10|unique:san_phams,ma_san_pham,' . $this->route('sanpham'),
                'gia' => 'required|numeric|min:1|max:999999999',
                'so_luong' => 'required|numeric|min:1',
                'trang_thai' => 'required|in:0,1',
                
            ];
    }

    public function messages(): array
    {
        return [
            'ma_san_pham.required' => 'Mã sản phẩm bắt buộc điền',
            'ma_san_pham.unique' => 'Mã sản phẩm không được trùng',
            'ma_san_pham.max' => 'Mã sản phẩm không được quá 10 ký tự',
            'ten_san_pham.required' => 'Tên sản phẩm bắt buộc điền',
            'ten_san_pham.max' => 'Tên sản phẩm không được quá 100 ký tự',
            'gia.required' => 'Giá sản phẩm bắt buộc điền',
            'gia.numeric' => 'Giá sản phẩm phải là số',
            'gia.min' => 'Giá sản phẩm không hợp lệ',
            'gia.max' => 'Giá sản phẩm phải nhỏ hơn 99.999.999đ',
            'so_luong.required' => 'Số lượng bắt buộc điền',
            'so_luong.numeric' => 'Số lượng phải là số',
            'so_luong.min' => 'Số lượng không hợp lệ',
            'trang_thai.required' => 'Trạng thái bắt buộc điền',
            'trang_thai.in' => 'Trạng thái không hợp lệ',
        ];
    }

}
