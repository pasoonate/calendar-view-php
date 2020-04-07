<?php

namespace Pasoonate\CalendarView;

use Pasoonate\CalendarView\Contracts\DayView as DayViewContract;
use Pasoonate\Calendars\CalendarManager;

class DayView extends DayViewContract
{
    public function __construct(CalendarManager $calendar)
    {
        parent::__construct($calendar);
    }

    public function render(): string
    {
        return "<td>{$this->calendar->getDay()}</td>";
    }    
}