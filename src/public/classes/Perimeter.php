<?php
class Perimeter{
    private $perimeter;
    function __construct($a,$b){
        $this->perimeter=2*($a+$b);
    }
    function getParameter(){
        return $this->perimeter;
    }

}