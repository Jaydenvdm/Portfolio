
    <?php


    session_start();
    unset($_SESSION['email']);  

    include_once('dbConn.php');
    include_once('createTable.php');
	
	
    $output = NULL;
    $email = $pass = "";

    if(isset($_POST['submit']))
    {
    
        $_SESSION['email'] = $_POST['email'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $hpass = md5($pass);
      

        $query = "SELECT * FROM customers WHERE email = '$email' AND password = '$hpass'";
        
        $result = mysqli_query($conn,$query);

        $row = mysqli_fetch_array($result);

		$_SESSION['cid'] = $row['cid'];
        
		  
        if(empty($email))
        {
            $output = "Please eneter email";
        }
		
		else if($email == "admin@admin.com" && $pass == "admin") {
	  
			  //$_SESSION['email'] = $email;
			  //$_SESSION['success'] = "You are now logged in";
			  header('location: admin/productsList.php');  
		}

        else 
        { 
             if($row['email'] == $email && $row['password'] == $hpass) 
             {
                 header("location:index.php");
             }
            else 
            {
                $output = "Incorrect Username\Password";
            }
        
        }
        
        
        
        /*
        
        if(empty($email))
        {
            $output = "Please eneter email";
        }
        elseif (mysqli_num_rows($result) != 1)
        {
            $output = "Incorrect Username / Password";
        }
        else 
        {
        header("location:welcome.php");
        }
       */
    
    }
    ?>

	<!DOCTYPE html>
	<htm>
		<head>
			<title></title>
		</head>
		
	<body>
		<center>
			<br>
			<br>
			<br>
		
		<form method="post">
			<table>
				<tr>
					<td>Email :</td>
					<td> <input type="email" name = "email"  value = "<?php echo $email; ?>" ></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td> <input type="password" name = "pass"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Login"></td>
				</tr>
			</table>
		</form>
		<?php
		echo "<br>";
		echo $output;
		
		?>
		<p>No Account? : Click here to <a href="register.php">Register</a></p> 
			</center>
		
	</body>


	</html>