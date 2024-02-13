<?php
class Towns{

    public $name;
    protected $mayor;
    private $finance;
    var $population;


    //constructor to initialize
    public function __construct($name, $mayor, $finance, $population) {
        $this->name=$name;
        $this->mayor=$mayor;
        $this->finance=$finance;
        $this->population=$population;
    }
     //getter for the mayor property<

     public function getMayor(){
        return $this->mayor;

    }
 // setter for the mayor property
 public  function setMayor($newMayor){
    $this->mayor=$newMayor;

 }
 //getter for the finance property
 public function getFinance(){
    return $this->finance;
 }
 //setter for the Finance property
 public function setFinance($newFinance){
    $this->finance=$newFinance;
 }
 // getter for the popularity property
 public function getPopulation(){

    return $this->Population;
 }
// setter for the popularity property
 public function setPopulation($newpopulation){
  $this->population=$newpopulation;
}

}