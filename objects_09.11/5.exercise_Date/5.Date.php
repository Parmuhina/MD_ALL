<?php
class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->day=$day;
        $this->month=$month;
        $this->year=$year;
    }

    public function displayDate ():string {
        return $this->month.chr(47).$this->day.chr(47).$this->year;
    }
}

