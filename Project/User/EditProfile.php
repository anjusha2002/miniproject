<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EditProfile</title>
<style>
.button {
    position: top;
    top:50%;
   
    color: #fff;
    border:none; 
    border-radius:5px; 
    padding:10px;
    min-height:10px; 
    min-width: 100px;
	transition: 0.7s;
  }
  .button:hover{
	color:#09AC32;  
  }
</style>
</head>

<body>

<?php

include("../Assets/Connection/Connection.php");

session_start();
if(isset($_POST["btn_update"]))
{
		
		$update="update tbl_user set user_name='".$_POST["txt_name"]."',user_email='".$_POST["txt_email"]."',user_address='".$_POST["txt_address"]."' where user_id='".$_SESSION["userid"]."'";
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
	
	
	
	
	$sel="select * from tbl_user where user_id='".$_SESSION["userid"]."'";
	$Row=$conn->query($sel);
	$data=$Row->fetch_assoc();
	
	?>


<form id="form1" name="form1" method="post" action="">
  <table width="200" border="0" cellpadding="10" align="center">
  <?php
  ob_start();
include("Head.php");
?>
  <p><a href="HomePage.php"> Home</a></p>
  <tr>
    <td colspan="2"><img src="../Assets/Files/UserPhoto/<?php echo $data["photo"];?>" width="150" height="150"/></td>
  </tr>
  
    <tr>
      <td>*Name</td>
      <td> <label for="text_name"></label>
     <td><input type="text" id="txt_name" name="txt_name" value="<?php echo $data["user_name"]?>"/></td>
    </tr>
    <tr>
      <td>*Email</td>
      <td> <label for="text_email"></label>
      <td><input type="text" id="txt_email" name="txt_email" value="<?php echo $data["user_email"]?>"/></td>
    </tr>
    <tr>
      <td>Address</td>
      <td> <label for="text_address"></label>
      <td><input type="text" id="txt_address" name="txt_address" value="<?php echo $data["user_address"]?>"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_update" style="background-color:#008040" class="button" id="btn_update" value="update" /></td>
      <td><input type="reset" name="btn_cancel" style="background-color:#008040" class="button" id="btn_cancel" value="cancel" /></td>
    </tr>
  </table>
</form>
<?php
include("Foot.php");
ob_flush();
?>
</body>
</html>