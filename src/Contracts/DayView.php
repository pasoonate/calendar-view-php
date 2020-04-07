<?php

namespace Pasoonate\CalendarView\Contracts;

use Pasoonate\Calendars\CalendarManager;
use Pasoonate\CalendarView\Viewable;

abstract class DayView implements Viewable
{
    public $calendar;

    public function __construct(CalendarManager $calendar)
    {
        $this->calendar = $calendar;
    }

    public abstract function render(): string;
}