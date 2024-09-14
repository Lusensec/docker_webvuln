<?php
include('conn.php');

$sqli = "select * from home where home_id=".$_COOKIE['home_id'];
$result = mysqli_query($conn,$sqli);
$row = mysqli_fetch_array($result);	
	
?>