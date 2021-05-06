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
<title>List_Book_Storage</title>
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
	left: 21px;
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
.colordatabase {	color: #FFF;
	background-color: #4F4FFF;
}
</style>
</head>

<body>

<table width="1345" height="633" border="0">
  <tr>
  <form id="form8" name="form8" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  
    <th height="56" colspan="5" align="center" class="title" scope="col">(List of Book Storage)
    
    <input name="btnrefresh" type="submit" class="btn-enjoy-css1" id="btnrefresh" value="Refresh" />
   </th>
    <th colspan="2" align="center" scope="col"><table width="285" height="37" border="0">
        <tr>
        
          <th align="right" class="label" scope="col">
	   <?php
		
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
	  
	?>
	
	<br><?php echo "Today Date ".date("m/d/Y")."" ?></th>
          <th align="right" scope="col"><a href="admin_logout.php">Logout</a></th>
        </tr>
    </table></th>
  </tr>
  <tr>
    <th width="205" height="42" class="menubox" scope="col"><a href="admin_book_storage.php" class="menubox">List of Book Storage</a></th>
    <th width="244" class="menubox" scope="col"><a href="admin_user_registration.php" class="menubox">List of User Registered</a></th>
    <th width="233" class="menubox" scope="col"><a href="admin_barrowed_book.php" class="menubox">List of Barrowed Book</a></th>
    <th width="257" class="menubox" scope="col"><a href="admin_book_return_update.php" class="menubox">Book Return Update</a></th>
    <th width="6" scope="col">&nbsp;</th>
    <th width="125" height="42" align="right" scope="col">
      <form id="form4" name="form4" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input name="btnsearchbookid" type="submit" class="btn-enjoy-css1" id="btnsearchbookid" value="Search" />
      </th>
      <th width="245" align="left" scope="col">
      <input name="txtsearchid" type="text" class="enjoy-css" id="txtsearchid" place placeholder="Book ID"/>
      </form></th>
  </tr>
  <tr>
    <th height="525" colspan="5" scope="col"><form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
      <div class="scroolbookstorage" id="txtbookstorage">
        <table width="100%" align="center" class="blueTable">
<thead>
<tr>

<th width="60%" align="center">delete</th>
<th width="60%" align="center">book_id</th>
<th width="100%" align="center" >book_title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
<th width="100%" align="center">author</th>
<th width="60%" align="center">publisher</th>
<th width="60%" align="center">year_publisher</th>
<th width="60%" align="center">category_types</th>
<th width="60%" align="center">ISBN</th>
<th width="60%" align="center">date_of_purchase</th>
<th width="60%" align="center">book_price</th>
<th width="60%" align="center">quantity</th>
</tr>
</thead>


<?php


if(isset($_POST['btnsearchbookid'])){
	
    $g =  $_POST['txtsearchid'];
	
	$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "select * from book_detail where book_id  = '$g'";
	$result = mysqli_query($c,$s);
	
	$count= mysqli_num_rows($result);
	if($count !=0){
		
	$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "SELECT book_id, title, author, publisher, year_publisher, category, ISBN, date_of_purchase, book_price, quantity          FROM book_detail";
	
	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		

echo "<tbody>";
echo "<tr>";
echo "<td align=center><a href='delete_book.php?delete=$row[book_id]'>Delete</td>";
echo "<td align=center>$row[book_id]</td>";
echo "<td align=center>$row[title]</td>";
echo "<td align=center>$row[author]</td>";
echo "<td align=center>$row[publisher]</td>";
echo "<td align=center>$row[year_publisher]</td>";
echo "<td align=center>$row[category]</td>";
echo "<td align=center>$row[ISBN]</td>";
echo "<td align=center>$row[date_of_purchase]</td>";
echo "<td align=center>$row[book_price]</td>";
echo "<td align=center>$row[quantity]</td>";
echo "</tr>";
echo "</tbody>";
}
}	

else {


}
}
}
?>


<?php

$c = mysqli_connect("localhost","root","","library_management_system");
$s = "SELECT book_id, title, author, publisher, year_publisher, category, ISBN, date_of_purchase, book_price, quantity FROM book_detail";
$result = mysqli_query($c,$s);
	
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
echo "<tbody>";
echo "<tr>";
echo "<td align=center><a href='delete_book.php?delete=$row[book_id]'>Delete</td>";
echo "<td align=center>$row[book_id]</td>";
echo "<td align=center>$row[title]</td>";
echo "<td align=center>$row[author]</td>";
echo "<td align=center>$row[publisher]</td>";
echo "<td align=center>$row[year_publisher]</td>";
echo "<td align=center>$row[category]</td>";
echo "<td align=center>$row[ISBN]</td>";
echo "<td align=center>$row[date_of_purchase]</td>";
echo "<td align=center>$row[book_price]</td>";
echo "<td align=center>$row[quantity]</td>";
echo "</tr>";

}
}

echo "</tbody>";

	
	

