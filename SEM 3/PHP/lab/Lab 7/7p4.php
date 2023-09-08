<?php

class Vehicle {
    protected $prodyear;
    protected $companyname;
    
    protected function setProdYear($prodyear) {
        $this->prodyear = $prodyear;
    }
    
    protected function getProdYear() {
        return $this->prodyear;
    }
    
    protected function setCompanyName($companyname) {
        $this->companyname = $companyname;
    }
    
    protected function getCompanyName() {
        return $this->companyname;
    }
}

class TwoWheeler extends Vehicle {
    protected $nameofvehicle;
    protected $color;
    
    public function setValues($prodyear, $companyname, $nameofvehicle, $color) {
        $this->setProdYear($prodyear);
        $this->setCompanyName($companyname);
        $this->nameofvehicle = $nameofvehicle;
        $this->color = $color;
    }
    
    public function getValues() {
        echo "Production Year: " . $this->getProdYear() . "<br>";
        echo "Company Name: " . $this->getCompanyName() . "<br>";
        echo "Name of Vehicle: " . $this->nameofvehicle . "<br>";
        echo "Color: " . $this->color . "<br><br>";
    }
}

class FourWheeler extends Vehicle {
    protected $vehiclename;
    protected $color;
    protected $price;
    protected $tolltaxrate;
    
    public function __construct($prodyear, $companyname, $vehiclename, $color, $price, $tolltaxrate) {
        $this->setProdYear($prodyear);
        $this->setCompanyName($companyname);
        $this->vehiclename = $vehiclename;
        $this->color = $color;
        $this->price = $price;
        $this->tolltaxrate = $tolltaxrate;
    }
    
    public function display() {
        echo "Production Year: " . $this->getProdYear() . "<br>";
        echo "Company Name: " .$this->getCompanyName() . "<br>";
        echo "Vehicle Name: " .$this->vehiclename . "<br>";
        echo "Color: " .$this->color . "<br>";
        echo "Price: " .$this->price . "<br>";
        echo "Toll Tax Rate: " .$this->tolltaxrate . "<br><br>";
    }
}

$obj1 = new TwoWheeler();
$obj1->setValues(2020, "Honda", "Activa", "Black");
$obj1->getValues();

$obj2 = new FourWheeler(2020, "Honda", "City", "White", 1000000, 100);
$obj2->display();

?>
