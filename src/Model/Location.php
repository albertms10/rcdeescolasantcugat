<?php

namespace RCDE;

class Location
{
    public function __construct(
        public string $address,
        public string $zip,
        public string $city,
        public string $province,
        public string $url,
        public string $gmaps,
        public ?string $number = null,
    )
    {
    }

    public function getFullAddress(): string
    {
        return $this->zip . ' ' . $this->city . ' (' . $this->province . ')';
    }
}
