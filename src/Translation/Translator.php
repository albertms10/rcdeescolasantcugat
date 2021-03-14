<?php

namespace RCDE\Translation;

abstract class Translator
{
    private array $store = [];

    public function __construct(
        protected ?string $lang = null,
        protected ?string $package = null,
    )
    {
        if (!empty($this->package)) return;

        $split_class_name = preg_split('/\\\\/', static::class, flags: PREG_SPLIT_NO_EMPTY);
        $this->package = end($split_class_name);
    }

    public function t(string $string, ?string $lang = null, string ...$params): string
    {
        session_start();
        $this->lang = $lang ?? $_SESSION['LOCALE'];

        if ($params) {
            return vsprintf($this->translate($string), $params);
        }

        return $this->translate($string);
    }

    private function translate(string $string): string
    {
        session_start();
        $lang = $this->lang;

        if (!array_key_exists($lang, $this->store)) {
            $this->loadTranslationsFile($lang);
        }

        return $this->findString($string, $lang);
    }

    private function loadTranslationsFile(?string $lang = null): void
    {
        $filename = $this->translationsFilename($lang);
        if (!file_exists($filename)) {
            $lang = $_SESSION['DEFAULT_LOCALE'];
            $filename = $this->translationsFilename($lang);
        }

        foreach (file($filename) as $line) {
            if (!preg_match('/(\w|\d)+:\s+(\w|\d|%)+/', $line)) continue;

            [$key, $value] = preg_split('/:\s+/', $line, limit: 2);
            $this->store[$lang][$key] = trim($value);
        }
    }

    private function translationsFilename(?string $lang = null, ?string $package = null): string
    {
        $lang ??= $this->lang;
        $package ??= $this->package;

        return ROOT . "/../src/Translation/$lang/$package.yaml";
    }

    private function findString(?string $string, string $lang): string
    {
        if (empty($string)) return '';

        if ($this->checkStoreFor($lang, $string)) {
            return $this->store[$lang][$string];
        }

        return ucfirst(preg_replace('/[-_.]/', ' ', $string));
    }

    private function checkStoreFor(string $lang, ?string $string = null): bool
    {
        return array_key_exists($lang, $this->store)
            and (empty($string) ? true : array_key_exists($string, $this->store[$lang]));
    }

    public function findAlternateOf(?string $value, string $lang): string
    {
        $key = $this->findKeyOf($value);
        return $this->findString($key, $lang);
    }

    public function findKeyOf(?string $value): ?string
    {
        if (empty($value)) return '';

        $this->loadAllTranslationsFiles();

        $key = null;
        foreach ($this->store as $lang_key => $translations) {
            foreach ($translations as $translation_key => $translation) {
                if ($translation === $value) {
                    $key = $translation_key;
                    break 2;
                }
            }
        }

        return $key;
    }

    private function loadAllTranslationsFiles(): void
    {
        session_start();
        foreach ($_SESSION['LOCALES'] as $locale) {
            if ($this->checkStoreFor($locale)) continue;
            $this->loadTranslationsFile($locale);
        }
    }
}
