<?php

	session_start();
	if(!isset($_SESSION['u'])){
			header("location:index.php");
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book_Barrowed</title>
<style type="text/css">

table.blueTable {
	table-layout : fixed;
	border: 1px solid #1C6EA4;
	background-color: #D0E4F5;
	width: 100%;
	text-align: left;
	border-collapse: collapse;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
}
table.blueTable td, table.blueTable th {
	border: 1px solid #999999;
	padding: 3px 2px;
}
table.blueTable tbody td {
  font-size: 13px;
}
table.blueTable tr:nth-child(even) {
  background: #D0E4F5;
}

.title {
	table-layout :auto;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 24px;
	color: #00F;
}
table.blueTable thead {
	background: #1C6EA4;
	background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
	background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-top-color: #999999;
	border-bottom-color: #999999;
	border-right-color: #999999;
	border-left-color: #999999;
	background-color: #999;
	background-position: bottom;
}
table.blueTable thead th {
	font-size: 15px;
	font-weight: bold;
	color: #FFFFFF;
	border-left-width: 2px;
	border-left-style: solid;
	border-top-color: #999999;
	border-right-color: #999999;
	border-bottom-color: #999999;
	border-left-color: #999999;
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
.scroolbook {
	height: 521px;
	width: 1300px;
	overflow: scroll;
	visibility: inherit;
	left: 29px;
	top: 103px;
	border: thin inset #00F;
	position: absolute;
}

.btn-enjoy-css {
	display: inline-block;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	width: 55px;
	height: 12px;
	cursor: pointer;
	border: none;
	-webkit-border-radius: 25px;
	border-radius: 25px;
	font: normal 12px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: rgba(255,255,255,0.9);
	text-align: center;
	-o-text-overflow: clip;
	text-overflow: clip;
	background: rgba(23,7,249,1);
	-webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2);
	box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2);
	text-shadow: -1px -1px 0 rgba(15,73,168,0.66);
	-webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
	-moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
	-o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
	transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
	padding-top: 10px;
	padding-right: 20px;
	padding-bottom: 10px;
	padding-left: 20px;
}

.enjoy-css {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 15em;
  height: 5px;
  padding: 10px 20px;
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
}
.label {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 18px;
	color: #00F;
}
.btn-enjoy-css1 {	display: inline-block;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	width: 55px;
	height: 12px;
	cursor: pointer;
	border: none;
	-webkit-border-radius: 25px;
	border-radius: 25px;
	font: normal 12px/normal "Palatino Linotype", "Book Antiqua", Palatino, serif;
	color: rgba(255,255,255,0.9);
	text-align: center;
	-o-text-overflow: clip;
	text-overflow: clip;
	background: rgba(23,7,249,1);
	-webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2);
	box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2);
	text-shadow: -1px -1px 0 rgba(15,73,168,0.66);
	-webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
	-moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
	-o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
	transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
	padding-top: 10px;
	padding-right: 20px;
	padding-bottom: 10px;
	padding-left: 20px;
}
.cssoption {
	height: 25px;
	width: 5cm;
	border-top-color: #00F;
	border-right-color: #00F;
	border-bottom-color: #00F;
	border-left-color: #00F;
}
.fontblack {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 18px;
	color: #333;
}
</style>
</head>
<body>
<table width="1350" height="641" border="0">
  <tr>
    <th height="36" colspan="2" align="left" class="fontblack" scope="col"><span class="label">&nbsp;&nbsp;&nbsp;&nbsp;User ID:
    
     </span>
      <?php
		
	  $c = mysqli_connect("localhost","root","","library_management_system");
	  $s = "SELECT identity_card FROM user_detail WHERE identity_card = '$_SESSION[u]'";
	  $result = mysqli_query($c,$s);
	  
	  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
		  
      echo "".$row["identity_card"] ."";
	   }
      } else {
      echo  "Your ID Deleted";
      }
	  $c->close();
	  
	    ?>
    
    </th>
    
    <th width="800" class="title" scope="col">Search For Book</th>
    <th width="240" class="label" scope="col"><a href="logout.php">Logout</a></th>
</tr>
  <form id="form3" name="form3" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <tr>
    <th width="330" height="36" align="right" class="label" scope="col">
    Category:&nbsp;
    <select name="txtcategory" class="cssoption" id="txtcategory">
    <option value=""></option>
    <option value="Other">Other</option>
    <option value="Cooking">Cooking</option>
    <option value="Education">Education</option>
    <option value="Magazine">Magazine</option>
    <option value="Sport">Sport</option>
    <option value="Technology">Technology</option>
    <option value="Medical">Medical</option>
    <option value="Martial Art">Martial Art</option>
    <option value="Fiction">Fiction</option>
    <option value="Non-Fiction">Non-Fiction</option></th>
    <th width="250" align="left" scope="col"> 
    <input name="btntypes" type="submit" class="btn-enjoy-css1" id="btntypes" value="Display" />
    <input name="btnviewall" type="submit" class="btn-enjoy-css1" id="btnviewall" value="Refresh" />

