<?php

namespace App\Http\Requests\Cities;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
            'name' => 'required|min:3|max:255|unique:cities,name,' . $id
        ];
    }

    public function messages(){
        return [
            "name.required" => __('validation.required', ['attribute' => __('language.admin.cities.name')]),
            "name.min" => __('validation.min', ['attribute' => __('language.admin.cities.name'), 'min' => 3]),
            "name.max" => __('validation.max', ['attribute' => __('language.admin.cities.name'), 'max' => 255]),
            'name.unique' => __('validation.unique', ['attribute' => __('language.admin.cities.name')]),
        ];
    }
}