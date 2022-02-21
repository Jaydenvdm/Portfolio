<?php  include('..\dbConn.php');
/*
  if (!isset($_SESSION['username1'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../login.php');
  }
  if (isset($_GET['logout1'])) {
  	session_destroy();
  	unset($_SESSION['username1']);
  	header("location: ../login.php");
  } 
*/

 
	if (isset($_GET['edit'])) {
		$pid = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM products WHERE pid=$pid");

		if (mysqli_num_rows($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$pname = $n['pname'];
			$price = $n['price'];
		}
	}
	
		// initialize variables
	$pname = "";
	$price = "";
	$pid = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$pname = $_POST['name'];
		$price = $_POST['price'];
		$imageURL = "\images/pic2.jpg";
		$qnty = 20;
		
		mysqli_query($conn, "INSERT INTO products (pname, price, image, qnty) VALUES ('$pname','$price', '$imageURL',$qnty)"); 
		$_SESSION['message'] = "Product added!!!"; 
		header('location: productsList.php');	
	}
	
	if (isset($_POST['update'])) {
		$pid = $_POST['pid'];
		$name = $_POST['name'];
		$price = $_POST['price'];

		mysqli_query($connection, "UPDATE products SET name='$name', code='$code', price = '$price' WHERE pid=$pid");
		$_SESSION['message'] = "Product updated!"; 
		header('location: admin/productsList.php');
	}
	
		if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($connection, "DELETE FROM products WHERE pid=$pid");
		$_SESSION['message'] = "Product deleted!"; 
		header('location: productsList.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Dash Board</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
<center>
  <div class="header"   style="
  width: 599px;
  margin: 15px auto 0px;
  color: white;
  background: #6aadf1;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 0px 0px 0px 0px;
  padding: 5px;">
  	<h2>Admin Dash Board</h2>
  </div>
  
  <div class="content" style=" width:598px;
  margin: 0px auto;
  padding: 0px 0px 0px 10px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 0px 0px;">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username1'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username1']; ?></strong></p>
    	<p>  <a href="productsList.php" style="color: red;">Manage Products</a> | <a href="userMan.php" style="color: red;">Manage Users</a> | <a href="contact-us.php" style="color: red;">Contact Us</a> | <a href="productsList.php?logout1='1'" style="color: red;">logout</a> </p>&nbsp;
    <?php endif ?>
</div>

  <div id="main" style="
	  width: 599px;
	  margin: 5px auto 0px;
	  align: center;
	  border: 1px solid #B0C4DE;
	  border-radius: 0px 0px 0px 0px;
	  padding: 5px;">


<?php $results = mysqli_query($conn, "SELECT * FROM products"); ?>


	<h3> Product List </h3>
	
	<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<br>

	<table border="1" cellspacing="1" cellpadding="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		
		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				<td><?php echo $row['pname']; ?></td>
				<td><?php echo "<b>R :</b>".$row['price']; ?></td>
				<td>
					<button type="button"><a href="productsList.php?edit=<?php echo $row['pid']; ?>" >Edit</a></button>
				</td>
				<td>
					<button type="button"><a href="productsList.php?del=<?php echo $row['pid']; ?>">Delete</a></button>
				</td>
			</tr>
		<?php } ?>
	</table>
	<br>


	<hr width = "595">

	<h3> Add Product </h3>
	
<div>
	<form method="post" action="" >
	<input type="hidden" name="id" value="<?php echo $row['pid']; ?>">
		<table>
		<tr>
			<td>Name</td><td><input type="text" name="name" value="<?php echo $row['pname']; ?>"></td>
		</tr>
		<tr>
			<td>Price</td><td><input type="text" name="price" value="<?php echo $row['price']; ?>"></td>
		</tr>
		<tr><td></td>
			<td>
			<?php if ($update == true): ?>
				<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
			<?php else: ?>
				<button class="btn" type="submit" name="save" >Save</button>
			<?php endif ?>
			</td>
		</tr>
		</table>
	</form>
</div>
<div></div>
</div>
  <div class="header"   style="
  width: 608px;
  margin: 5px auto 0px;
  color: white;
  background: #6aadf1;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 0px 0px 0px 0px;
  padding: 1px;">
      <p>&copy;Copyright - Vakorinte Media Associates</p>
  </div>

</center>
</body>
</html>