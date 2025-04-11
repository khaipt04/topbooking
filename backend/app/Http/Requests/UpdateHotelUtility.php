<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateHotelUtility extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|unique:hotel_utility,name',
            'icon' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Tên không được để trống.',
            'name.string' => 'Tên không hợp lệ.',
            'name.unique' => 'Tên đã tồn tại.',
            'icon.required' => 'Icon không được để trống.',
            'icon.string' => 'Icon không hợp lệ.'
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
