<?php

	session_start();
	if(!isset($_SESSION['u'])){
			header("location:admin_index.php");
		}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>List_Barrowed_Book</title>
<style type="text/css">

table.blueTable {
	border: 1px solid #1C6EA4;
	background-color: #EEEEEE;
	width: 100%;
	text-align: left;
	border-collapse: collapse;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
table.blueTable td, table.blueTable th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}
table.blueTable thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.blueTable thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.blueTable thead th:first-child {
  border-left: none;
}

table.blueTable tfoot td {
  font-size: 14px;
}
table.blueTable tfoot .links {
  text-align: right;
}
table.blueTable tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}

.scroolbookstorage {
	height: 501px;
	width: 944px;
	overflow: scroll;
	visibility: inherit;
	left: 17px;
	top: 123px;
	position: absolute;
	border: thin inset #00F;
}
.menubox {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 14px;
	color: #FFF;
	background-color: #0000FF;
	text-decoration: none;
}

.title {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 24px;
	color: #00F;
}

.enjoy-css {
	display: inline-block;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	width: 13em;
	height: 5px;
	border: 1px solid rgba(23,7,249,1);
	-webkit-border-radius: 20px;
	border-radius: 20px;
	font: normal 12px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: rgba(7,7,7,1);
	-o-text-overflow: clip;
	text-overflow: clip;
	background: rgba(252,252,252,1);
	-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	padding-top: 10px;
	padding-right: 20px;
	padding-bottom: 10px;
	padding-left: 20px;
}
.label {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 14px;
	color: #00F;
}
.enjoy-css1 {
	display: inline-block;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	width: 13em;
	height: 5px;
	border: 1px solid rgba(23,7,249,1);
	-webkit-border-radius: 20px;
	border-radius: 20px;
	color: rgba(255,255,255,1);
	-o-text-overflow: clip;
	text-overflow: clip;
	-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	padding-top: 10px;
	padding-right: 20px;
	padding-bottom: 10px;
	padding-left: 20px;
	background-color: rgba(0,70,255,1);
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 12px;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	font-variant: normal;
}
.btn-enjoy-css1 {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 37px;
  height: 12px;
  cursor: pointer;
  padding: 10px 20px;
  border: none;
  -webkit-border-radius: 25px;
  border-radius: 25px;
  font: normal 12px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
  color: rgba(255,255,255,0.9);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgba(23,7,249,1);
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}
.cssoption {
	height: 25px;
	width: 2cm;
	border-top-color: #00F;
	border-right-color: #00F;
	border-bottom-color: #00F;
	border-left-color: #00F;
}
.enjoy-css2 {	display: inline-block;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	width: 13em;
	height: 5px;
	border: 1px solid rgba(23,7,249,1);
	-webkit-border-radius: 20px;
	border-radius: 20px;
	font: normal 12px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: rgba(7,7,7,1);
	-o-text-overflow: clip;
	text-overflow: clip;
	background: rgba(252,252,252,1);
	-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	padding-top: 10px;
	padding-right: 20px;
	padding-bottom: 10px;
	padding-left: 20px;
}
.enjoy-css3 {	display: inline-block;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	width: 13em;
	height: 5px;
	border: 1px solid rgba(23,7,249,1);
	-webkit-border-radius: 20px;
	border-radius: 20px;
	font: normal 12px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: rgba(7,7,7,1);
	-o-text-overflow: clip;
	text-overflow: clip;
	background: rgba(252,252,252,1);
	-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	padding-top: 10px;
	padding-right: 20px;
	padding-bottom: 10px;
	padding-left: 20px;
}
.enjoy-css31 {display: inline-block;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	width: 13em;
	height: 5px;
	border: 1px solid rgba(23,7,249,1);
	-webkit-border-radius: 20px;
	border-radius: 20px;
	font: normal 12px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: rgba(7,7,7,1);
	-o-text-overflow: clip;
	text-overflow: clip;
	background: rgba(252,252,252,1);
	-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	padding-top: 10px;
	padding-right: 20px;
	padding-bottom: 10px;
	padding-left: 20px;
}
.label1 {	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 16px;
	color: #00F;
}
.btn-enjoy-css11 {  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 37px;
  height: 12px;
  cursor: pointer;
  padding: 10px 20px;
  border: none;
  -webkit-border-radius: 25px;
  border-radius: 25px;
  font: normal 12px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
  color: rgba(255,255,255,0.9);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgba(23,7,249,1);
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}
.enjoy-css4 {	display: inline-block;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	width: 13em;
	height: 5px;
	border: 1px solid rgba(23,7,249,1);
	-webkit-border-radius: 20px;
	border-radius: 20px;
	font: normal 12px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: rgba(7,7,7,1);
	-o-text-overflow: clip;
	text-overflow: clip;
	background: rgba(252,252,252,1);
	-webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	-o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
	padding-top: 10px;
	padding-right: 20px;
	padding-bottom: 10px;
	padding-left: 20px;
}
.btn-enjoy-css12 {  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 37px;
  height: 12px;
  cursor: pointer;
  padding: 10px 20px;
  border: none;
  -webkit-border-radius: 25px;
  border-radius: 25px;
  font: normal 12px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
  color: rgba(255,255,255,0.9);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgba(23,7,249,1);
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}
.btn-enjoy-css13 {  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 37px;
  height: 12px;
  cursor: pointer;
  padding: 10px 20px;
  border: none;
  -webkit-border-radius: 25px;
  border-radius: 25px;
  font: normal 12px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
  color: rgba(255,255,255,0.9);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgba(23,7,249,1);
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}
</style>
</head>

