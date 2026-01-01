<?php
require_once "../config.php";
$result = mysqli_query($conn, "SELECT * FROM applications ORDER BY application_id DESC LIMIT 1");
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<div class="container">
<h2>Passport Status</h2>
<p>Status: <?php echo $data['status'] ?? "No application found"; ?></p>
</div>
</body>
</html>
