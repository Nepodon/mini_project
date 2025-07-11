<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>
<h1>Products</h1>
<?php
$result = $conn->query("SELECT * FROM products");
while ($row = $result->fetch_assoc()) {
    echo "<div>";
    echo "<img src='images/{$row['image']}' width='100'>";
    echo "<h3>{$row['name']}</h3>";
    echo "<p>\${$row['price']}</p>";
    echo "<a href='cart.php?add={$row['id']}'>Add to Cart</a>";
    echo "</div>";
}
?>