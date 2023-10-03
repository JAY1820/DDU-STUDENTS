<?php

class Shape {
    public function area() {

    }
    }
    class Circle extends Shape {
        private $radius;
        public static $pi=3.14;
        public function __construct($radius) {
        $this->radius = $radius;
        }
        public function area() {
        return static::$pi *$this->radius*$this->radius;
        }
    }
    
    class Square extends Shape {
        
        private $length;
        
            public function __construct($length){
                $this->length=$length;
            }

            public function area(){
                 if (is_numeric($this->length))
                {
                     return $this->length * $this->length;
                }
                }
        }
    class Rectangle extends Shape {

        private $length,$width;
        public function __construct($length,$width){
            $this->length=$length;
            $this->width=$width;
        }
        public function area(){
            return $this->length * $this->width;
        }
    }
$circle = new Circle(10);
$ans=$circle->area();
echo "area of cicrcle is:".$ans."<br>";

$square=new square(20);
$ans=$square->area();
echo "area of suqare is:".$ans."<br>";

$r1=new Rectangle(5,10);
$ans=$r1->area();
echo "area of rectangle is:".$ans."<br>";

?>
