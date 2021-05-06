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
<title>List_User_Registration</title>
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
	height: 499px;
	width: 1304px;
	overflow: scroll;
	visibility: inherit;
	left: 17px;
	top: 126px;
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
.label1 {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 16px;
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
</style>
</head>

<body>

<table width="1333" height="638" border="0">
  <tr>
    <th height="56" colspan="5" class="title" scope="col"><form id="form5" name="form5" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      LMS (List of User Registration )
        <input name="btnrefresh" type="submit" class="btn-enjoy-css111" id="btnrefresh" value="Refresh" />
    </form></th>
    <th colspan="2" align="center" scope="col"><form id="form6" name="form6" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
    <th height="42" class="menubox" scope="col"><a href="admin_book_storage.php" class="menubox">List of Book Storage</a></th>
    <th class="menubox" scope="col"><a href="admin_user_registration.php" class="menubox">List of User Registered</a></th>
    <th class="menubox" scope="col"><a href="admin_barrowed_book.php" class="menubox">List of Barrowed Book</a></th>
    <th class="menubox" scope="col"><a href="admin_book_return_update.php" class="menubox">Book Return Update</a></th>
    <th width="6" scope="col">&nbsp;</th>
    <th width="125" height="42" align="right" scope="col"><form id="form4" name="form4" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input name="btnsearchbookid" type="submit" class="btn-enjoy-css1" id="btnsearchbookid" value="Search" />
    </th>
    <th width="245" align="left" scope="col">
      <input name="txtsearchuserid" type="text" class="enjoy-css1" id="txtsearchuserid" place placeholder="User ID"/>
    </th>
  </tr>
  <tr>
    <th height="525" colspan="7" scope="col">
      <div class="scroolbookstorage" id="txtuserregistre">
      
<table width="100%" align="center" class="blueTable">

<thead>
<tr>
<th width="10%" align="center">delete_user</th>
<th width="10%" align="center">identity_card</th>
<th width="10%" align="center">phone_number</th>
<th width="10%" align="center">email</th>
<th width="10%" align="center">password</th>
</tr>
</thead>


<?php

if(isset($_POST['btnsearchbookid'])){
	
	$m =  $_POST['txtsearchuserid'];
	
	$c = mysqli_connect("localhost","root","","library_management_system");
	$s = "select * from user_detail where identity_card = '$m'";
	$result = mysqli_query($c,$s);
	
	$count= mysqli_num_rows($result);
	if($count !=0){
		
    $c = mysqli_connect("localhost","root","","library_management_system");
    $s = "SELECT identity_card, phone_number, email, password FROM user_detail";
    
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

echo "<tbody>";
echo "<tr>";
echo "<td align=center><a href='delete_user.php?delete=$row[identity_card]'>Delete</td>";
echo "<td align=center>$row[identity_card]</td>";
echo "<td align=center>$row[phone_number]</td>";
echo "<td align=center>$row[email]</td>";
echo "<td align=center>$row[password]</td>";
echo "</tr>";
echo "</tbody>";
  } 
  }
  }
	else 
  {
    echo "0 results";
  
  }
	$c->close();
}
?>





<?php
$c = mysqli_connect("localhost","root","","library_management_system");
$s = "SELECT identity_card, phone_number, email, password FROM user_detail";
$result = mysqli_query($c,$s);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


echo "<tbody>";
echo "<tr>";
echo "<td align=center><a href='delete_user.php?delete=$row[identity_card]'>Delete</td>";
echo "<td align=center>$row[identity_card]</td>";
echo "<td align=center>$row[phone_number]</td>";
echo "<td align=center>$row[email]</td>";
echo "<td align=center>$row[password]</td>";
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



</form>
</table></div>
           
  </th>
  </tr>
</table>
</body>
</html>