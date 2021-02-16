<?php

namespace RCDE;

use JetBrains\PhpStorm\Pure;

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

    #[Pure] public function getUrls(): false|array
    {
        return explode(';', $this->urls_titular);
    }
}
