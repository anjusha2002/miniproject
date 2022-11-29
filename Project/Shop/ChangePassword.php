<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	include("../Assets/Connection/Connection.php");
	if(isset($_POST["btnsave"]))
	{
		
		
		
		
		
		$selq="select * from tbl_shop where shop_password='".$_POST["txt_cur"]."' and shop_id='".$_SESSION["shopid"]."'";
		$row=$conn->query($selq);
		if($data=$row->fetch_assoc())
		{
			if($_POST["txt_new"]==$_POST["txt_con"])
			{
				$update="update tbl_shop set shop_password='".$_POST["txt_new"]."' where shop_id='".$_SESSION["shopid"]."'";
				if($conn->query($update))
		{
			?>
        <script>
			alert("Profile Updated");
			location.href="EditProfile.php";
		</script>
        <?php
		}
			}
			else
			{
				?>
        <script>
			alert("Password Mismatch");
			location.href="ChangePassword.php";
		</script>
        <?php
			}
		}
		else
		{
			?>
        <script>
		alert("Current Password Is Wrong");
		location.href="ChangePassword.php";
		</script>
        <?php
		}
	}
	?>
    <p><a href="HomePage.php"> Home</a></p>
    
    
    <?php
	ob_start();
include("Head.php");
?>



<form id="form1" name="form1" method="post" action="">
  <table  border="1" cellpadding="10" align="center">
    <tr>
      <td>Current Password</td>
      <td><label for="txt_cur"></label>
      <input type="text" name="txt_cur" id="txt_cur" required="required" autocomplete="off" /></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><label for="txt_new"></label>
      <input type="text" name="txt_new" id="txt_new" required="required" autocomplete="off" /></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><label for="txt_con"></label>
      <input type="text" name="txt_con" id="txt_con" required="required" autocomplete="off" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btnsave" id="btnsave" value="Change" />
      <input type="submit" name="btnc" id="btnc" value="Cancel" /></td>
    </tr>
  </table>
</form>

 <?php
include("Foot.php");
ob_flush();
?>
       
</body>
</html>