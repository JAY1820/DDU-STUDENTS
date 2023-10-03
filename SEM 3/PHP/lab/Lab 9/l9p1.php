<?php
class Stack {
    private $value = array();
    public function push($item) {
        array_push($this->value, $item);
        echo "Inserted successfully";
    }
    public function pop() {
        if(empty($this->value)) {
            throw new Exception("Stack is empty");
        } else {
            array_pop($this->value);
            echo "Element is popped out";
        }
    }
    public function display() {
        if(empty($this->value)) {
            echo "Your stack is empty";
        } else {
            echo "Your stack elements are: ";
            echo "<table>";
            foreach($this->value as $item) {
                echo "<tr><td>" . $item . "</td></tr>";
            }
            echo "</table>";
        }
    }
}
session_start();
if(!isset($_SESSION['stack'])) {
    $_SESSION['stack'] = new Stack();
}
$stack = $_SESSION['stack'];
if(isset($_POST['push'])) {
    $stack->push($_POST['value']);
} elseif(isset($_POST['pop'])) {
    try {
        $stack->pop();
    } catch(Exception $e) {
        echo 'Error: ' .$e->getMessage();
    }
} elseif(isset($_POST['display'])) {
    $stack->display();
}
?>
