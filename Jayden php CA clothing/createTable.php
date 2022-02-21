<?php


		$sqla = "CREATE TABLE `tblcustomers` (
		  `cid` int(10) NOT NULL AUTO_INCREMENT,
		  `fname` varchar(50) NOT NULL,
		  `lname` varchar(50) NOT NULL,
		  `email` varchar(50) NOT NULL,
		  `password` varchar(200) NOT NULL,
		  PRIMARY KEY (`cid`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";

		$sqlb = "CREATE TABLE `tblproducts` (
		  `pid` int(10) NOT NULL AUTO_INCREMENT,
		  `pname` varchar(50) NOT NULL,
		  `price` decimal(10,2) NOT NULL,
		  `image` varchar(50) NOT NULL,
		  `qnty` int(10) NOT NULL,
		  PRIMARY KEY (`pid`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";

		$sqlc = "CREATE TABLE `tblorders` (
		  `oid` int(10) NOT NULL AUTO_INCREMENT,
		  `cid` int(10) NOT NULL,
		  `qnty` int(10) NOT NULL,
		  PRIMARY KEY (`oid`),
		  KEY `cid` (`cid`),
		  CONSTRAINT `tblorders_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `tblcustomers` (`cid`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";

		$sqld = "CREATE TABLE `tblorderproduct` (
		  `oid` int(10) NOT NULL,
		  `pid` int(10) NOT NULL,
		  KEY `oid` (`oid`),
		  KEY `pid` (`pid`),
		  CONSTRAINT `tblorderproducts_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `tblproducts` (`pid`),
		  CONSTRAINT `tblorderproducts_ibfk_2` FOREIGN KEY (`oid`) REFERENCES `tblorders` (`oid`)
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";

		$CreateTableA = mysqli_query($conn, $sqla);
		$CreateTableB = mysqli_query($conn, $sqlb);
		$CreateTableC = mysqli_query($conn, $sqlc);
		$CreateTableD = mysqli_query($conn, $sqld);

		if ($CreateTableA && $CreateTableB && $CreateTableC && $CreateTableD == TRUE) {
			
				//echo "<br>Tables created<br>";
				#echo "There was an error :".mysqli_error($conn);
				
		} else {

			//echo "<br>Tables exsist";
			
		}

		$query = "SELECT * FROM tblCustomers";

		$result = mysqli_query($conn,$query);

		if (mysqli_num_rows($result) == 0) {
			
			loadCustomers();
			loadProducts();
		}
		
		function loadProducts(){

		global $conn;

		$open = fopen('Products.txt','r');

		while (!feof($open)) 
			
			{
				$getTextLine = fgets($open);
				$explodeLine = explode(",",$getTextLine);

				list($pname,$price,$image,$qnty) = $explodeLine;

				$qry = "insert into tblProducts 
				(pname, price, image, qnty) values('".$pname."','".$price."','".$image."','".$qnty."')";
				mysqli_query($conn,$qry);
			}

		fclose($open);  
		}
	
	
		function loadCustomers(){

		global $conn;

		$open = fopen('userData.txt','r');

		while (!feof($open)) 
			
			{
				$getTextLine = fgets($open);
				$explodeLine = explode(",",$getTextLine);

				list($fname,$email,$pass,$lname) = $explodeLine;

				$qry = "insert into tblCustomers
				(fname, email, password, lname) values('$fname','$email','$pass','$lname')";
				mysqli_query($conn,$qry);
			}

		fclose($open);
		
		}

?>



