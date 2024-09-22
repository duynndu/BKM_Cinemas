<?php

namespace App\Traits;

use App\Models\LanguageTransaction;
use App\Models\Language;

// Trait dịch dành cho các khối code liệu gọi code trực tiếp trong controller
trait TranslatableTrait
{
    public function getTranslation($model, $field, $languageCode)
    {
        $language = Language::where('code', $languageCode)->first();
        if (!$language) {
            return null;
        }

        $translation = LanguageTransaction::where('board_id', $model->id)
            ->where('board_type', get_class($model))
            ->where('field_name', $field)
            ->where('language_id', $language->id)
            ->first();

        return $translation ? $translation->translated_value : null;
    }

    public function saveTranslation($model, $field, $languageCode, $translatedValue)
    {
        $language = Language::where('code', $languageCode)->first();
        if (!$language) {
            return;
        }

        LanguageTransaction::updateOrCreate(
            [
                'board_id' => $model->id,
                'board_type' => get_class($model),
                'field_name' => $field,
                'language_id' => $language->id,
            ],
            [
                'translated_value' => $translatedValue,
            ]
        );
    }
}
