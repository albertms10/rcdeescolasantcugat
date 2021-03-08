<?php

namespace RCDE\Model;

class TitularPremsa
{
    public function __construct(
        public ?int $id_titular = null,
        public ?string $text_titular = null,
        public ?string $data_titular = null,
        private ?string $urls_titular = null,
    )
    {
    }

    public function getUrls(): false|array
    {
        $urls = [];

        $lang_urls = explode(';', $this->urls_titular);
        foreach ($lang_urls as $lang_url) {
            [$url, $lang] = explode(',', $lang_url);
            array_push($urls, ['url' => $url, 'lang' => $lang]);
        }

        return $urls;
    }
}
