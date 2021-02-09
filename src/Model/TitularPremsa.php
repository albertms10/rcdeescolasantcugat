<?php

namespace RCDE;

use JetBrains\PhpStorm\Pure;

class TitularPremsa
{
    public int $id_titular;
    public string $text_titular;
    public string $data_titular;

    private string $urls_titular;

    #[Pure] public function getUrls(): false|array
    {
        return explode(';', $this->urls_titular);
    }
}
