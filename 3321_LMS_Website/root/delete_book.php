<?php

include_once('admin_book_storage.php');

if (isset($_GET['delete']))

{
	$row['book_id'] =  $_GET['delete'];
	
	$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "DELETE FROM book_detail WHERE book_id = '$row[book_id]'";
	$result = mysqli_query($c,$s) 
	or die("Connection Failed, Please Try Again".mysql_error());
	
}

?>

<script>
window.location="admin_book_storage.php";
</script>