?>
</table>
</p>
      </div>
    </form></th>
    <th height="525" colspan="2" scope="col"><form id="form2" name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <table width="335" height="272" border="0">
        <tr>
        
          <th width="138" height="28" align="right" class="label" scope="col">Book ID:</th>
          <th width="187" align="right" scope="col"><input name="txtbookid" type="text" class="enjoy-css" id="txtbookid" required="required" maxlength="30"/></th>
        </tr>
        <tr>
          <th height="25" align="right" class="label" scope="row"><label for="txttitle">Title:</label></th>
          <th align="right" scope="row"><input name="txttitle" type="text" class="enjoy-css" id="txttitle" required="required"  maxlength="100"/></th>
        </tr>
        <tr>
          <th height="27" align="right" class="label" scope="row"><label for="txtauthor">Author:</label></th>
          <th align="right" scope="row"><input name="txtauthor" type="text" class="enjoy-css" id="txtauthor" required="required" maxlength="100"/></th>
        </tr>
        <tr>
          <th height="28" align="right" class="label" scope="row"><label for="txtpublisher">Publisher:</label>          </th>
          <th align="right" scope="row"><input name="txtpublisher" type="text" class="enjoy-css" id="txtpublisher" required="required" maxlength="60"/></th>
        </tr>
        <tr>
          <th height="23" align="right" class="label" scope="row"><label for="txtyearofpublisher">Year of publisher:</label></th>
          <th align="right" scope="row"><input name="txtyearofpublisher" type="text" class="enjoy-css" id="txtyearofpublisher" required="required" maxlength="8"/></th>
        </tr>
        <tr>
          <th height="26" align="right" class="label" scope="row"><label for="txtcategory">Category:</label></th>
          <th align="center" scope="row"><select name="txtcategory" class="cssoption" id="txtcategory">
         
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
    </select>
    
    </th>
        </tr>
        <tr>
          <th height="24" align="right" class="label" scope="row"><label for="txtisbn">ISBN:</label></th>
          <th align="right" scope="row"><input name="txtisbn" type="text" class="enjoy-css" id="txtisbn" required="required"/maxlength="30" ></th>
        </tr>
        <tr>
          <th height="24" align="right" scope="row"><label for="txtdateofpurchase" class="label">Date of purchase:</label>          </th>
          <th align="right" scope="row"><input name="txtdateofpurchase" type="date" class="enjoy-css" id="txtdateofpurchase" required="required"/></th>
        </tr>
        <tr>
          <th height="24" align="right" class="label" scope="row"><label for="txtbookprice">Book Price:</label>          </th>
          <th align="right" scope="row"><input name="txtbookprice" type="text" class="enjoy-css" id="txtbookprice" required="required" maxlength="8"/></th>
        </tr>
        <tr>
          <th height="21" align="right" class="label" scope="row"><label for="txtquantity">Quantity:</label>          </th>
          <th align="right" scope="row"><input name="txtquantity" type="number" class="enjoy-css" id="txtquantity" required="required" maxlength="200"/></th>
        </tr>
      </table>
      <table width="322" border="0">
        <tr>
          <th width="217" align="right" scope="col">
          <input name="btninsert" type="submit" class="btn-enjoy-css1" id="btninsert" value="Submit"></th>
          <th width="95" align="left" scope="col">
          <input name="btnclear" type="reset" class="btn-enjoy-css1" id="btnclear" value="Clear" /></th>
          
          
          <?php  
		  
		  $msg = "";
		  
		  if(isset($_POST['btninsert'])){
			   
		  
		  $a =  $_POST['txtbookid'];
		  $q =  $_POST['txttitle'];
		  $b =  $_POST['txtauthor'];
		  $v =  $_POST['txtpublisher'];
		  $n =  $_POST['txtyearofpublisher'];
		  $m =  $_POST['txtcategory'];
		  $z =  $_POST['txtisbn'];
		  $o =  $_POST['txtdateofpurchase'];
		  $x =  $_POST['txtbookprice'];
		  $j =  $_POST['txtquantity'];
		  
		    $c = mysqli_connect("localhost","root","","library_management_system");
			$s = "select * from book_detail where book_id = '$a'";
			$result = mysqli_query($c,$s);
			$count= mysqli_num_rows($result);
			
			if($count !=0){
			
			$msg = "Book ID Already Exist";
			}
			
			else {
		  
		  $c = mysqli_connect("localhost","root","","library_management_system");
		  $s = "INSERT INTO book_detail (book_id, title, author, publisher, year_publisher, category, ISBN, date_of_purchase,   	      book_price, quantity) VALUES ('$a', '$q' ,'$b' ,'$v' ,'$n' ,'$m' ,'$z' ,'$o' ,'$x' ,'$j')";
		  $result = mysqli_query($c,$s);
		  echo '<meta http-equiv="refresh" content="0">';
		  $msg = "Succesfull";
		  }
		  }
		   
		  ?>
            
        </tr>
      </table><br>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $msg; ?>
	 
	 
      </th>
    </form>  
  </tr>  
</table>
</body>
</html>