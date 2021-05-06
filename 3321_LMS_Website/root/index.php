<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>3321_LMS</title>
<style type="text/css">
.title {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 24px;
	color: #00F;
}
.label {
	font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size: 18px;
	color: #00F;
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

.btn-enjoy-css {
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
</style>
</head>

<body>


<table width="1314" height="634" border="0">
  <tr>
    <th width="1308" height="602" align="center" scope="col"><p class="title">Welcome to LMS</p>
    <p class="title">LIBRARY MANAGEMENT SYSTEM</p>
    <p class="title"><!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/slide1.jpg" alt="slide1" title="slide1" id="wows1_0"/></li>
		<li><img src="data1/images/slide2.jpg" alt="slide2" title="slide2" id="wows1_1"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/slide3.jpg" alt="responsive slider" title="slide3" id="wows1_2"/></a></li>
		<li><img src="data1/images/slide4.jpg" alt="slide4" title="slide4" id="wows1_3"/></li>
	</ul></div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">image slider</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section --></p>

    <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
      <p>
      
	  <?php
			
			$msg1="";
			
			if(isset($_POST['btnsubmit'])){	
			$q =  $_POST['txtidentity'];
			$v =  $_POST['txtpassword'];
			
			$c = mysqli_connect("localhost","root","","library_management_system");
			$s = "select * from user_detail where identity_card = '$q' AND password = '$v'";
			$result = mysqli_query($c,$s);
			$count= mysqli_num_rows($result);
			if($count !=0){
				$_SESSION['u'] = "$q";
			?>
            
            <script>
			window.location="user_book_barrowed.php";
			</script>
            
			<?php
			
			}
			else{
				
				$msg1= "IC Number and Password Not Found";
			}
			}
		
			?>
            
      </p>
      <table width="471" border="0">
        <tr>
        
        
        
        
          <th width="188" align="right" class="label" scope="col"><label for="txtidentity">I.C Number :</label></th>
          <th width="221" align="center" scope="col"><input type="number" name="txtidentity" id="txtidentity" input class="enjoy-css" required/></th>
        </tr>
        <tr>
          <th height="34" align="right" class="label" scope="row"><label for="txtpassword">Password :</label></th>
          <td align="center"><input name="txtpassword" type="password" class="enjoy-css" id="txtpassword" required /></td>
        </tr>
      </table>
      <table width="471" border="0">
        <tr>
          <th width="341" scope="col">&nbsp;</th>
          <th width="120" align="left" valign="top" scope="col"><a href="registerhere.php" class="linkpage">Register Here</a></th>
        </tr>
      </table>
      <table width="470" border="0">
        <tr>
          <th width="356" align="right" scope="col"><input name="btnsubmit" type="submit" class="btn-enjoy-css" id="btnsubmit" value="Login" /></th>
          <th width="82" align="left" scope="col"><input name="btnclear" type="reset" class="btn-enjoy-css" id="btnclear" value="Clear" /></th>
        </tr>
    </table>
      <table width="584" border="0">
        <tr>
          <th width="280" scope="col">&nbsp;</th>
          <th width="294" align="left" class="label" scope="col"><?php echo $msg1; ?></th>
        </tr>
      </table>
    </form></th>
  </tr>
  <tr>
    <th height="23" align="right" valign="bottom" scope="col">Develop by : <a href="http://www.browebsystemdevelopment.com" target="_blank">www.browebsystemdevelopment.com</a></th>
  </tr>
</table>
</body>
</html>