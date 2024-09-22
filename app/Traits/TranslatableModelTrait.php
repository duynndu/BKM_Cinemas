<?php

namespace App\Traits;

use App\Models\LanguageTransaction;
use App\Models\Language;

// Trait dịch dành cho models
trait TranslatableModelTrait
{
    public function getTranslated($field, $languageCode = null)
    {
        $languageCode = $languageCode ?? app()->getLocale();

        $language = Language::where('code', $languageCode)->first();

        if (!$language) {
            return $this->$field;
        }

        $translation = LanguageTransaction::where('board_id', $this->id)
            ->where('board_type', get_class($this))
            ->where('field_name', $field)
            ->where('language_id', $language->id)
            ->first();

        return $translation ? $translation->translated_value : $this->$field;
    }

    public function saveTranslated($field, $languageCode, $translatedValue)
    {
        $language = Language::where('code', $languageCode)->first();
        if (!$language) {
            return;
        }

        LanguageTransaction::updateOrCreate(
            [
                'board_id' => $this->id,
                'board_type' => get_class($this),
                'field_name' => $field,
                'language_id' => $language->id,
            ],
            [
                'translated_value' => $translatedValue,
            ]
        );
    }
}

