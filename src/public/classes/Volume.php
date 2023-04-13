<?php
class Volume{
    private $volume;
    function __construct($a,$b,$c){
        $this->volume=$a*$b*$c;
    }
    function getVolume(){
        return $this->volume;
    }
}