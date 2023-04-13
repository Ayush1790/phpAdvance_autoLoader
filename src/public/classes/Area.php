<?php
class Area{
    private $area;
    function __construct($a,$b)
    {
        $this->area=$a*$b;
    }
    function getArea(){
        return $this->area;
    }
}