<body>

<table width="1345" height="640" border="0">
  <tr>
    <th height="56" colspan="5" align="left" class="title" scope="col"><form id="form6" name="form6" method="post" action=""<?php echo $_SERVER['PHP_SELF']; ?>"
">
    <span class="label">Online Barrow Date</span>
<input name="btnsearchdate" type="submit" class="btn-enjoy-css12" id="btnsearchdate" value="Search" />
      <input name="txtdate1" type="text" class="enjoy-css4" id="txtdate1" place="place" placeholder="Y/M/D"/>
LMS (List of Barrowed Book)
<input name="btnrefresh" type="submit" class="btn-enjoy-css11" id="btnrefresh" value="Refresh" />
    </form></th>
    <th colspan="2" align="center" scope="col"><form id="form5" name="form5" method="post" action=""<?php echo $_SERVER['PHP_SELF']; ?>"
">
      <table width="360" height="37" border="0">
        <tr>
          <th width="114" align="left" class="label1" scope="col"><?php
		
	  $c = mysqli_connect("localhost","root","","library_management_system");
	  $s = "SELECT librarian_name FROM admin WHERE librarian_name  = '$_SESSION[u]'";
	  $result = mysqli_query($c,$s);
	  
	  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
		  
      echo "".$row["librarian_name"] ."";
	   }
      } else {
      echo  "Your ID Deleted";
      }
	  $c->close();
	  
		?></th>
          <th width="170" align="right" class="label1" scope="col"><?php echo "Today Date ".date("m/d/Y")."" ?></th>
          <th width="62" align="right" scope="col"><a href="admin_logout.php" class="label1">Logout</a></th>
        </tr>
      </table>
    </form></th>
  </tr>
  <tr>
    <th width="218" height="42" class="menubox" scope="col"><a href="admin_book_storage.php" class="menubox">List of Book Storage</a></th>
    <th width="247" class="menubox" scope="col"><a href="admin_user_registration.php" class="menubox">List of User Registered</a></th>
    <th width="239" class="menubox" scope="col"><a href="admin_barrowed_book.php" class="menubox">List of Barrowed Book</a></th>
    <th width="226" class="menubox" scope="col"><a href="admin_book_return_update.php" class="menubox">Book Return Update</a></th>
    <th width="7" scope="col">&nbsp;</th>
    <th width="60" height="42" align="right" scope="col">&nbsp;</th>
    <th width="318" align="left" scope="col">
<form id="form3" name="form3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input name="btnuserid" type="submit" class="btn-enjoy-css13" id="btnuserid" value="Search" />
      <input name="txtsearchuser1id" type="text" class="enjoy-css" id="txtsearchuser1id" place placeholder="Identity Card" required="required"/>
    </th>
  </tr>
  <tr>
    <th height="531" colspan="5" scope="col">
      <div class="scroolbookstorage" id="txtbookreturn"><table width="100%" align="center" class="blueTable">
