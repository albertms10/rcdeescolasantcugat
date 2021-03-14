<?php

namespace RCDE\Model;

class TimetableDay
{
    public function __construct(
        public int $weekday,
        public string $startTime,
        public ?string $endTime,
    )
    {
    }

    public function getTextualWeekday(): string
    {
        return utf8_encode(strftime('%A', 1609714800 + (86400 * $this->weekday)));
    }

    public function getTimeRange(): string
    {
        return $this->startTime . (empty($this->endTime) ? '' : "–$this->endTime");
    }
}
