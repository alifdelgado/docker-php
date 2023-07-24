<?php

namespace App\Repository;

class TranslationRepository extends Repository
{
    public function findForLanguage($languageId, $phrase): ?string
    {
        $stmt = $this->connection->prepare("SELECT value FROM translations WHERE language_id = :languageId AND phrase = :phrase");
        $stmt->execute([
            'languageId' => $languageId,
            'phrase' => $phrase
        ]);
        return $stmt->fetchColumn();
    }
}
