<?php
abstract class Employee {
    protected $name;
    protected $yearOfJoining;
    protected $dob;
    protected $department;
    public function __construct($name, $yearOfJoining, $dob, $department) {
        $this->name = $name;
        $this->yearOfJoining = $yearOfJoining;
        $this->dob = $dob;
        $this->department = $department;
    }

    public function display() {
        echo "<h2>Employee Details</h2>";
        echo "Name: ".$this->name."<br>";
        echo "Year of Joining: ".$this->yearOfJoining."<br>";
        echo "Date of Birth: ".$this->dob."<br>";
        echo "Department: ".$this->department."<br>";
    }

    abstract public function calculate_salary();
}
class Manager extends Employee {
    private $basicSalary;
    private $da;
    private $taxAmount;
    private $hra;
    public function __construct($name, $yearOfJoining, $dob, 
                                $department, $basicSalary, 
                                $da, $taxAmount, $hra) 
        {
        parent::__construct($name, $yearOfJoining, 
                            $dob, $department);
        $this->basicSalary = $basicSalary;
        $this->da = $da;
        $this->taxAmount = $taxAmount;
        $this->hra = $hra;
    }
    public function calculate_salary() {
        return ($this->basicSalary + 
                $this->da + 
                $this->hra - 
                $this->taxAmount);
    }
    public function display() {
        parent::display();
        echo "Designation: Manager<br>";
        echo "Salary: ".$this->calculate_salary()."<br>";
    }
}
class Worker extends Employee {
    private $wagesPerHour;
    private $workedHours;

    public function __construct($name, 
                                $yearOfJoining, 
                                $dob, 
                                $department,
                                $wagesPerHour,
                                $workedHours) {
        parent::__construct($name,
                            $yearOfJoining,
                            $dob,
                            $department);
        $this->wagesPerHour = 
            (float)$wagesPerHour;
        $this->workedHours = 
            (int)$workedHours;
    }

    public function calculate_salary() {
        return ($this->wagesPerHour * 
                (float)$this->workedHours);
    }

    public function display() {
        parent::display();
        echo "Designation: Worker<br>";
        echo "Salary: ".$this->calculate_salary()."<br>";
    }
}
$manager = new Manager("Jay", 2023, "2001-01-01", 
                       "Sales", 50000.00, 10000.00, 5000.00,
                       20000.00);
$worker = new Worker("ram", 2023, "2001-01-01", 
                     "Production", 500.00, 160);
$manager->display();
$worker->display();
?>
