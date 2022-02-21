<?php
session_start ();
require 'dbConn.php';
require 'item.php';

$cid = $_SESSION['cid'];
$date = date('Y-m-d');

//Save new order
mysqli_query($conn, "insert into orders(cid, datecreation)
values($cid,'$date')");
$ordersid = mysqli_insert_id($conn);

// Save order details for new order
$cart = unserialize ( serialize ( $_SESSION ['cart'] ) );
for($i=0; $i<count($cart); $i++) {
	mysqli_query($con, 'insert into orderproduct(oid, pid, price, qnty)
values('.$ordersid.', '.$cart[$i]->id.','.$cart[$i]->price.', '.$cart[$i]->quantity.')');
}

// Clear all products in cart
unset($_SESSION['cart']);

?>
<html>
<head>
<title>Checkout Page!!!!!</title>
</head>
<body>
<center>
<br>
<br>
<hr>
Thanks for buying products <b><?php echo $_SESSION['email']; ?></b> Click <a href="index.php">here</a> to continue buy product.
</center>
</body>
</html>