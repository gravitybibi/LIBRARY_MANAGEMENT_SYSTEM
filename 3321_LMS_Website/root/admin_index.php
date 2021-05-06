<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin_index</title>
<style type="text/css">
.title {
	table-layout : auto;
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 36px;
	color: #00F;
}
.redcolorfont {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 18px;
	color: #F00;
}
.label {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 18px;
	color: #00F;
}
.btn-enjoy-css1 {
	display: inline-block;
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	width: 30px;
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
</style>
</head>

<body>
<table width="1353" height="642" border="0">
  <tr>
    <th height="636" align="center" scope="col"><form id="form1" name="form1" method="post" action="">
      <p class="title">LIBRARIAN LOGIN      </p>
      <table width="464" border="0">
        <tr>
          <th align="right" class="label" scope="col"><label for="txtadminlogin">Admin ID</label> 
            :         </th>
          <th align="left" scope="col"><input name="txtadminlogin" type="text" class="enjoy-css" id="txtadminlogin" required/></th>
        </tr>
        <tr>
          <th align="right" class="label" scope="col">Passkey :</th>
          <th align="left" scope="col"><input name="txtpasskey" type="password" class="enjoy-css" id="txtpasskey"  required/></th>
        </tr>
        <tr>
          <th align="right" class="label" scope="col">&nbsp;</th>
          <th align="left" scope="col"><input name="btnlogin" type="submit" class="btn-enjoy-css1" id="btnlogin" value="Login" />
            <input name="btnreset" type="reset" class="btn-enjoy-css1" id="btnreset" value="Reset" /></th>
        </tr>
        <tr>
          <th align="right" class="label" scope="col">&nbsp;</th>
          <th align="left" class="redcolorfont" scope="col">
		  
		  <?php
			
			if(isset($_POST['btnlogin'])){	
			
			$q =  $_POST['txtadminlogin'];
			$v =  $_POST['txtpasskey'];
			
			$c = mysqli_connect("localhost","root","","library_management_system");
			$s = "select * from admin where librarian_name = '$q' AND admin_password = '$v'";
			$result = mysqli_query($c,$s);
			$count= mysqli_num_rows($result);
			
			if($count !=0){
			$_SESSION['u'] = "$q";
			
			?>
            
            <script>
			window.location="admin_book_storage.php";
			</script>
            
			<?php
			
			}
			else{
				
				echo "Admin and Passkey Do Not Match";
			}
			}
			


		  ?>

</th>
        </tr>
      </table>
      <p>&nbsp; </p>
    </form></th>
  </tr>
</table>
</body>
</html>