<thead>
<tr>
<th width="9%" align="center">delete</th>
<th width="9%" align="center">identity_card</th>
<th width="9%" align="center">phone_number</th>
<th width="9%" align="center">email</th>
<th width="9%" align="center">book_id</th>
<th width="9%" align="center">book_title</th>
<th width="9%" align="center">author</th>
<th width="9%" align="center">publisher</th>
<th width="9%" align="center">year_of_publisher</th>
<th width="9%" align="center">category_types</th>
<th width="9%" align="center">ISBN</th>
<th width="9%" align="center">Online_barrow_date</th>
<th width="9%" align="center">barrowed_date</th>
<th width="9%" align="center">actual_return_date</th>
<th width="9%" align="center">return_date</th>
<th width="9%" align="center">taken</th>
</tr>
</thead>


<?php

if(isset($_POST['btnsearchdate'])){


$z =  $_POST['txtdate1'];

$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "select * from barrowed_book where online_barrow_date = '$z'";
	$result = mysqli_query($c,$s);
	
	$count= mysqli_num_rows($result);
	if($count !=0){

$c = mysqli_connect("localhost","root","","library_management_system");
$s = "SELECT identity_card, phone_number, email, book_id, title, author, publisher, year_of_publisher, category, ISBN, online_barrow_date, barrowed_date, actual_return_date, return_date, taken FROM barrowed_book";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo "<tbody>";
echo "<tr>";
echo "<td align=center><a href='delete_barrowed_book.php?delete=$row[book_id]'>Delete</td>";
echo "<td align=center>$row[identity_card]</td>";
echo "<td align=center>$row[phone_number]</td>";
echo "<td align=center>$row[email]</td>";
echo "<td align=center>$row[book_id]</td>";
echo "<td align=center>$row[title]</td>";
echo "<td align=center>$row[author]</td>";
echo "<td align=center>$row[publisher]</td>";
echo "<td align=center>$row[year_of_publisher]</td>";
echo "<td align=center>$row[category]</td>";
echo "<td align=center>$row[ISBN]</td>";
echo "<td align=center>$row[online_barrow_date]</td>";
echo "<td align=center>$row[barrowed_date]</td>";
echo "<td align=center>$row[actual_return_date]</td>";
echo "<td align=center>$row[return_date]</td>";
echo "<td align=center>$row[taken]</td>";
echo "</tr>";
echo "</tbody>";


	}
	}
	}
	else 
	{
    echo "0 results";
	
	$c->close();
	}
	}


?>



<?php

if(isset($_POST['btnuserid'])){

$msg1= "";
$msg2= "";
$msg3= "";

$k =  $_POST['txtsearchuser1id'];

$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "select * from barrowed_book where identity_card = '$k'";
	$result = mysqli_query($c,$s);
	
	$count= mysqli_num_rows($result);
	if($count !=0){

$c = mysqli_connect("localhost","root","","library_management_system");
$s = "SELECT identity_card, phone_number, email, book_id, title, author, publisher, year_of_publisher, category, ISBN, online_barrow_date, barrowed_date, actual_return_date, return_date, taken FROM barrowed_book";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo "<tbody>";
echo "<tr>";
echo "<td align=center><a href='delete_barrowed_book.php?delete=$row[book_id]'>Delete</td>";
echo "<td align=center>$row[identity_card]</td>";
echo "<td align=center>$row[phone_number]</td>";
echo "<td align=center>$row[email]</td>";
echo "<td align=center>$row[book_id]</td>";
echo "<td align=center>$row[title]</td>";
echo "<td align=center>$row[author]</td>";
echo "<td align=center>$row[publisher]</td>";
echo "<td align=center>$row[year_of_publisher]</td>";
echo "<td align=center>$row[category]</td>";
echo "<td align=center>$row[ISBN]</td>";
echo "<td align=center>$row[online_barrow_date]</td>";
echo "<td align=center>$row[barrowed_date]</td>";
echo "<td align=center>$row[actual_return_date]</td>";
echo "<td align=center>$row[return_date]</td>";
echo "<td align=center>$row[taken]</td>";
echo "</tr>";
echo "</tbody>";

$msg1= "$row[identity_card]";
$msg2= "$row[book_id]";
$msg3= "$row[online_barrow_date]";

	}
	}
	}
	else 
	{
    echo "0 results";
	
	$c->close();
	}
	}
?>


<?php
		  