</th>
</form>
    <form id="form2" name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <th height="36" align="right" scope="col">
    
    <input name="btnsearch" type="submit" class="btn-enjoy-css1" id="btnsearch" value="Search" />
    
    </th>
    <th height="36" align="left" scope="col">
    <input name="txtsearchbook" type="text" class="enjoy-css" id="txtsearchbook" placeholder="Book Title" required/></th>
    
  	</tr>
  	</form>
  
  <tr>
    <th height="551" colspan="4" scope="col">
    
    <div class="scroolbook" id="txtscroolbook">
    <table width="100%" align="center" class="blueTable">
    <thead>
<tr>
<th width="60%" align="center">Barrow</th>
<th width="60%" align="center">book_id</th>
<th width="100%" align="center" >title</th>
<th width="100%" align="center">author</th>
<th width="60%" align="center">publisher</th>
<th width="60%" align="center">year_publisher</th>
<th width="60%" align="center">category</th>
<th width="60%" align="center">ISBN</th>
</tr>
</thead>
<tbody>
<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<?php

if(isset($_POST['btntypes'])){
	
    $k =  $_POST['txtcategory'];
	
	$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "select * from book_detail where category  = '$k'";
	$result = mysqli_query($c,$s);
	
	$count= mysqli_num_rows($result);
	if($count !=0){
		
	$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "SELECT book_id, title, author, publisher, year_publisher, category, ISBN FROM book_detail";
	
	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		
echo "<table width=100% align=center class=blueTable>";
echo "<tr>";
echo "<td width=60% align=center><a href='confirm_user.php?btnbarrow=$row[book_id]'><input name=btnbarrow class=btn-enjoy-css1 value=Barrow></td>";
echo "<td width=60% align=center>$row[book_id]</td>";
echo "<td width=100% align=center>$row[title]</td>";
echo "<td width=100% align=center>$row[author]</td>";
echo "<td width=60% align=center>$row[publisher]</td>";
echo "<td width=60% align=center>$row[year_publisher]</td>";
echo "<td width=60% align=center>$row[category]</td>";
echo "<td width=60% align=center>$row[ISBN]</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";
	}
	}
	}
	else
	{
	echo "Please Choose Category At The Left Text Box & Click Display";
	}
	}
?>


<?php
 

	if(isset($_POST['btnsearch'])){
	$m =  $_POST['txtsearchbook'];
	
	$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "select * from book_detail where title  = '$m'";
	$result = mysqli_query($c,$s);
	
	$count= mysqli_num_rows($result);
	if($count !=0){
		
	$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "SELECT book_id, title, author, publisher, year_publisher, category, ISBN FROM book_detail";
	
	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		
echo "<table width=100% align=center class=blueTable>";
echo "<tr>";
echo "<td width=60% align=center><a href='confirm_user.php?btnbarrow=$row[book_id]'><input name=btnbarrow class=btn-enjoy-css1 value=Barrow></td>";
echo "<td width=60% align=center>$row[book_id]</td>";
echo "<td width=100% align=center>$row[title]</td>";
echo "<td width=100% align=center>$row[author]</td>";
echo "<td width=60% align=center>$row[publisher]</td>";
echo "<td width=60% align=center>$row[year_publisher]</td>";
echo "<td width=60% align=center>$row[category]</td>";
echo "<td width=60% align=center>$row[ISBN]</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";
	}
	}
	}
	else
	{
	echo "0 Results";
	}
	}
?>
    
    
<?php
	
	if(isset($_POST['btnviewall'])){
		
$c = mysqli_connect("localhost","root","","library_management_system");
$s = "SELECT book_id, title, author, publisher, year_publisher, category, ISBN FROM book_detail";
$result = mysqli_query($c,$s);
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
echo "<table width=100% align=center class=blueTable>";
echo "<tr>";
echo "<td width=60% align=center><a href='confirm_user.php?btnbarrow=$row[book_id]'><input name=btnbarrow class=btn-enjoy-css1 value=Barrow></td>";
echo "<td width=60% align=center>$row[book_id]</td>";
echo "<td width=100% align=center>$row[title]</td>";
echo "<td width=100% align=center>$row[author]</td>";
echo "<td width=60% align=center>$row[publisher]</td>";
echo "<td width=60% align=center>$row[year_publisher]</td>";
echo "<td width=60% align=center>$row[category]</td>";
echo "<td width=60% align=center>$row[ISBN]</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";
	}
	}
	}
	else
	{	
	
$c = mysqli_connect("localhost","root","","library_management_system");
$s = "SELECT book_id, title, author, publisher, year_publisher, category, ISBN FROM book_detail";
$result = mysqli_query($c,$s);
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
echo "<table width=100% align=center class=blueTable>";
echo "<tr>";
echo "<td width=60% align=center><a href='confirm_user.php?btnbarrow=$row[book_id]'><input name=btnbarrow class=btn-enjoy-css1 value=Barrow></td>";
echo "<td width=60% align=center>$row[book_id]</td>";
echo "<td width=100% align=center>$row[title]</td>";
echo "<td width=100% align=center>$row[author]</td>";
echo "<td width=60% align=center>$row[publisher]</td>";
echo "<td width=60% align=center>$row[year_publisher]</td>";
echo "<td width=60% align=center>$row[category]</td>";
echo "<td width=60% align=center>$row[ISBN]</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";
	
	}
	}
	}
	
?>

</form>
</div>
  </th>
  </tr>
</body>
</html>