<?php

use Pasoonate\CalendarView\CalendarView;
use Pasoonate\Pasoonate;
use PHPUnit\Framework\TestCase;

class CalendarViewTest extends TestCase
{
    public function testRender()
    {
        $pasoonate = Pasoonate::make();
        $pasoonate->jalali();

        $calendarView = new CalendarView($pasoonate);

        $calendar = $calendarView->render();

        $this->assertIsString($calendar, $calendar);
    }
}