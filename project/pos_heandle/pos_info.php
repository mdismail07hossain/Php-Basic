<?php
$conn = mysqli_connect("localhost", "root", "", "pos_system");

$products = $conn->query("SELECT * FROM products");

if (isset($_POST['process_order'])) {
    $cart = $_POST['cart'];
    $discount = $_POST['discount'];
    $taxRate = $_POST['tax'];
    $total = 0;

$conn->query("INSERT INTO orders (total_amount, discount, tax, net_total) VALUES (0, 0, 0, 0)");

    $orderId = $conn->insert_id;

    foreach ($cart as $productId => $quantity) {
        if ($quantity > 0) {
            $product = $conn->query("SELECT * FROM products WHERE id=$productId")->fetch_assoc();
            $subtotal = $product['price'] * $quantity;
            $total += $subtotal;

            $conn->query("INSERT INTO order_items (order_id, product_id, quantity, subtotal) VALUES ($orderId, $productId, $quantity, $subtotal)");
            $conn->query("UPDATE products SET stock = stock - $quantity WHERE id=$productId");
        }
    }

    $discountAmount = ($total * $discount) / 100;
    $tax = (($total - $discountAmount) * $taxRate) / 100;
    $netTotal = $total - $discountAmount + $tax;

    $conn->query("UPDATE orders SET total_amount=$total, discount=$discountAmount, tax=$tax, net_total=$netTotal WHERE id=$orderId");

    echo "<h3>Order Processed Successfully! Receipt:</h3>";
    echo "<p>Total: $$total</p>";
    echo "<p>Discount: $$discountAmount</p>";
    echo "<p>Tax: $$tax</p>";
    echo "<p>Net Total: $$netTotal</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS</title>
</head>
<body>
    <h2>Point of Sale</h2>
    <form method="POST">
        <table border="1">
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Quantity</th>
            </tr>
            <?php while ($product = $products->fetch_assoc()): ?>
            <tr>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['stock']; ?></td>
                <td><input type="number" name="cart[<?php echo $product['id']; ?>]" min="0" max="<?php echo $product['stock']; ?>"></td>
            </tr>
            <?php endwhile; ?>
        </table>
        <label>Discount (%): <input type="number" name="discount" value="0"></label>
        <label>Tax Rate (%): <input type="number" name="tax" value="0"></label>
        <button type="submit" name="process_order">Process Order</button>
    </form>
</body>
</html>
