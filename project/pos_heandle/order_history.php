<?php
$conn = mysqli_connect("localhost", "root", "", "pos_system");

// Fetch orders
$orders = $conn->query("SELECT * FROM orders");

// Fetch order items
function getOrderItems($conn, $orderId) {
    return $conn->query("SELECT products.name, order_items.quantity, order_items.subtotal
                         FROM order_items 
                         JOIN products ON order_items.product_id = products.id 
                         WHERE order_id = $orderId");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
    </style>
</head>
<body>
    <h2>Order History</h2>
    <table>
        <tr>
            <th>Order ID</th>
            <th>Order Date</th>
            <th>Total Amount</th>
            <th>Details</th>
        </tr>
        <?php while ($order = $orders->fetch_assoc()): ?>
        <tr>
            <td><?php echo $order['id']; ?></td>
            <td><?php echo $order['order_date']; ?></td>
            <td><?php echo $order['total_amount']; ?></td>
            <td>
                <button onclick="toggleDetails(<?php echo $order['id']; ?>)">View Details</button>
                <div id="details-<?php echo $order['id']; ?>" style="display: none;">
                    <h4>Order Items</h4>
                    <table>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                        </tr>
                        <?php
                        $items = getOrderItems($conn, $order['id']);
                        while ($item = $items->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td><?php echo $item['quantity']; ?></td>
                            <td><?php echo $item['subtotal']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <script>
        function toggleDetails(orderId) {
            const detailsDiv = document.getElementById(`details-${orderId}`);
            detailsDiv.style.display = detailsDiv.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>
