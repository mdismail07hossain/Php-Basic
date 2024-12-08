<?php
$conn = mysqli_connect("localhost", "root", "", "pos_system");

if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $conn->query("INSERT INTO products (name, price, stock) VALUES ('$name', $price, $stock)");
}

if (isset($_POST['edit_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $conn->query("UPDATE products SET name='$name', price=$price, stock=$stock WHERE id=$id");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM products WHERE id=$id");
}

$products = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
</head>
<body>
    <h2>Product Management</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Product Name" required>
        <input type="number" name="price" step="0.01" placeholder="Price" required>
        <input type="number" name="stock" placeholder="Stock" required>
        <button type="submit" name="add_product">Add Product</button>
    </form>
    <h3>Products</h3>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
        <?php while ($product = $products->fetch_assoc()): ?>
        <tr>
            <form method="POST">
                <td><input type="text" name="name" value="<?php echo $product['name']; ?>"></td>
                <td><input type="number" name="price" step="0.01" value="<?php echo $product['price']; ?>"></td>
                <td><input type="number" name="stock" value="<?php echo $product['stock']; ?>"></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                    <button type="submit" name="edit_product">Edit</button>
                    <a href="product_management.php?delete=<?php echo $product['id']; ?>">Delete</a>
                </td>
            </form>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
