<?php

namespace App\Http\Requests\Blocks;

use App\Rules\CheckRuleName;
use App\Rules\CheckRuleSlug;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BlockRequest extends FormRequest
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
            "name" => [
                "required",
                "min:3",
                "max:255",
                new CheckRuleName($id, 'blocks')],
            'slug' => [
                "required",
                "min:3",
                "max:255",
                new CheckRuleSlug($id),
            ],
            'page_id' => 'required|numeric',
            'block_type_id' => 'required|numeric',
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
            'page_id.required' => __('validation.required', ['attribute' => __('language.admin.interfaces.pages.title')]),
            'page_id.numeric' => __('validation.numeric', ['attribute' => __('language.admin.interfaces.pages.title')]),
            'block_type_id.required' => __('validation.required', ['attribute' => __('language.admin.interfaces.blockTypes.blockType_sample')]),
            'block_type_id.numeric' => __('validation.numeric', ['attribute' => __('language.admin.interfaces.blockTypes.blockType_sample')]),
        ];
    }
}