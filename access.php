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
}