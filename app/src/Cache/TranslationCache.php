<?php

namespace App\Cache;

use App\Repository\TranslationRepository;
use Symfony\Component\Cache\Adapter\AbstractAdapter;
use Symfony\Contracts\Cache\ItemInterface;

class TranslationCache
{
    private TranslationRepository $translationRepository;
    private AbstractAdapter $cache;

    public function __construct(AbstractAdapter $cache, TranslationRepository $translationRepository)
    {
        $this->cache = $cache;
        $this->translationRepository = $translationRepository;
    }

    public function findForLanguage($languageId, $phrase)
    {
        $key = sprintf("translation:%d:%s", $languageId, $phrase);
        return $this->cache->get($key, function (ItemInterface $item) use ($languageId, $phrase) {
            echo "Adding $phrase to cache";
            return $this->translationRepository->findForLanguage($languageId, $phrase);
        });
    }
}
