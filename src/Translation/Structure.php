<?php

namespace RCDE\Translation;

require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

final class Structure extends Translator
{
    public function __construct(?string $lang = null)
    {
        parent::__construct($lang);
    }

    public function resolvedUrl(
        string $pathname = '',
        string $filename = 'index.php',
        ?string $locale = null,
        bool $explicit_locale = false,
        bool $full_path = false,
        bool $include_filename = false,
    ): array
    {
        require ROOT . '/../src/Utils/start-secure-session.php';

        $locale ??= $_SESSION['LOCALE'];
        $localized_pathname = join('/', $this->findAlternatesOf(preg_split('/\//', $pathname), $locale));

        $exists = ($pathname === '/' or $pathname === "/$filename" or !empty($localized_pathname));
        $resolved_locale = $locale;
        $localized_path = $this->pathnameWithLocale($localized_pathname, locale: $locale, explicit_locale: $explicit_locale);

        if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $localized_path . $filename)) {
            $exists = false;
            $resolved_locale = $_SESSION['DEFAULT_LOCALE'];
            $localized_path = $this->pathnameWithLocale($localized_pathname, locale: $resolved_locale, explicit_locale: $explicit_locale);

            if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $localized_path . $filename)) {
                $localized_path = '/';
            }
        }

        return [
            'locale' => $resolved_locale,
            'url' => ($full_path ? self::baseUrl() : '') . $localized_path . ($include_filename ? $filename : ''),
            'exists' => $exists,
        ];
    }

    private function pathnameWithLocale(
        string $pathname = '',
        ?string $locale = null,
        bool $explicit_locale = false,
        bool $full_path = false,
    ): string
    {
        if (empty($locale)) {
            require ROOT . '/../src/Utils/start-secure-session.php';

            $locale = $_SESSION['LOCALE'];
        }

        return ($full_path ? self::baseUrl() : '/')
            . (($explicit_locale or ($locale !== $_SESSION['DEFAULT_LOCALE'])) ? "$locale/" : '')
            . ((empty($pathname) or $pathname === '/') ? '' : "$pathname/");
    }

    private static function baseUrl(bool $use_https = true): string
    {
        $protocol = $use_https ? 'https' : 'http';
        return "$protocol://{$_SERVER['SERVER_NAME']}";
    }
}
