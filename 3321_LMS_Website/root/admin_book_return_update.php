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
<title>Book_Return_Update</title>
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
	width: 936px;
	overflow: scroll;
	visibility: inherit;
	left: 19px;
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
	width: 5cm;
	border-top-color: #00F;
	border-right-color: #00F;
	border-bottom-color: #00F;
	border-left-color: #00F;
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
.btn-enjoy-css111 {display: inline-block;
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
.btn-enjoy-css1111 {display: inline-block;
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
.btn-enjoy-css11111 {display: inline-block;
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
.enjoy-css11 {	display: inline-block;
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
.enjoy-css12 {	display: inline-block;
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
.enjoy-css21 {display: inline-block;
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
.btn-enjoy-css14 {  display: inline-block;
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

<table width="1345" height="629" border="0">
  <tr>
    <th height="56" colspan="5" class="title" scope="col"><form id="form4" name="form4" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <span class="label">Calculate Late Return
      Days
      <input name="btncalc" type="submit" class="btn-enjoy-css14" id="btncalc" value="Calc" />
      </span>
      <input name="txtcalculate" type="text" class="enjoy-css21" id="txtcalculate" placeholder="(Number of Days) X $0.50" />
      LMS (Book Return Update)
<input name="btnrefresh" type="submit" class="btn-enjoy-css11111" id="btnrefresh" value="Refresh" />
    </form></th>
    <th colspan="2" align="center" scope="col">
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
    </th>
  </tr>
  <tr>
    <th width="218" height="42" class="menubox" scope="col"><a href="admin_book_storage.php" class="menubox">List of Book Storage</a></th>
    <th width="249" class="menubox" scope="col"><a href="admin_user_registration.php" class="menubox">List of User Registered</a></th>
    <th width="240" class="menubox" scope="col"><a href="admin_barrowed_book.php" class="menubox">List of Barrowed Book</a></th>
    <th width="226" class="menubox" scope="col"><a href="admin_book_return_update.php" class="menubox">Book Return Update</a></th>
    <th width="6" scope="col">&nbsp;</th>
    <th width="84" height="42" align="right" scope="col">&nbsp;</th>
    <th width="292" align="left" scope="col">
    <form id="form3" name="form3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input name="btnsearchbookid" type="submit" class="btn-enjoy-css111" id="btnsearchbookid" value="Search" />
      <input name="txtbookid4" type="text" class="enjoy-css2" id="txtbookid4" place placeholder="Book ID"/>
    </th>
  </tr>
  <tr>
    <th height="523" colspan="5" scope="col">
      <div class="scroolbookstorage" id="txtlistofbarrowed"><table width="100%" align="center" class="blueTable">
<thead>
<tr>
<th width="9%" align="center">identity_card</th>
<th width="9%" align="center">phone_number</th>
<th width="9%" align="center">email</th>
<th width="9%" align="center">book_id</th>
<th width="9%" align="center">book_title</th>
<th width="9%" align="center">date_barrowed</th>
<th width="9%" align="center">actual_date_return</th>
<th width="9%" align="center">date_return</th>
<th width="9%" align="center">late_return_punishment</th>
</tr>
</thead>


<?php

if(isset($_POST['btnsearchbookid'])){
	
$msg1= "";
$msg2= "";
$msg3= "";
$msg4= "";
$msg5= "";
$msg6= "";		
$msg7= "";	 

$z =  $_POST['txtbookid4'];

$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "select * from barrowed_book where book_id = '$z'";
	$result = mysqli_query($c,$s);
	
	$count= mysqli_num_rows($result);
	if($count !=0){
		
$c = mysqli_connect("localhost","root","","library_management_system");
$s = "SELECT identity_card, phone_number, email, book_id, title, barrowed_date, actual_return_date, return_date, late_return_punishment FROM barrowed_book";
	  
	  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
		  
echo "<tbody>";
echo "<tr>";
echo "<td align=center>$row[identity_card]</td>";
echo "<td align=center>$row[phone_number]</td>";
echo "<td align=center>$row[email]</td>";
echo "<td align=center>$row[book_id]</td>";
echo "<td align=center>$row[title]</td>";
echo "<td align=center>$row[barrowed_date]</td>";
echo "<td align=center>$row[actual_return_date]</td>";
echo "<td align=center>$row[return_date]</td>";
echo "<td align=center>$row[late_return_punishment]</td>";
echo "</tr>";
echo "</tbody>";

$msg1= "$row[identity_card]";
$msg2= "$row[phone_number]";
$msg3= "$row[email]";
$msg4= "$row[book_id]";
$msg5= "$row[title]";
$msg6= "$row[barrowed_date]";		
$msg7= "$row[actual_return_date]";	  

	  }
	  }
	  }

	  else{
		 
		 echo "0 Results";  
	}
	}

?>



<?php

$c = mysqli_connect("localhost","root","","library_management_system");
$s = "SELECT identity_card, phone_number, email, book_id, title, barrowed_date, actual_return_date, return_date, late_return_punishment FROM barrowed_book";
$result = mysqli_query($c,$s);
	  
	  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
		  
echo "<tbody>";
echo "<tr>";
echo "<td align=center>$row[identity_card]</td>";
echo "<td align=center>$row[phone_number]</td>";
echo "<td align=center>$row[email]</td>";
echo "<td align=center>$row[book_id]</td>";
echo "<td align=center>$row[title]</td>";
echo "<td align=center>$row[barrowed_date]</td>";
echo "<td align=center>$row[actual_return_date]</td>";
echo "<td align=center>$row[return_date]</td>";
echo "<td align=center>$row[late_return_punishment]</td>";
echo "</tr>";
echo "</tbody>";

	  }
	  }
	  
	  else{
		 
		 echo "0 Results";  
	  }
?>


</table></div>
</form>
    </form></th>
    <th height="523" colspan="2" scope="col"><form id="form2" name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <table width="377" height="286" border="0">
        <tr>
          <th width="212" height="28" align="right" class="label" scope="col">User IC:</th>
          <th width="155" align="right" scope="col"><input name="txtuseric3" type="text" class="enjoy-css1" id="txtuseric3" readonly="readonly" value="<?php echo $msg1; ?>"/></th>
        </tr>
        <tr>
          <th height="25" align="right" class="label" scope="row"><label for="txttitle">Phone Number:</label></th>
          <th align="right" scope="row"><input name="txtph1" type="text" class="enjoy-css1" id="txtph1" readonly="readonly" value="<?php echo $msg2; ?>"/></th>
        </tr>
        <tr>
          <th height="27" align="right" class="label" scope="row"><label for="txtauthor">Email:</label></th>
          <th align="right" scope="row"><input name="txtemail3" type="text" class="enjoy-css1" id="txtemail3" readonly="readonly" value="<?php echo $msg3; ?>" /></th>
        </tr>
        <tr>
          <th height="28" align="right" class="label" scope="row">Book ID:</th>
          <th align="right" scope="row"><input name="txtbookid3" type="text" class="enjoy-css1" id="txtbookid3" readonly="readonly" value="<?php echo $msg4; ?>"/></th>
        </tr>
        <tr>
          <th height="23" align="right" class="label" scope="row">Book Title:</th>
          <th align="right" scope="row"><input name="txtbooktitle3" type="text" class="enjoy-css1" id="txtbooktitle3" readonly="readonly" value="<?php echo $msg5; ?>"/></th>
        </tr>
        <tr>
          <th height="24" align="right" class="label" scope="row">Date Barrowed:</th>
          <th align="right" scope="row"><input name="txtdatebarrowed3" type="text" class="enjoy-css1" id="txtdatebarrowed3" readonly="readonly" value="<?php echo $msg6; ?>" /></th>
        </tr>
        <tr>
          <th height="24" align="right" scope="row"><label for="txtdateofpurchase" class="label">Actual Date Return:</label></th>
          <th align="right" scope="row"><input name="txtactualreturn3" type="text" class="enjoy-css1" id="txtactualreturn3" readonly="readonly" value="<?php echo $msg7; ?>"/></th>
        </tr>
        <tr>
          <th height="24" align="right" scope="row"><label for="txtdateofpurchase" class="label"> Date Return:</label></th>
          <th align="right" scope="row"><input name="txtdatereturn" type="text" class="enjoy-css1" id="txtdatereturn" readonly="readonly" value="<?php echo "".date("Y/m/d")."" ?>"/></th>
        </tr>
        <tr>
          <th height="23" align="right" class="label" scope="row">Payment Late Return:</th>
          <th align="right" scope="row">
            
            
            
            <?php
		  
		  if(isset($_POST['btncalc'])){
		  $answer = '';
		  
          $answer = $_POST['txtcalculate'] * 0.50;
		  }
	      ?>
            
  <input name="txtlatereturn3" type="text" class="enjoy-css11" id="txtlatereturn3" readonly="readonly" 
value=" <?php echo $answer ;?>"/>
            
            
            </th>
        </tr>
        <tr>
          <th height="38" align="right" class="label" scope="row">Late Book Return:</th>
          <th align="right" scope="row"></label><select name="txtlate" class="cssoption" id="txtlate">
            <option>Yes</option>
            <option>No</option>
          </select></th>
        </tr>
      </table>
      <table width="352" border="0">
        <tr>
          <th width="266" align="right" scope="col"><input name="btnsubmit1" type="submit" class="btn-enjoy-css1" id="btnsubmit1" value="Return" /></th>
          <th width="46" align="left" scope="col"><input name="btnclear" type="submit" class="btn-enjoy-css1" id="btnclear" value="Clear" /></th>
         
         <?php
		 
		 if(isset($_POST['btnsubmit1'])){
			 
		 $k =  $_POST['txtdatereturn'];
	     $v =  $_POST['txtlate'];
		 $m =  $_POST['txtuseric3'];
		 
		 $c = mysqli_connect("localhost","root","","library_management_system");
	     $s = "UPDATE barrowed_book SET return_date= '$k', late_return_punishment = '$v' where identity_card = $m";
		 $result = mysqli_query($c,$s); 
		 
		 ?>
			
         <script>
		 window.location="admin_book_return_update.php";
		 </script> 




		<?php
		
	     }
		
		 ?>
        

        </tr>
      </table>
      <p>&nbsp;</p>
    </form></th>
  </tr>
</table>
</body>
</html>