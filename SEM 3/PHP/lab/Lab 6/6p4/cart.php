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

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head]
<body>
    <h1>Cart</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?>! <a href="logout.php">Logout</a></p>
    <?php if (empty($cart)): ?>
    <p>Your cart is empty.</p>
    <?php else: ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr]
        <?php foreach ($cart as $id => $quantity): ?>
        <?php
        $product = array_filter($products, function ($p) use ($id) { return $p['id'] == $id; });
        $product = array_shift($product);
        $subtotal = $product['price'] * $quantity;
        $total += $subtotal;
        ?>
        <tr]
            <td><?php echo $product['name']; ?></td]
            <td><?php echo $product['price']; ?></td]
            <td><?php echo $quantity; ?></td]
            <td><?php echo $subtotal; ?></td]
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="3">Total</td>
            <td><?php echo $total; ?></td>
        </tr>
    </table>
    <form action="purchase.php" method="post">
        <input type="submit" value="Checkout">
    </form>
    <?php endif; ?>
    <p><a href="product.php">Continue Shopping</a></p>
</body>
</html>
