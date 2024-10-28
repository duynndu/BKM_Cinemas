<?php

namespace App\Http\Requests\Movies;

use App\Rules\CheckRuleName;
use App\Rules\CheckRuleSlug;
use App\Rules\CheckRuleTitle;
use App\Rules\ValidImage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class MovieRequest extends FormRequest
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
            "title" => [
                "required",
                "min:3",
                "max:250",
                new CheckRuleTitle($id, 'movies')
            ],
            'slug' => [
                "required",
                "min:3",
                "max:255",
                new CheckRuleSlug($id),
            ],
            "image" => "nullable|mimes:jpeg,jpg,png,svg,webp|max:2048",
            "duration" => "required|numeric|min:1",
            "director" => "required",
            "trailer_url" => "required",
            "format" => "required",
            "age" => "required|numeric",
            "country" => "required",
            "language" => "required",
            "order" => "nullable|numeric",
            "hot" => "nullable|numeric",
            "parent_id" => "required",
            "active" => "nullable|numeric",
            'release_date'=>'required',
             'premiere_date'=>'required',

            
        ];
    }

    public function messages()
    {
        return [
            "title.required" => __('validation.required', ['attribute' => __('language.name',)]),
            "title.min" => __('validation.min', ['attribute' => __('language.name'), 'min' => 3]),
            "title.max" => __('validation.max', ['attribute' => __('language.name'), 'max' => 255]),
            "slug.required" => __('validation.required', ['attribute' => __('language.slug')]),
            "slug.min" => __('validation.min', ['attribute' => __('language.slug'), 'min' => 3]),
            "slug.max" => __('validation.max', ['attribute' => __('language.slug'), 'max' => 255]),
            "image.mimes" => __('validation.image.mimes', ['attribute' => __('language.image'), 'format' => 'jpeg, jpg, png, svg, webp']),
            "image.max" => __('validation.image.max', ['attribute' => __('language.image'), 'max' => '2MB']),
            "order.numeric" =>  __('validation.numeric', ['attribute' => __('language.order')]),
            "parent_id.required" => __('validation.required', ['attribute' => __('language.admin.movies.genre')]),
            "duration.required" => __('validation.required', ['attribute' => __('language.admin.movies.duration')]),
            "duration.min" => __('validation.min', ['attribute' => __('language.admin.movies.duration'), 'min' => 1]),
            "duration.numeric" =>  __('validation.numeric', ['attribute' => __('language.admin.movies.duration')]),
            "trailer_url.required" => __('validation.required', ['attribute' => __('language.admin.movies.trailer_url')]),
            "format.required" => __('validation.required', ['attribute' => __('language.admin.movies.format')]),
            "age.numeric" =>  __('validation.numeric', ['attribute' => __('language.admin.movies.age')]),
            "age.required" => __('validation.required', ['attribute' => __('language.admin.movies.age')]),
            "country.required" => __('validation.required', ['attribute' => __('language.admin.movies.country')]),
            "director.required" => __('validation.required', ['attribute' => __('language.admin.movies.director')]),
            "hot.numeric" =>  __('validation.numeric', ['attribute' => __('language.admin.hot')]),
            "active.numeric" =>  __('validation.numeric', ['attribute' => __('language.admin.active')]),
            "release_date.required" => __('validation.required', ['attribute' => __('language.admin.movies.release_date')]),
            "premiere_date.required" => __('validation.required', ['attribute' => __('language.admin.movies.premiere_date')]),

        ];
    }
}
