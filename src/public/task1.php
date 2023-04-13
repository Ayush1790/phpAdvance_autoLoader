<?php
spl_autoload_register('myAutoLoader');
function myAutoLoader($className){
    include_once './classes/'.$className.'.php';
}
// task 1 started
echo "<h1>Task 1</h1>";
$area=new Area(5,10);
echo "Area is =".$area->getArea();

$perimeter=new Perimeter(5,10);
echo "<br>Perimeter is=".$perimeter->getParameter();

$volume=new Volume(5,10,15);
echo "<br>Volume is=".$volume->getVolume();
// task 1 ended

?>