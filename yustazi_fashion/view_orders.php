<?php

include("connection.php");

$sql = "SELECT * FROM orders ORDER BY id DESC";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Orders</title>
</head>

<body>

<h2>Customer Orders</h2>

<table border="1" cellpadding="10">

<tr>
<th>ID</th>
<th>Full Name</th>
<th>Phone</th>
<th>Address</th>
<th>Clothes</th>
<th>Additional Info</th>
<th>Date</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['full_name']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['address']; ?></td>

<td><?php echo $row['clothes']; ?></td>

<td><?php echo $row['additional_info']; ?></td>

<td><?php echo $row['order_date']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>
