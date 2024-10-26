<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use SebastianBergmann\Type\TrueType;

class AreaRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
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
            'name' => 'required|string|max:255|unique:areas,name,' . $id,
            'city_id' => 'required'
        ];
    }

    public function messages(){
        return [
            "name.required" => __('validation.required', ['attribute' => __('language.admin.areas.name')]),
            'name.string' => __('validation.string', ['attribute' => __('language.admin.areas.name')]),
            "name.max" => __('validation.max', ['attribute' => __('language.admin.areas.name'), 'max' => 255]),
            'name.unique' => __('validation.unique', ['attribute' => __('language.admin.areas.name')]),
            'city_id.required' => __('validation.required', ['attribute' => __('language.admin.cities.name')]),
        ];
    }
}
