<?php
$conn = mysqli_connect("localhost", "root", "", "pos_system");

$orders = $conn->query("SELECT * FROM orders");

function getOrderDetails($conn, $orderId) {
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
</head>
<body>
    <h2>Order History</h2>
    <table border="1">
        <tr>
            <th>Order ID</th>
            <th>Date</th>
            <th>Total</th>
            <th>Discount</th>
            <th>Tax</th>
            <th>Net Total</th>
            <th>Details</th>
        </tr>
        <?php while ($order = $orders->fetch_assoc()): ?>
        <tr>
            <td><?php echo $order['id']; ?></td>
            <td><?php echo $order['order_date']; ?></td>
            <td><?php echo $order['total_amount']; ?></td>
            <td><?php echo $order['discount']; ?></td>
            <td><?php echo $order['tax']; ?></td>
            <td><?php echo $order['net_total']; ?></td>
            <td>
                <button onclick="toggleDetails(<?php echo $order['id']; ?>)">View Details</button>
                <div id="details-<?php echo $order['id']; ?>" style="display:none;">
                    <?php 
                    $details = getOrderDetails($conn, $order['id']);
                    while ($detail = $details->fetch_assoc()): ?>
                    <p><?php echo $detail['name']; ?> (x<?php echo $detail['quantity']; ?>): $<?php echo $detail['subtotal']; ?></p>
                    <?php endwhile; ?>
                </div>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <script>
        function toggleDetails(id) {
            const details = document.getElementById(`details-${id}`);
            details.style.display = details.style.display === "none" ? "block" : "none";
        }
    </script>
</body>
</html>
