<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EditProfileShop</title>
</head>

<body>
<?php

include("../Assets/Connection/Connection.php");

session_start();
if(isset($_POST["btn_update"]))
{
		
		$update="update tbl_shop set shop_name='".$_POST["txt_name"]."',shop_email='".$_POST["txt_email"]."',shop_address='".$_POST["txt_address"]."' where shop_id='".$_SESSION["shopid"]."'";
		echo $update;
		if($conn->query($update))
		{
			?>
            
        <script>
		        alert("Profile Updated");
		        location.href="Editprofile.php";
		</script>
        
        <?php
		}
	}
	
	
	
	
	$sel="select * from tbl_shop where shop_id='".$_SESSION["shopid"]."'";
	$Row=$conn->query($sel);
	$data=$Row->fetch_assoc();
	
	?>

    <?php
	ob_start();
include("Head.php");
?>
<form id="form1" name="form1" method="post" action="">
  <table width="200"  align="center" cellpadding="10">
  <p><a href="HomePage.php"> Home</a></p>
  <tr>
     <td colspan="2"><img src="../Assets/Files/ShopPhoto/<?php echo $data["shop_photo"];?>" width="150" height="150"/></td>
  </tr>
    <tr>
      <td>*Name</td>
      <td> <label for="text_name"></label>
     <td><input type="text" id="txt_name" name="txt_name" value="<?php echo $data["shop_name"]?>"/></td>
    </tr>
    <tr>
      <td>*Email</td>
      <td> <label for="text_email"></label>
      <td><input type="text" id="txt_email" name="txt_email" value="<?php echo $data["shop_email"]?>"/></td>
    </tr>
    <tr>
      <td>Address</td>
      <td> <label for="text_address"></label>
      <td><input type="text" id="txt_address" name="txt_address" value="<?php echo $data["shop_address"]?>"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" style="background-color:#04AA6D" name="btn_update" id="btn_update" value="update" /></td>
      <td><input type="reset" name="btn_cancel" style="background-color:#04AA6D" id="btn_cancel" value="cancel" /></td>
    </tr>
  </table>
</form>

 <?php
include("Foot.php");
ob_flush();
?>
       
</body>
</html>
