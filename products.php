<?php
include 'config/database.php';
$result = $conn->query("SELECT * FROM products ORDER BY created_at DESC");
?>
<h2>Real-Time Marketplace</h2>
<table border="1">
<tr><th>Product</th><th>Farmer</th><th>Price</th><th>Stock</th><th>Action</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['name'] ?></td>
<td><?= $row['farmer'] ?></td>
<td>₦<?= $row['price'] ?></td>
<td><?= $row['stock'] ?> kg</td>
<td><a href="order.php?id=<?= $row['id'] ?>">Buy with Paystack</a></td>
</tr>
<?php endwhile; ?>
</table>
<p>Real-time update via AJAX every 5 seconds</p>
