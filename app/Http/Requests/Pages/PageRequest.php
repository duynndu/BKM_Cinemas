<?php

namespace App\Http\Requests\Pages;

use App\Rules\CheckRuleName;
use App\Rules\CheckRuleSlug;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        $id = $this->route('id');

        return [
            'name' => [
                "required",
                "min:3",
                "max:250",
                new CheckRuleName($id, 'pages')
            ],
            'slug' => [
                "required",
                "min:3",
                "max:255",
                new CheckRuleSlug($id),
            ],
            'order' => 'nullable|numeric',
            'active' => 'nullable|numeric',
        ];
    }

    public function messages()
    {
        return [
            "name.required" => __('validation.required', ['attribute' => __('language.admin.name')]),
            "name.min" => __('validation.min', ['attribute' => __('language.admin.name'), 'min' => 3]),
            "name.max" => __('validation.max', ['attribute' => __('language.admin.name'), 'max' => 255]),
            "slug.required" => __('validation.required', ['attribute' => __('language.admin.slug')]),
            "slug.min" => __('validation.min', ['attribute' => __('language.admin.slug'), 'min' => 3]),
            "slug.max" => __('validation.max', ['attribute' => __('language.admin.slug'), 'max' => 255]),
            "order.numeric" =>  __('validation.numeric', ['attribute' => __('language.admin.order')]),
        ];
    }
}
