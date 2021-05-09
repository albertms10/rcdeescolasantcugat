<?php

namespace RCDE\Model;

class PictureGallery
{
    public function __construct(
        public string $src_dir,
        public string $thumbnail_src_dir,
        public ?string $title = null,
        public ?string $subtitle = null,
        public int $width = 800,
        public int $height = 600,
        public array $picture_names = [],
    )
    {
    }
}
