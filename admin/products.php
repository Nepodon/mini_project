<script>
    function deleteProduct(product_id){
        alert(product_id);  
        
    }
</script>   
<?php
require_once "../includes/db.php";
require_once "../includes/images.php";

setlocale(LC_MONETARY, 'en_IN.UTF-8');

function showProducts(){
    global $conn;
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $product_id = $row['id'];
            $product_name = $row['name'];
            $product_category = $row['category'];
            $product_description = $row['description'];
            $product_price = $row['price'];
            $product_image = $row['image_url'];
            $product_stock = $row['stock'];

            echo "<tr>";
            echo "<td>".$product_id . "</td>";
            echo "<td>".$product_name . "</td>";
            echo "<td>".$product_category . "</td>";
            echo "<td>".$product_description . "</td>";
            echo "<td>".$product_price . "</td>";
            echo "<td>".$product_stock . "</td>";
            echo "<td><button id='delete' onclick='deleteProduct(".$product_id.")'>delete</button></td>";
            echo "</tr>";
        }
    }
}
if(isset($_GET['delete'])){
    $product_id = $_GET['delete'];
    echo "deleted";
} 