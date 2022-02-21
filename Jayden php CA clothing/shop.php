<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
		<title>CA Shop page</title>
        <link rel="stylesheet" href="css/IndexCSS.css">
    </head>

<body background= Images/Grey_Background.jpg>

<center>

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
$sql = "SELECT * FROM tblProducts";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_assoc($query)){
        $imageURL = $row["image"];
        $imageDesc = $row["pname"];
        $sellprice = $row["price"];
?>
    <tr>
    <td>
    <p><?php echo $imageDesc; ?></p>
    </td>
    <td>
    <img src="<?php echo $imageURL; ?>" alt="" />
    </td> 
    <td>
    <p><?php echo "<b>R :</b>".$sellprice; ?></p>
    </td>
	
	<td>
	<center>
    <button type="button" onclick='alert("<?php echo "R :".$sellprice; ?>")' >Add to Cart!!</button>
	<br><br>
	<input type="number" style="width:30px">
	</center>
    </td>
    </tr>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?>
    </table>

    </center>
</div>

</body>
</html>