<?php
$conn = mysqli_connect("localhost", "root", "", "pos_system");

// Add product
if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $conn->query("INSERT INTO products (name, price, stock) VALUES ('$name', $price, $stock)");
    header("Location: product_management.php");
}

// Edit product
if (isset($_POST['edit_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $conn->query("UPDATE products SET name='$name', price=$price, stock=$stock WHERE id=$id");
    header("Location: product_management.php");
}

// Delete product
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM products WHERE id=$id");
    header("Location: product_management.php");
}

// Fetch products
$products = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #4CAF50; color: white; }
        button { padding: 10px 15px; background-color: #4CAF50; color: white; border: none; }
        form { display: inline; }
    </style>
</head>
<body>
    <h2>Product Management</h2>
    <form method="POST">
        <h3>Add Product</h3>
        <input type="text" name="name" placeholder="Name" required>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <input type="number" name="stock" placeholder="Stock" required>
        <button type="submit" name="add_product">Add Product</button>
    </form>
    <h3>Products List</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $products->fetch_assoc()): ?>
        <tr>
            <form method="POST">
                <td><input type="text" name="name" value="<?php echo $row['name']; ?>"></td>
                <td><input type="number" step="0.01" name="price" value="<?php echo $row['price']; ?>"></td>
                <td><input type="number" name="stock" value="<?php echo $row['stock']; ?>"></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="edit_product">Edit</button>
                    <a href="product_management.php?delete=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </form>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
