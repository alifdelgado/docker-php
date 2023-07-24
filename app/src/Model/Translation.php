<?php

namespace App\Model;

class Translation
{
    private int $id;
    private int $translation_id;
    private string $phrase;
    private string $translation;

    /**
     * Get the id of the object.
     *
     * @return int The id of the object.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of translation_id.
     *
     * @return int The translation ID.
     */
    public function getTranslationId(): int
    {
        return $this->translation_id;
    }

    /**
     * Get the value of the phrase property.
     *
     * @return string The value of the phrase property.
     */
    public function getPhrase(): string
    {
        return $this->phrase;
    }

    /**
    * Get the translation value.
    *
    * @return string The translation value.
    */
    public function getTranslation(): string
    {
        return $this->translation;
    }
}
