<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreHotelCategory extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|unique:hotel_categories,name',
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:20480',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Tên không được để trống.',
            'name.string' => 'Tên không hợp lệ.',
            'name.unique' => 'Tên đã tồn tại.',
            'image.required' => 'Vui lòng tải lên hình ảnh.',
            'image.file' => 'File không hợp lệ.',
            'image.image' => 'File không hợp lệ.',
            'image.mimes' => 'Vui lòng tải lên ảnh có định dạng: jpeg, png, jpg.',
            'image.max' => 'Kích thước tối đa 20MB.'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $firstError = collect($validator->errors()->all())->first();

        throw new HttpResponseException(response()->json([
            'success' => false,
            'message' => $firstError
        ], 422));
    }
}
