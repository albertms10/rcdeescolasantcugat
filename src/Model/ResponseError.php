<?php

namespace RCDE;

class ResponseError
{
    public function __construct(
        public string $id = 'error',
        public ?int $code = null,
        public ?string $reason = null,
        public ?string $description = null,
    )
    {
    }
}
