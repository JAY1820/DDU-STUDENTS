<?php
 $name1 = $_POST["name1"];
 $price1 = $_POST["price1"];
 $quantity1 = $_POST["quantity1"];

 $name2 = $_POST["name2"];
 $price2 = $_POST["price2"];
 $quantity2 = $_POST["quantity2"];

 $name3 = $_POST["name3"];
 $price3 = $_POST["price3"];
 $quantity3 = $_POST["quantity3"];

class Food {
    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getTotalPrice($quantity) {
        return $this->price * $quantity;
    }

    public function order($quantity) {
        return $this->getTotalPrice($quantity);
    }

    public function displayOrder($quantity) {
        echo "Name: " . $this->name . "<br>";
        echo "Price: " . $this->price . "<br>";
        echo "Quantity: " . $quantity . "<br>";
        echo "Total Price: " . $this->order($quantity) . "<br>";
    }
}
function calculateFinalSum($food1, $food2, $food3, $quantity1, $quantity2, $quantity3) {
    return ($food1->getTotalPrice($quantity1) + 
            $food2->getTotalPrice($quantity2) + 
            $food3->getTotalPrice($quantity3));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food1 = new Food($name1, $price1, $quantity1);
    $food2 = new Food($name2, $price2, $quantity2);
    $food3 = new Food($name3, $price3, $quantity3);

    $finalSum = calculateFinalSum($food1, $food2, $food3, $quantity1, $quantity2, $quantity3);

    echo "<h1>Order Summary</h1>";
    echo "<h2>Food 1</h2>";
    $food1->displayOrder($quantity1);
    echo "<h2>Food 2</h2>";
    $food2->displayOrder($quantity2);
    echo "<h2>Food 3</h2>";
    $food3->displayOrder($quantity3);
    
    echo "<p>Total Price for All Items: $" . $finalSum . "</p>";
}
?>
