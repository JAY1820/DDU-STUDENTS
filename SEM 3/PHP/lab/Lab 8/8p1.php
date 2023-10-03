<?php

class Course{
    public  $coursename;
    public  $no_of_year;
    public function __construct($coursename,$no_of_year)
    {
        $this->coursename=$coursename;
        $this->no_of_year=$no_of_year;
    }
    public function display()
    {
         echo "course name is:".$this->coursename."<br>"."no of course duration:".$this->no_of_year."<br>";
    }
}


class Student extends Course{
    public $stud_id;
    public $stud_name;
    public $marks = array();

    public function __construct($id,$name,$mark,$c_name,$no_of_year){
        parent::__construct($c_name,$no_of_year);
        $this->stud_id = $id;
        $this->stud_name = $name;
        for ($i=0; $i < 3; $i++) { 
            $this->marks[$i] = $mark[$i];
        }
    }

    public function caltotal(){
        $sum=0;
        for ($i=0; $i <3 ; $i++) { 
            $sum+= $this->marks[$i];
        }

        echo "total marks are:".$sum;
    }

    public function dispaly(){
        echo "student infomation"."<br>";
        parent::display();
        echo "student ID:".$this->stud_id."<br>";
        echo "student name".$this->stud_name."<br>";
    }
}
$marks=array(70,80,90);
$obj=new Student(18,"jay",$marks,"mca",2);
$obj->dispaly();
$obj->caltotal();
?>
