<?php

include_once('admin_user_registration.php');

if (isset($_GET['delete']))

{
	$row['identity_card'] =  $_GET['delete'];
	
	$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "DELETE FROM user_detail WHERE identity_card = '$row[identity_card]'";
	$result = mysqli_query($c,$s)  
	or die("Connection Failed, Please Try Again".mysql_error());
}
{
	
	$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "DELETE FROM barrowed_book WHERE identity_card = '$row[identity_card]'";
	$result = mysqli_query($c,$s)  
	or die("Connection Failed, Please Try Again".mysql_error());
}

?>

<script>
window.location="admin_user_registration.php";
</script>