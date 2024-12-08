<?php
$conn = mysqli_connect("localhost", "root", "", "pos_system");

// Fetch products
$products = $conn->query("SELECT * FROM products");

// Process Order
if (isset($_POST['process_order'])) {
    $cart = $_POST['cart'];
    $totalAmount = 0;

    // Insert order into orders table
    $conn->query("INSERT INTO orders (total_amount) VALUES (0)");
    $orderId = $conn->insert_id;

    foreach ($cart as $productId => $quantity) {
        $product = $conn->query("SELECT * FROM products WHERE id = $productId")->fetch_assoc();
        $subtotal = $product['price'] * $quantity;
        $totalAmount += $subtotal;

        // Insert order items
        $conn->query("INSERT INTO order_items (order_id, product_id, quantity, subtotal) VALUES ($orderId, $productId, $quantity, $subtotal)");

        // Update product stock
        $conn->query("UPDATE products SET stock = stock - $quantity WHERE id = $productId");
    }

    // Update total amount in orders table
    $conn->query("UPDATE orders SET total_amount = $totalAmount WHERE id = $orderId");

    echo "<p>Order processed successfully! Order ID: $orderId</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .cart-input {
            width: 50px;
        }
    </style>
</head>
<body>
    <h2>POS System</h2>
    <form method="POST">
        <table>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Quantity</th>
            </tr>
            <?php while ($row = $products->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                <td>
                    <input type="number" name="cart[<?php echo $row['id']; ?>]" class="cart-input" min="0" max="<?php echo $row['stock']; ?>" value="0">
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <button type="submit" name="process_order">Process Order</button>
    </form>
</body>
</html>