$c = mysqli_connect("localhost","root","","library_management_system");
$s = "SELECT identity_card, phone_number, email, book_id, title, author, publisher, year_of_publisher, category, ISBN, online_barrow_date, barrowed_date, actual_return_date, return_date, taken FROM barrowed_book";
$result = mysqli_query($c,$s);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo "<tbody>";
echo "<tr>";
echo "<td align=center><a href='delete_barrowed_book.php?delete=$row[book_id]'>Delete</td>";
echo "<td align=center>$row[identity_card]</td>";
echo "<td align=center>$row[phone_number]</td>";
echo "<td align=center>$row[email]</td>";
echo "<td align=center>$row[book_id]</td>";
echo "<td align=center>$row[title]</td>";
echo "<td align=center>$row[author]</td>";
echo "<td align=center>$row[publisher]</td>";
echo "<td align=center>$row[year_of_publisher]</td>";
echo "<td align=center>$row[category]</td>";
echo "<td align=center>$row[ISBN]</td>";
echo "<td align=center>$row[online_barrow_date]</td>";
echo "<td align=center>$row[barrowed_date]</td>";
echo "<td align=center>$row[actual_return_date]</td>";
echo "<td align=center>$row[return_date]</td>";

echo "<td align=center>$row[taken]</td>";
echo "</tr>";
echo "</tbody>";

	}
	}
	else 
	{
    echo "0 results";
	}
	$c->close();
	
?>




</table></form></div>
    </form></th>
    <th height="531" colspan="2" scope="col"><form id="form2" name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
      <table width="377" height="170" border="0">
        <tr>
          <th width="167" height="28" align="right" class="label" scope="col">User IC:</th>
          <th width="158" align="right" scope="col"><input name="txtuserid2" type="text" class="enjoy-css1" id="txtuserid2" readonly="readonly" value="<?php echo $msg1; ?>"/></th>
        </tr>
        <tr>
          <th height="25" align="right" class="label" scope="row">Book ID:</th>
          <th align="right" scope="row"><input name="txtbookid2" type="text" class="enjoy-css1" id="txtbookid2" readonly="readonly" value="<?php echo $msg2; ?>"/></th>
        </tr>
        <tr>
          <th height="27" align="right" class="label" scope="row"><label for="txtauthor">Date Online Barrowed:</label></th>
          <th align="right" scope="row"><input name="txtonlinebarrow" type="text" class="enjoy-css1" id="txtonlinebarrow" readonly="readonly" value="<?php echo $msg3; ?>"/></th>
        </tr>
        <tr>
          <th height="28" align="right" class="label" scope="row">Date Barrowed:</th>
          <th align="right" scope="row"><input name="txtdatebarrowed" type="text" class="enjoy-css1" readonly="readonly" id="txtdatebarrowed" value="<?php echo "".date("Y/m/d")."" ?>" /></th>
        </tr>
        <tr>
          <th height="24" align="right" class="label" scope="row">Actual Date Return:</th>
          <th align="right" scope="row"><label for="txtbooktaken">
            <input name="txtactualreturn" type="date" class="enjoy-css2" id="txtactualreturn" />
          </label></th>
        </tr>
        <tr>
          <th height="24" align="right" class="label" scope="row">Book Taken:</th>
          <th align="left" scope="row"><select name="txtbooktaken" class="cssoption" id="txtbooktaken">
            <option>Yes</option>
            <option>No</option>
          </select></th>
        </tr>
      </table>
      <table width="362" border="0">
        <tr>
          <th width="252" height="46" align="right" scope="col"><input name="btnsubmit1" type="submit" class="btn-enjoy-css1" id="btnsubmit1" value="Barrow" /></th>
          <th width="100" align="left" scope="col"><input name="btnclear" type="submit" class="btn-enjoy-css1" id="btnclear" value="Clear" /></th>
        
        
<?php

$msg23= "";

if($_SERVER['REQUEST_METHOD']=="POST"){
	if(isset($_POST['btnsubmit1'])){	


$v =  $_POST['txtuserid2'];
$n =  $_POST['txtdatebarrowed'];
$q =  $_POST['txtactualreturn'];
$b =  $_POST['txtbooktaken'];

$c = mysqli_connect("localhost","root","","library_management_system");
$s = "UPDATE barrowed_book SET barrowed_date='$n', actual_return_date = '$q', taken='$b' WHERE identity_card= $v";
$result = mysqli_query($c,$s);

$msg23= "Book is Been Taken";

?>

<script>
window.location="admin_barrowed_book.php";
</script> 

<?php
}
}
?>
   
     
        </tr>
      </table>
      <p>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $msg23 ;?>
    </form></th>
  </tr>
</table>
</body>
</html>