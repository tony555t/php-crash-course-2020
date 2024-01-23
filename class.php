<?php

class car{
    function MoveWheels(){
        echo "right,lrft ,in circles";
    }

}
if (method_exists("Car","MoveWheels")){
    echo "method available";
}else{
    echo "method not available";
}
?>