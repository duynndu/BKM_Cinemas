<?php

namespace App\Http\Requests\Vouchers;

use App\Rules\CheckRuleName;
use Illuminate\Foundation\Http\FormRequest;

class VoucherRequest extends FormRequest
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
        $id = $this->route('id');
        return [
            "voucher.name" => [
                "required",
                "min:3",
                "max:250",
                new CheckRuleName($id, 'vouchers')
            ],

            "voucher.code" => [
                "required",
                "min:5",
                "max:100",
            ],
            "voucher.quantity" => [
                "required",
                "integer",
                "min:1",
                "max:100",
            ],
            "voucher.start_date" => [
                "required",
                "date",
                'after_or_equal:' . now()->toDateTimeString(),
            ],
            "voucher.end_date" => [
                "required",
                'after:voucher.start_date', // Ngày kết thúc phải lớn hơn ngày bắt đầu
            ],
            "voucher.discount_value" => [
                "required",
                "numeric",
                "min:1",
                "max:1000000",
            ],
            "voucher.description" => [
                "max:250"
            ],
            // "voucher.condition_type" => [
            //     "required",
            // ],


        ];
    }

    public function messages()
    {
        return [
            "voucher.name.required" => "Tên voucher là bắt buộc.",
            "voucher.name.min" => "Tên voucher phải có ít nhất 3 ký tự.",
            "voucher.name.max" => "Tên voucher không được vượt quá 250 ký tự.",
            "voucher.code.required" => "Mã voucher là bắt buộc.",
            "voucher.code.min" => "Mã voucher phải có ít nhất 5 ký tự.",
            "voucher.code.max" => "Mã voucher không được vượt quá 100 ký tự.",
            "voucher.quantity.required" => "Số lượng voucher là bắt buộc.",
            "voucher.quantity.integer" => "Số lượng voucher phải là một số nguyên.",
            "voucher.quantity.min" => "Số lượng voucher phải lớn hơn hoặc bằng 1.",
            "voucher.quantity.max" => "Số lượng voucher không được vượt quá 100.",
            "voucher.start_date.required" => "Ngày bắt đầu là bắt buộc.",
            "voucher.start_date.date" => "Ngày bắt đầu phải là một ngày hợp lệ.",
            "voucher.start_date.after_or_equal" => "Ngày bắt đầu phải lớn hơn hoặc bằng ngày hiện tại.",
            "voucher.end_date.required" => "Ngày kết thúc là bắt buộc.",
            "voucher.end_date.after" => "Ngày kết thúc phải lớn hơn ngày bắt đầu.",
            "voucher.discount_value.required" => "Giá trị giảm giá là bắt buộc.",
            "voucher.discount_value.numeric" => "Giá trị giảm giá phải là một số.",
            "voucher.discount_value.min" => "Giá trị giảm giá phải lớn hơn hoặc bằng 1.",
            "voucher.discount_value.max" => "Giá trị giảm giá không được vượt quá 1,000,000.",
            "voucher.description.max" => "Mô tả không được vượt quá 250 ký tự.",
            // "voucher.condition_type.required" => "Bắt buộc chọn",
        ];
    }
}
