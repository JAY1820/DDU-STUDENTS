<?php

class Course {
    protected $coursename;
    protected $noofyear;
    
    public function setCourseName($coursename) {
        $this->coursename = $coursename;
    }
    
    public function getCourseName() {
        return $this->coursename;
    }
    
    public function setNoOfYear($noofyear) {
        $this->noofyear = $noofyear;
    }
    
    public function getNoOfYear() {
        return $this->noofyear;
    }
}

class Student extends Course {
    protected $name;
    protected $passoutyear;
    protected $resultclass;
    
    public function setValue($name, $passoutyear, $resultclass) {
        $this->name = $name;
        $this->passoutyear = $passoutyear;
        $this->resultclass = $resultclass;
    }
    
    public function display() {
        echo "Name: " . $this->name . "<br>";
        echo "Passout Year: " . $this->passoutyear . "<br>";
        echo "Result Class: " . $this->resultclass . "<br>";
        echo "Course Name: " . $this->getCourseName() . "<br>";
        echo "No. of Year: " . $this->getNoOfYear() . "<br><br>";
    }
}

$obj1 = new Student();
$obj1->setCourseName("B.Tech");
$obj1->setNoOfYear(4);
$obj1->setValue("Jay", 2020, "First");
$obj1->display();

$obj2 = new Student();
$obj2->setCourseName("M.Tech");
$obj2->setNoOfYear(2);
$obj2->setValue("Karan", 2021, "Second");
$obj2->display();

$obj3 = new Student();
$obj3->setCourseName("B.Sc");
$obj3->setNoOfYear(3);
$obj3->setValue("Yagna", 2019, "Third");
$obj3->display();


?>
