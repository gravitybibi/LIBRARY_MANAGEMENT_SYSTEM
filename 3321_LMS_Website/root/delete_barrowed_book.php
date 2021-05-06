<?php

include_once('admin_barrowed_book.php');

if (isset($_GET['delete']))

{
	$row['book_id'] =  $_GET['delete'];
	
	$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "DELETE FROM barrowed_book WHERE book_id = '$row[book_id]'";
	$result = mysqli_query($c,$s) 
	or die("Connection Failed, Please Try Again".mysql_error());
	
}

?>

<script>
window.location="admin_barrowed_book.php";
</script>