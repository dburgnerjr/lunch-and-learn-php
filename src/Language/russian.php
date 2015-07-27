<?php

namespace Chadicus\Language;

class russian implements LanguageInterface
{
    /**
     * Return a hello world greeting for this language implementation.
     *
     * @return string
     */
    public function getGreeting()
    {
		return "Привет Мир!";
	}
}
