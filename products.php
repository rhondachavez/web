<?php
$products = [
  ["id" => 1, "name" => "Classic Hardcover Notebook", "price" => 499, "desc" => "Durable and timeless, ideal for journaling and notes."],
  ["id" => 2, "name" => "Eco-Friendly Spiral Notebook", "price" => 299, "desc" => "100% recycled paper, perfect for everyday use."],
  ["id" => 3, "name" => "Leatherbound Executive Journal", "price" => 999, "desc" => "Premium leather, luxurious writing feel."],
  ["id" => 4, "name" => "Pocket Travel Notebook", "price" => 199, "desc" => "Compact and convenient for travelers."],
  ["id" => 5, "name" => "Student Classic Lined Notebook", "price" => 149, "desc" => "Affordable and sturdy, ideal for students."]
];
?>
<!DOCTYPE html>
<html><head><meta charset="UTF-8"><title>Products - Notebook</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body><?php include('navbar.php'); ?>
<div class="container py-5"><h1>Our Notebooks</h1><div class="row">
<?php foreach ($products as $p): ?>
  <div class="col-md-4 mb-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?= $p['name'] ?></h5>
        <p class="card-text"><?= $p['desc'] ?></p>
        <p class="text-primary"><strong>₹<?= $p['price'] ?></strong></p>
        <a href="product.php?id=<?= $p['id'] ?>" class="btn btn-outline-primary">View Details</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div></div></body></html>
