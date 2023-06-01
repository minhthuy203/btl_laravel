<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:4|max:100|unique:categories'
        ];
    }
    // public function message()
    // {
    //     return [
    //         'name.required' => 'Tên danh mục không được để trống',
    //         'name.min' => 'Tên danh mục tối thiểu 6 ký tự',
    //         'name.max' => 'Tên danh mục tối đa 100 ký tự',
    //         'name.unique' => 'Tên danh mục <b>'.$this->name.'</b> đã được sử dụng'
    //     ];
    // }
}
