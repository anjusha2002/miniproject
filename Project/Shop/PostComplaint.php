<?php
include("../Assets/Connection/Connection.php");

session_start();

if(isset($_POST["btn_submit"]))
{
	
$csubject=$_POST["txt_subject"];	
$complaint=$_POST["txt_comp"];

if($_GET["cid"]!=null)
{
$insQry="insert into tbl_complaint(complaint_subject,complaint_details,shop_id,complaint_date,product_id)values('".$csubject."','".$complaint."','".$_SESSION["shopid"]."',curdate(),'".$_GET["cid"]."')";
if($conn->query($insQry))
{
 ?>
    <script>
     alert("Complaint Registered");
     window.location="PostComplaint.php";
    </script>  
    
<?php
}
else
{
?>
<script>
alert("Failed to register complaint");
 window.location="PostComplaint.php";
</script>
<?php	
}
}
else
{
	$insQry="insert into tbl_complaint(complaint_subject,complaint_details,shop_id,complaint_date)values('".$csubject."','".$complaint."','".$_SESSION["shopid"]."',curdate())";
if($conn->query($insQry))
{
 ?>
    <script>
     alert("Complaint Registered");
     window.location="PostComplaint.php";
    </script>  
    
<?php
}
else
{
?>
<script>
alert("Failed to register complaint");
 window.location="PostComplaint.php";
</script>
<?php	
}
}
}


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PostComplaintShop</title>
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
<p><a href="HomePage.php"> Home</a></p>
 <?php
 ob_start();
include("Head.php");
?>
<form id="form1" name="form1" method="post" action="">

 <center>
  <table width="358" height="287">
    
      <td width="121">Subject:</td>
      <td width="221"><input type="text" name="txt_subject" id="txt_subject" /></td>
    </tr>
    <tr>
      <td>Complaint:</td>
      <td><textarea name="txt_comp" id="txt_comp" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn_submit" style="background-color:#008040" class="button" id="btn_submit" value="Submit" />
      <input type="reset" name="btn_cancel" style="background-color:#008040" class="button" id="btn_cancel" value="Cancel" /></td>
    </tr>
  </table>
  </center>
</form>

<?php
include("Foot.php");
ob_flush();
?>
       
</body>
</html>