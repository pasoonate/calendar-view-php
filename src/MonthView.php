<?php

namespace Pasoonate\CalendarView;

use Pasoonate\CalendarView\Contracts\MonthView as MonthViewContract;
use Pasoonate\Calendars\CalendarManager;

class MonthView extends MonthViewContract
{
    public function __construct(CalendarManager $calendar, WeekView $weekView)
    {
        parent::__construct($calendar, $weekView);
    }

    public function render(): string
    {
        $this->calendar->startOfMonth();
        
        $month = '<tbody>';

        for($i = 0; $i <= 6; $i++) {
            $month .= $this->weekView->render();
        }

        $month .= '</tbody>';

        return $month;
    }    
}