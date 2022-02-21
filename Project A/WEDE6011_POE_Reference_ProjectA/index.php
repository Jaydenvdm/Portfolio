<?php

session_start();
if(!isset($_SESSION['email'])){
    header("location:login.php");
}

if(isset($_POST['submit']))
{
    header("location:login.php");
    
    unset($_SESSION['email']);  
    session_destroy(); 
}

if(isset($_POST['shop']))
{
    header("location:loadShop.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Sim Athlectic</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
</head>

<body>

<center>

<p>Yayee ,Welocome <b><?php echo $_SESSION['email']; ?></b> You have successfully logged in!!!</p>

        <form method="post">
            <input type="submit" name="shop" value="Start Shopping" />

            <input type="submit" name="submit" value="Logout" />
        </form>

</center>


</body>
</html>