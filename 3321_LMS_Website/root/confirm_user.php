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
<title>Confirmation_Barrow</title>
<style type="text/css">
.enjoy-css {	display: inline-block;
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
.title1 {
	table-layout : auto;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 24px;
	color: #F00;
}
.label1 {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 24px;
	color: #00F;
}

.title {
	table-layout :auto;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 24px;
	color: #00F;
}
.normal {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 18px;
	color: #000;
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
.label {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 18px;
	color: #00F;
}
.enjoy-css1 {display: inline-block;
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
</style>
</head>

<body>
<table width="1314" height="493" border="0">
  <tr>
    <th width="228" height="34" align="left" valign="middle" class="title" scope="col"><p class="normal"><span class="label">User ID</span><span class="title">:</span>

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
      
    </p></th>
    <th width="293" align="center" valign="middle" class="title" scope="col">&nbsp;</th>
    <th width="631" align="center" valign="middle" class="title" scope="col"><p><a href="user_book_barrowed.php">Return to Book Search</a></p></th>
    <td width="144" align="left" valign="middle" scope="col"><p><a href="logout.php" class="label">LOGOUT</a></p></td>
  </tr>
  <tr>
    <th height="441" colspan="2" align="center" scope="col"><p class="title">Book return date will be given when you go to the library</p>
      <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      
      <?php
	  
	  
	  
	  $msg7= "";
	  $msg8= "";
	  $msg9= "";
	  
	  
	  $c = mysqli_connect("localhost","root","","library_management_system");
	  $s = "SELECT identity_card, phone_number, email FROM user_detail WHERE identity_card = '$_SESSION[u]'";
	  $result = mysqli_query($c,$s);
	  
	  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
		  
      $msg7= "$row[identity_card]";
	  $msg8= "$row[phone_number]";
	  $msg9= "$row[email]";
	  
	  }
      }
	  $c->close();
	  
	  ?>
      
      
      <?php
	  
	  $msg= "";
	  $msg1= "";
	  $msg2= "";
	  $msg3= "";
	  $msg4= "";
	  $msg5= "";
	  $msg6= "";
	  
	  
	  if (isset($_GET['btnbarrow']))
	  
	  {
	  
	  $row['book_id'] =  $_GET['btnbarrow'];
	  
	  $c = mysqli_connect("localhost","root","","library_management_system");
	  $s = "select * from book_detail where book_id  = '$row[book_id]'";
	  $result = mysqli_query($c,$s);
	  
	  $c = mysqli_connect("localhost","root","","library_management_system");
	  $s = "SELECT book_id, title, author, publisher, year_publisher, category, ISBN FROM book_detail";
	  
		  
	  if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		  
	 $msg =  "$row[book_id]";
	 $msg1 = "$row[title]";
	 $msg2 = "$row[author]";
	 $msg3 = "$row[publisher]";
	 $msg4 = "$row[year_publisher]";
	 $msg5 = "$row[category]";
	 $msg6 = "$row[ISBN]";
	 $msgdate= "". date("Y/m/d") ."";
	 
	  }
	  }
	  }
	  ?>
 
 	<?php
	
	  $msg10="";
	  
	  if(isset($_POST['btnconfirmbarrow'])){
		  
      $a =  $_POST['txtidentity'];
	  $q =  $_POST['txtphonenum'];
	  $b =  $_POST['txtemail'];
	  $w =  $_POST['txtbookid'];
	  $m =  $_POST['txttitle'];
	  $l =  $_POST['txtauthor'];
	  $d =  $_POST['txtpublisher'];
	  $v =  $_POST['txtyearofpublisher'];
	  $n =  $_POST['txtcategory'];
	  $y =  $_POST['txtisbn'];
	  $f =  $_POST['txtonlinebarrow'];
		  
		  
	  $c = mysqli_connect("localhost","root","","library_management_system");
	  $s = "INSERT INTO barrowed_book (identity_card, phone_number, email, book_id, title, author, publisher,      year_of_publisher, category, ISBN, online_barrow_date) VALUES ('$a', '$q','$b', '$w', '$m', '$l', '$d', '$v', '$n', '$y',    '$f')";
	  $result = mysqli_query($c,$s);
	
	  }
	?>
    
    
    <?php
	
      if(isset($_POST['btnconfirmbarrow'])){
		  
	  $t =  $_POST['txtbookid'];	  
      
	  $c = mysqli_connect("localhost","root","","library_management_system");
	  $result = mysqli_query($c,$s);
	 
	 // sql to delete a record
	 $s = "DELETE FROM book_detail WHERE book_id = '$t'";
	 $result =  mysqli_query($c,$s);
	 if ($c->query($s) === TRUE) {
		 
	?>
    
	<script>
	window.location="user_book_barrowed.php";
    </script>
    
    <?php

      }
	  }
	  
    ?>
    

      
        <table width="407" height="301" border="0">
          <tr>
            <th width="207" height="28" align="right" class="label" scope="col">Your Identity Card:</th>
            <th width="190" align="right" scope="col"><input name="txtidentity" type="text" class="enjoy-css1" id="txtidentity" value="<?php echo $msg7 ;?>" readonly="readonly"/></th>
          </tr>
          <tr>
            <th height="25" align="right" class="label" scope="row">Your Phone Number:</th>
            <th align="right" scope="row"><input name="txtphonenum" type="text" class="enjoy-css1" id="txtphonenum" 
            value="<?php echo $msg8 ;?>" readonly="readonly"/></th>
          </tr>
          <tr>
            <th height="27" align="right" class="label" scope="row">Your Email:</th>
            <th align="right" scope="row"><input name="txtemail" type="text" class="enjoy-css1" id="txtemail" 
            value="<?php echo $msg9 ;?>" readonly="readonly"/></th>
          </tr>
          <tr>
            <th height="28" align="right" class="label" scope="row">Book ID:</th>
            <th align="right" scope="row"><input name="txtbookid" type="text" class="enjoy-css1" id="txtbookid" 
            value="<?php echo $msg ;?>" readonly="readonly" /></th>
          </tr>
          <tr>
            <th height="23" align="right" class="label" scope="row">Title:</th>
            <th align="right" scope="row"><input name="txttitle" type="text" class="enjoy-css1" id="txttitle7" 
            value="<?php echo $msg1 ;?>" readonly="readonly"/></th>
          </tr>
          <tr>
            <th height="26" align="right" class="label" scope="row">Author:</th>
            <th align="right" scope="row"><input name="txtauthor" type="text" class="enjoy-css1" id="txtauthor2" 
            value="<?php echo $msg2 ;?>" readonly="readonly"/></th>
          </tr>
          <tr>
            <th height="24" align="right" class="label" scope="row">Publisher:</th>
            <th align="right" scope="row"><input name="txtpublisher" type="text" class="enjoy-css1" id="txtpublisher" 
            value="<?php echo $msg3 ;?>" readonly="readonly"/></th>
          </tr>
          <tr>
            <th height="24" align="right" class="label" scope="row">Year of publisher:</th>
            <th align="right" scope="row"><input name="txtyearofpublisher" type="text" class="enjoy-css1" id="txtyearofpublisher" value="<?php echo $msg4 ;?>" readonly="readonly"/></th>
          </tr>
          <tr>
            <th height="24" align="right" class="label" scope="row">Category:</th>
            <th align="right" scope="row"><input name="txtcategory" type="text" class="enjoy-css1" id="txtcategory" 
            value="<?php echo $msg5 ;?>" readonly="readonly"/></th>
          </tr>
          <tr>
            <th height="24" align="right" class="label" scope="row">ISBN:</th>
            <th align="right" scope="row"><input name="txtisbn" type="text" class="enjoy-css1" id="txtisbn" 
            value="<?php echo $msg6 ;?>" readonly="readonly"/></th>
          </tr>
          <tr>
            <th height="24" align="right" class="label" scope="row">Date Online Barrow:</th>
            <th align="right" scope="row"><input name="txtonlinebarrow" type="text" class="enjoy-css1" id="txtonlinebarrow" /value="<?php echo $msgdate ;?>" readonly="readonly"></th>
          </tr>
        </table>
        <table width="410" border="0">
          <tr>
            <th width="303" align="right" scope="col"><?php echo $msg10 ;?></th>
            <th width="97" align="right" scope="col"><input name="btnconfirmbarrow" type="submit" class="btn-enjoy-css" id="btnconfirmbarrow" value="Confirm" /></th>
          </tr>
        </table>
    </form></th>
    <th height="441" align="center" scope="col"><p><img src="picture/onlinebarrow.png" alt="" name="onlinelibrary" width="631" height="331" id="onlinelibrary" /></p>
    <p class="title1">Please take the barrowed book at the Libary not more than 7 days</p></th>
    <th height="441" align="center" scope="col">&nbsp;</th>
  </tr>
</table>

</body>
</html>