<?php

namespace RCDE;

class EmailAddress
{
    public function __construct(
        public string $user,
        public string $domain,
    )
    {
    }

    public function getAddress(): string
    {
        return $this->user . '@' . $this->domain;
    }
}
