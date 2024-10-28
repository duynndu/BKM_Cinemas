<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;

class CheckRuleSlug implements ValidationRule
{
    protected ?int $id;

    public function __construct(?int $id = null)
    {
        $this->id = $id;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $id = $this->id;

        $tables = ['blocks', 'category_posts', 'pages', 'posts', 'systems'];

        foreach ($tables as $table) {
            $query = DB::table($table)->where('slug', $value)->whereNull('deleted_at');

            // Bỏ qua bản ghi hiện tại
            if ($id !== null && is_int($id) && $id > 0) {
                $query->where('id', '!=', $id);
            }

            // Kiểm tra xem slug có tồn tại không
            if ($query->exists()) {
                $fail(__('validation.unique', ['attribute' => __('language.admin.slug')]));
                return; // Dừng lại khi tìm thấy slug tồn tại
            }
        }
    }
}
