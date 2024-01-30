<?php


class Car{
    var $wheels=4;
    var $hood=1;
    var $engine=1;
    var $door=4;
function MoveWheels(){
$this->wheels=10;
}
 function CreateDoors(){
    $this->door=10;
 }


}
$bmw=new Car();


$bmw->MoveWheels();
echo "<hr>";
$nissan->MoveWheels();
$pajero->MoveWheels();
$toyota->MoveWheels();
?>