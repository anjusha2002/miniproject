 
<?php
include("Head.php");
include("../Assets/Connection/Connection.php");

session_start();

 if(isset($_POST["btnLogin"]))
 {
	 	 $email=$_POST["txtemail"];
		  $password=$_POST["txtpassword"];
		  
	 	$selQry="select * from tbl_admin where admin_email='".$email."' and admin_password='".$password."'";
		$row=$conn->query($selQry);
		
		
		
		
		$selQry1="select * from tbl_user where user_email='".$email."'  and user_password='".$password."' and user_status='1'";
		$row1=$conn->query($selQry1);
		
		$selQry2="select * from tbl_shop where shop_email='".$email."' and shop_password='".$password."' and shop_status='1'";
		$row2=$conn->query($selQry2);
		
		if($data=$row->fetch_assoc())
		{
			$_SESSION["adminname"]=$data["admin_name"];
			$_SESSION["adminid"]=$data["admin_id"];
			header("location:../Admin/HomePage.php");
		}
		else if($data1=$row1->fetch_assoc())
		{
			$_SESSION["username"]=$data1["user_name"];
			$_SESSION["userid"]=$data1["user_id"];
			$_SESSION["email"]=$data1["user_email"];
			
			header("location:../User/HomePage.php");
		}
		else if($data2=$row2->fetch_assoc())
		{
			$_SESSION["shopname"]=$data2["shop_name"];
			$_SESSION["shopid"]=$data2["shop_id"];
			$_SESSION["email"]=$data2["shop_email"];
			header("location:../Shop/HomePage.php");
		}
		else 
		{
?>
		 <script>
		 		alert("Inavlid Email or Password");
		</script>
        <?php
		}
 }
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
</head>

<body>
<br /><br /><br /><br /><br /><br /><br /><br />
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="0" align="center">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td></td>
      <td><input type="email" name="txtemail" id="txtemail" placeholder="Enter Email" required /><br/><br/></td>
    </tr>
   <tr>
      <td></td>
      <td><input type="password" name="txtpassword" id="txtpassword"required  margin-left:-30px;cursor:pointer; pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password"/><br/><br/></td>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnLogin" id="btnLogin" value="Login" style="background-color:#04AA6D"/></td>
    </tr>
    <tr>
     <td>&nbsp;</td>
    <td>
    
    <a href ="RecoveryPassword.php" align="right">Forgot Password?</a><br /></td>
   
   
        </td>
    </tr>
   
                              
    
  </table>
</form>
</body>
</html>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


<?php 
include("Foot.php");
ob_flush();
?>