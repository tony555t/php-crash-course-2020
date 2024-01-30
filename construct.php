

<?php
class Schools{
    var $names;
    var $location;
    var $population;

    function  __construct(){
        echo $this->names="School of programming";
       echo $this->location="USA";
        echo $this->population=500;
}
}
$uon = new Schools();
echo "<br>".$uon -> names ." is located in ".$uon -> location;
$jkuat = new Schools();


?>