<?php
$Servername="localhost";
$Username="root";
$Password="";
$DB="db_miniproject";

$conn=mysqli_connect($Servername,$Username,$Password,$DB);
 
if(!$conn)
{
	 	die("connection failed!!!");
}
?>