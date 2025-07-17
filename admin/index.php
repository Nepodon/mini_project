<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="products.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav>
            <h2 style="margin-left:60px;">ADMIN DASHBOARD</h2>
            <br>
            <ul class="hovers">
                <li><a href="#products">Products</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Users</a></li>  
            </ul>    
        </nav>
        <main>
            <section class="products">
                <h1 id="products" style="margin-left:60px;margin-top:10px;">Products</h1>
                <br>
                <br>
                <div class="product-card">
                    <ul>
                        <li>ID</li>
                        <li>Name</li>
                        <li>Category</li>
                        <li>Price</li>
                        <li>Stock</li>
                    </ul>
                    <?php
                    require "products.php";
                    ?>
                </div>
            </section>
            
        </main>

    </body>
</html>