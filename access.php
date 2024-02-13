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
//method to display information about the town
 public function  displayTownInformation(){
    echo " town".$this->name."\n";
    echo "mayor".$this->getMayor()."\n";
    echo "finance".$this->getfinance()."\n";
    echo "population".$this->getPopulation()."\n";
 }
}
// creating an instance of  a tow
$kisumu = new Towns( "kisumu","john doe",1000000000,5000000);
$kisumu->displayTownInformation();
$nairobi = new Towns( "nairobi","babu",1000000000,100000000);
$nairobi->displayTownInformation();
$nakuru = new Towns("nakuru","moi",2990000 ,890876);
$nakuru->displayTownInformation();

