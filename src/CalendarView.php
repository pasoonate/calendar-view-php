<?php

namespace Pasoonate\CalendarView;

use Pasoonate\Calendars\CalendarManager;
use Pasoonate\CalendarView\Viewable;
use Pasoonate\CalendarView\MonthView;
use Pasoonate\CalendarView\WeekView;
use Pasoonate\CalendarView\DayView;

/**
 * @property CalendarManager $calendar
 * @property MonthView $monthView
 */
class CalendarView implements Viewable {

    public $calendar;
    public $monthView;

    public function __construct(CalendarManager $calendar, ?MonthView $monthView = null)
    {
        $this->calendar = $calendar;
        $this->monthView = $monthView;
        
        if(is_null($monthView)) {
            $dayView = new DayView($calendar);
            $weekView = new WeekView($calendar, $dayView);
            $monthView = new MonthView($calendar, $weekView);

            $this->monthView = $monthView;
        }
    }

    public function render(): string
    {
        $thead = "<thead><tr><td>ش</td><td>ی</td><td>د</td><td>س</td><td>چ</td><td>پ</td><td>ج</td></tr></thead>";
        $tbody = $this->monthView->render();

        return "<table>{$thead}{$tbody}</table>";
    }    
}