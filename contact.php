<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Contact - Notebook</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body><?php include('navbar.php'); ?>
<div class="container py-5">
<h1>Contact Us</h1>
<form method="post">
<div class="mb-3"><label>Name</label><input type="text" name="name" class="form-control" required></div>
<div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
<div class="mb-3"><label>Message</label><textarea name="message" class="form-control" required></textarea></div>
<button type="submit" class="btn btn-success">Send</button>
</form>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") echo "<div class='alert alert-success mt-3'>Thank you, we received your message!</div>"; ?>
</div></body></html>
