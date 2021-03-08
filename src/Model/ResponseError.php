<?php

namespace RCDE\Model;

class ResponseError
{
    public function __construct(
        public string $id = 'error',
        public ?int $code = null,
        public ?string $reason = null,
        public ?string $description = null,
        public bool $known = false,
    )
    {
    }
}
