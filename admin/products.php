<?php
require_once "../includes/db.php";
require_once "../includes/images.php";

setlocale(LC_MONETARY, 'en_IN.UTF-8');

$sql = "SELECT * FROM products WHERE 1";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $product_id = $row['id'];
        $product_name = $row['name'];
        $product_category = $row['category'];
        $product_description = $row['description'];
        $product_price = (float) $row['price'];
        $product_image = $row['image_url'];
        $product_stock = $row['stock'];

        getImage($product_image);
        echo "<div class='product-details'>";
        echo "<h1>".$product_name."</h1>";
        echo "<p>Price: <span style='font-family:Arial;'>&#8377;</span>"
        . number_format($product_price, 2, '.', ',')."</p>";
        echo "<p>Stock: ".$product_stock."</p>";
        echo "</div>";
    }
}


