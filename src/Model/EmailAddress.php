<?php

namespace RCDE;

class EmailAddress
{
    public function __construct(
        public string $user,
        public string $domain = 'rcdeescolasantcugat.com',
    )
    {
    }

    public function getAddress(): string
    {
        return $this->user . '@' . $this->domain;
    }
}
