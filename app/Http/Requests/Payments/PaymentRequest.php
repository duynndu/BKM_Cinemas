<?php

namespace App\Http\Requests\Payments;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'payment.name' => 'required|min:3|max:255',
            'payment.image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'payment.description' => 'nullable|string|max:500',
            "payment.active" => 'integer|numeric'
        ];
    }

    public function messages(): array
    {
        return [
            "payment.name.required" => "Tên không được để trống!",
            "payment.name.min" => "Tên ít nhất 3 ký tự!",
            "payment.name.max" => "Tên tối đa 255 ký tự!",
            'payment.image.required' => 'Hình ảnh không được để trống!',
            'payment.image.image' => 'Tệp tải lên phải là hình ảnh.',
            "payment.image.mimes" => "Chỉ chấp nhận các định dạng jpeg, png, jpg, gif!",
            "payment.image.max" => "Kích thước hình ảnh tối đa là 2MB!",
            "payment.description.max" => "Mô tả tối đa 1000 ký tự!",
            "payment.active.integer" => "Trạng thái không đúng!",
            "payment.active.numeric" => "Trạng thái không đúng!",
        ];
    }
}
