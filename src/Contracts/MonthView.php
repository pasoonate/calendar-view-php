<?php

namespace Pasoonate\CalendarView\Contracts;

use Pasoonate\Calendars\CalendarManager;
use Pasoonate\CalendarView\Viewable;
use Pasoonate\CalendarView\WeekView;

abstract class MonthView implements Viewable
{
    public $calendar;
    public $weekView;

    public function __construct(CalendarManager $calendar, WeekView $weekView)
    {
        $this->calendar = $calendar;
        $this->weekView = $weekView;
    }

    public abstract function render(): string;
}