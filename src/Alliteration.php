<?php

namespace Chadicus;

class Alliteration
{
    private $dictionary;

    public function __construct(Alliteration\DictionaryInterface $dictionary)
    {
        $this->dictionary = $dictionary;
    }

    public function getPhrase($prefix, $words = 2)
    {
        $phrase = '';
        for ($i = 0; $i < $words; $i++) {
            $phrase .= "{$this->dictionary->getWord($prefix)} ";
        }

        ucwords($phrase);

        return trim($phrase);
    }
}
