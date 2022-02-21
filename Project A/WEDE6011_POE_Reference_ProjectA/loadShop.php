<?php

session_start();
if(!isset($_SESSION['email'])){
    header("location:index.php");
}

if(isset($_POST['submit']))
{
    header("location:login.php");
    
    unset($_SESSION['email']);  
    session_destroy(); 
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>A Nice &amp; Simple Contact Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
</head>

<body>

<center>
    <p>Enjoy your shopping  <b><?php echo $_SESSION['email']; ?></b> </p>

        <form method="post">
            <input type="submit" name="submit" value="Logout" />
        </form>
    <br>
    <hr>
    <br>
<table border="1" cellspacing="1" cellpadding="5">
            <tr>
            <td><b>Item Name:</b></td>
            <td><b>Item Image:</b></td>
            <td><b>Item Price:</b></td>
			<td><b>Shop Item :</b></td>
        </tr>
<?php
// Include the database configuration file
include('dbConn.php');

// Get images from the database
$sql = "SELECT * FROM products";
$query = mysqli_query($conn,$sql);
/*
if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
		$pid = $row["pid"];
        $imageURL = $row["image"];
        $imageDesc = $row["pname"];
        $sellprice = $row["price"];
*/

?>
    <tr>
		<?php while($product = mysqli_fetch_object($query)) { ?>
		<tr>
			<td><?php echo $product->pname; ?></td>
			<td><img src="<?php echo $product->image; ?>" alt="" /></td>
			<td><?php echo "R :".$product->price; ?></td>
			<td><a href="cart.php?id=<?php echo $product->pid; ?>"><button type="button">Add to Cart</button></a></td>
		</tr>
	<?php } ?>

</table>

</center>


</body>
</html>