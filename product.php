<?php
$products = [
  1 => ["name" => "Classic Hardcover Notebook", "price" => 499, "desc" => "Durable and timeless, ideal for journaling and notes."],
  2 => ["name" => "Eco-Friendly Spiral Notebook", "price" => 299, "desc" => "100% recycled paper, perfect for everyday use."],
  3 => ["name" => "Leatherbound Executive Journal", "price" => 999, "desc" => "Premium leather, luxurious writing feel."],
  4 => ["name" => "Pocket Travel Notebook", "price" => 199, "desc" => "Compact and convenient for travelers."],
  5 => ["name" => "Student Classic Lined Notebook", "price" => 149, "desc" => "Affordable and sturdy, ideal for students."]
];
$id = $_GET['id'] ?? 1;
$product = $products[$id];
?>
<!DOCTYPE html>
<html><head><meta charset="UTF-8"><title><?= $product['name'] ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body><?php include('navbar.php'); ?>
<div class="container py-5">
  <h1><?= $product['name'] ?></h1>
  <p><?= $product['desc'] ?></p>
  <p><strong>Price: ₹<?= $product['price'] ?></strong></p>
  <button class="btn btn-success">Add to Cart</button>
  <a href="products.php" class="btn btn-secondary">Back to Products</a>
</div></body></html>
