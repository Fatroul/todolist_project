<?php
class Month {
    private $monthname;
    private $year;

    public function __construct(int $monthnum, int $year) {
        $this->setMonthName($monthnum);
        $this->year = $year; //???
    }

    function getMonthName() : string {
        return $this->monthname;
    }
    function setMonthName(string $num) {
        $fr_names = [1=>"Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
        $this->monthname = $fr_names[$num];
    }

    function getYear() : int {
        return $this->year;
    }

    function setYear(int $year) {
        $this->year = $year;
    }
}