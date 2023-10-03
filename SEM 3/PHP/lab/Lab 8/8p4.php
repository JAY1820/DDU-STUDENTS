<?php
class Item {
    protected $itemName;
    protected $itemNo;

    public function __construct($itemName, $itemNo) {
        $this->itemName = $itemName;
        $this->itemNo = $itemNo;
    }

    public function display() {
        echo "Item Name: ".$this->itemName."<br>";
        echo "Item No: ".$this->itemNo."<br>";
    }
}
class Category extends Item {
    protected $categoryName;
    protected $subCategory;
    protected $price;

    public function __construct($itemName, $itemNo, $categoryName, $subCategory, $price) {
        parent::__construct($itemName, $itemNo);
        $this->categoryName = $categoryName;
        $this->subCategory = $subCategory;
        $this->price = $price;
    }
    public function displayItem() {
        parent::display();
        echo "Category: ".$this->categoryName."<br>";
        echo "Sub Category: ".$this->subCategory."<br>";
        echo "Price: ".$this->price."<br>";
    }

    public function getPrice() {
        return $this->price;
    }
}

class Purchase extends Category {
    private $purchaseId;
    private $totalAmount;
    private $quantity;

    public function __construct($itemName, $itemNo, $categoryName, $subCategory, 
                                $price, $purchaseId, $quantity) {
        parent::__construct($itemName, $itemNo, $categoryName, 
                            $subCategory, $price);
        $this->purchaseId = $purchaseId;
        $this->quantity = $quantity;
        $this->totalAmount = self::calculate_order_amount();
    }

    private function calculate_order_amount() {
        return ($this->quantity * parent::getPrice());
    }

    public function display_purchase() {
        parent::displayItem();
        echo "Purchase ID: ".$this->purchaseId."<br>";
        echo "Quantity: ".$this->quantity."<br>";
        echo "Total Amount: ".$this->totalAmount."<br>";
    }
}
$purchase = new Purchase("Laptop", 1, "Electronics", "Computers", 50000, 1234, 2);
$purchase->display_purchase();

?>
