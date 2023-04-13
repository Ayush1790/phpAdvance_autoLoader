<?php
spl_autoload_register('myAutoLoader');
function myAutoLoader($className){
    include_once './classes/'.$className.'.php';
}
$area=new Area(5,10);
echo "Area is =".$area->getArea();

$perimeter=new Perimeter(5,10);
echo "<br>Perimeter is=".$perimeter->getParameter();

$volume=new Volume(5,10,15);
echo "<br>Volume is=".$volume->getVolume();
?>