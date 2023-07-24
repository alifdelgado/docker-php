<?php

namespace App\Model;

class Language
{
    public int $id;
    public string $name;
    public const TABLE = 'languages';

    /**
     * Get the value of id.
     *
     * @return int The id value.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Retrieves the value of the name property.
     *
     * @return string The value of the name property.
     */
    public function getName(): string
    {
        return $this->name;
    }
}
