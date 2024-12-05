<?php
//Define a multidimensional array for products
$products = [
    ["id" => 1, "name" => "Laptop", "price" => 800, "category" => "Electronics"],
    ["id" => 2, "name" => "Smartphone", "price" => 600, "category" => "Electronics"],
    ["id" => 3, "name" => "Watch", "price" => 150, "category" => "Accessories"],
    ["id" => 4, "name" => "Headphones", "price" => 100, "category" => "Electronics"],
    ["id" => 5, "name" => "Shoes", "price" => 75, "category" => "Fashion"]
];
//Check if the search form is submitted
$searchResult = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['search'])) {
    $searchTerm = strtolower(trim($_POST['search']));
    foreach ($products as $product) {
        if (strpos(strtolower($product["name"]), $searchTerm) !== false) {
            $searchResult[] = $product;
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerceWebsite</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .product {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .search-bar {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Welcometo Our E-commerce Website</h1>
    <!--Search Form-->
    <form method="POST" class="search-bar">
        <input type="text" name="search" placeholder="Searchproducts..." required>
        <button type="submit">Search</button>
    </form>
    <!--Display Products-->
    <h2>All Products:</h2>
    <?php foreach ($products as $product): ?>
        <div class="product">
            <h3><?php echo $product["name"]; ?></h3>
            <p>Price:$<?php echo $product["price"]; ?></p>
            <p>Category:<?php echo $product["category"]; ?></p>
        </div>
    <?php endforeach; ?>
    <!--Display Search Results-->
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <h2>Search Results:</h2>
        <?php if (!empty($searchResult)): ?>
            <?php foreach ($searchResult as $result): ?>
                <div class="product">
                    <h3><?php echo $result["name"]; ?></h3>
                    <p>Price: $<?php echo $result["price"]; ?></p>
                    <p>Category:<?php echo $result["category"]; ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No products found for your search.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>