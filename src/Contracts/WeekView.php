<?php

namespace Pasoonate\CalendarView\Contracts;

use Pasoonate\Calendars\CalendarManager;
use Pasoonate\CalendarView\DayView;
use Pasoonate\CalendarView\Viewable;

abstract class WeekView implements Viewable
{
    public $calendar;
    public $dayView;

    public function __construct(CalendarManager $calendar, DayView $dayView)
    {
        $this->calendar = $calendar;
        $this->dayView = $dayView;
    }

    public abstract function render(): string;
}