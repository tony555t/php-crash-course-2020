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
    
 }


}
$bmw=new Car();

class Plane extends Car{


}
$jet=new Plane();
$jet->MoveWheels();

?>