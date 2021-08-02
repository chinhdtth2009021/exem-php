<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Apartment extends FormRequest
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
            'name' => ['required', 'min:10','max:50'],
            'address' => ['required'],
            'price' => ['required', 'number_format()'],
            'general' => ['required'],
            'description' => ['required'],
            'thumbnail' => ['required'],
            'status' => ['required', 'min:0', 'max:3'],
        ];
    }

    public function massages()
    {
        return[
            'name.required'=>'Trường name Bắt buộc phải nhập',
            'name.min'=>'Trường name Bắt buộc phải lớn hơn 10 kí tự',
            'name.max'=>'Trường name Bắt buộc phải lớn hơn 50 kí tự',
            'address.required'=>'vui lòng nhập dia chi',
            'price.required'=>'vui long nhập gia san pham',
            'price.number_format'=>'giá tối thiểu phải 1$',
            'general.required'=>'vui lòng nhập nhan xet chung',
            'description.required'=>'vui lòng nhập mieu ta',
            'thumbnail.required'=>'vui lòng nhaapj anh',
            'status.required'=>'vui long chon các trạng thái trên',
            'status.min'=>'trạng thái nhỏ nhất là 0',
            'status.max'=>'trạng thái lớn nhất là 3',
            ];
    }
}
