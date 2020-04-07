<?php

namespace Pasoonate\CalendarView;

use Pasoonate\CalendarView\Contracts\WeekView as WeekViewContract;
use Pasoonate\Calendars\CalendarManager;

class WeekView extends WeekViewContract
{
    public function __construct(CalendarManager $calendar, DayView $dayView)
    {
        parent::__construct($calendar, $dayView);
    }

    public function render(): string
    {
        $this->calendar->startOfWeek();
        
        $week = '<tr>';

        for($i = 1; $i <= 7; $i++) {
            $week .= $this->dayView->render();
            $this->calendar->addDay(1);
        }

        $week .= '</tr>';

        return $week;
    }    
}