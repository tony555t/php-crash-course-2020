<?php


class Car{
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