<?php


class Car{
    var $wheels=4;
    var $hood=1;
    var $engine=1;
    var $door=4;
function MoveWheels(){
    echo "The car is moving with wheels<br>";
}

}
$bmw=new Car();
$nissan=new Car();
$pajero=new Car();
$toyota=new Car();

$bmw->MoveWheels();
echo "<hr>";
$nissan->MoveWheels();
$pajero->MoveWheels();
$toyota->MoveWheels();
?>