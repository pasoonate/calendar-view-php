<?php

namespace Pasoonate\CalendarView;

interface Viewable
{
    /**
     * @return string
     */
    public function render() : string;
}