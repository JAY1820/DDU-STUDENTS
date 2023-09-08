<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$products = [
  ['id' => 1, 'name' => 'Product 1', 'price' => 10],
  ['id' => 2, 'name' => 'Product 2', 'price' => 20],
  ['id' => 3, 'name' => 'Product 3', 'price' => 30],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?>! <a href="logout.php">Logout</a></p>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo $product['name']; ?></td>
            <td><?php echo $product['price']; ?></td>
            <td><input type="number" id="quantity-<?php echo $product['id']; ?>" value="1"></td>
            <td><button onclick="addToCart(<?php echo $product['id']; ?>)">Add to Cart</button></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="cart.php">View Cart</a></p>
    <script>
    function addToCart(id) {
        var quantity = document.getElementById('quantity-' + id).value;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert('Product added to cart');
            }
        };
        xhr.open('POST', 'add_to_cart.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('id=' + id + '&quantity=' + quantity);
    }
    </script>
</body>
</html>
