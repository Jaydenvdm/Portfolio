<?php
	include "dbConn.php";
	include "createTable.php";	

//Inserting data from text file Orders to table tblOrders in database

$file = fopen("Orders.txt","r");

while (!feof($file)){
    $content = fgets($file);
    $carray = explode(",", $content);
    list($oid,$cid,$qnty) = $carray;
    $sql = "INSERT INTO `tblOrders` (`oid`,`cid`,`qnty`) VALUES ('$oid','$cid','$qnty')";
    $conn->query($sql);
}
fclose($file);

//Inserting data from text file OrderProducts to table tblOrderProducts in database

$file = fopen("OrderProducts.txt","r");

while (!feof($file)){
    $content = fgets($file);
    $carray = explode(",", $content);
    list($oid,$pid) = $carray;
    $sql = "INSERT INTO `tblOrderProduct` (`oid`,`pid`) VALUES ('$oid','$pid')";
    $conn->query($sql);
}
fclose($file);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
		<title>CA Clothing</title>
        <link rel="stylesheet" href="css/IndexCSS.css">
    </head>	
	<body background = Images/CA.jpg>
        <div class="hero">
            <div class="navbar">
                <img src="Images/CA(Logo).png" class="logo">
                <button type="button"><a href="shop.php">Shop NOW</a></button>
                
            </div>
            <div class="content">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br><small>Welcome to our</small>
                <h1>Creative<br> Home Page</h1>
                <br>
                <p>We are a newly established clothing company that supplies South African residents <br>
                with quality and stylish clothing at affordable prices. We aim to protect people (consumers) from <br>
                paying ridiculous amounts of money for clothing that is not of quality. <br>
                All our products at <b>Crazy Arabians</b> are hand made and inspected for quality before we sell it to our customers. <br>
                We specialize in black clothing with a few Arabic style accompanying our brand name.</p>
            </div>
            <div class="side-bar">
                <img src="Images/menu.png" class="menu">
                
                <div class="social-links">
                    <img src="Images/fb.png">
                    <img src="Images/ig.png">
                    <img src="Images/tw.png">
                </div>
                
                <div class="useful-links">
                    <img src="Images/info.png">
                    <img src="Images/share.png">
                </div>
            </div>
            
            <div class="bubbles">
                <img src="Images/bubble.png">
                <img src="Images/bubble.png">
                <img src="Images/bubble.png">
                <img src="Images/bubble.png">
                <img src="Images/bubble.png">
                <img src="Images/bubble.png">
                <img src="Images/bubble.png">
            </div>
        </div>
	
	
    </body>
	
</html>
*/