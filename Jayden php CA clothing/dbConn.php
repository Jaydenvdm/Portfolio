<?php

#Declare MySQL connection parameters

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "19013566_POE";

#Create connection

$con = mysqli_connect($host, $user, $pass); //calls the connection

#Check connection

if(!$con) //if it is False
{
	echo "Failed to connect";
	die("Connection failed: " . mysqli_connect_error());	
}
else 
{
	
	echo "Connection successfully to MySQL";
}

	#Selects a database
	
	$selectDB = mysqli_select_db($con,$dbname);
	$sql = "CREATE DATABASE ".$dbname."";
	
	if($selectDB){
		
		echo "<br>The database exists";
	}
	
	else{
		
		$CreateDB = mysqli_query($con,$sql);
		echo "<br>Datebase created";
	}
	
	#this connection string includes the database
	
	$conn = mysqli_connect("localhost", "root", "",$dbname);
?>