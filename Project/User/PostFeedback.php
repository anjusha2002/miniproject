<?php
   session_start();
   include("../Assets/Connection/Connection.php");

         if(isset($_POST["btn_submit"]))
          {
	
             $fcontent=$_POST["txt_feedbackdetails"];	
             $insQry="insert into tbl_feedback(feedback_content,user_id,feedback_date)values('".$fcontent."','".$_SESSION["userid"]."',curdate())";
         if($conn->query($insQry))
{
 ?>
           <script>
     				alert("feedback Registered");
     				window.location="PostFeedback.php";
           </script>  
    
    <?php
          }
          else
              {
    ?>
		   <script>
					alert("Failed to register feedback");
				    window.location="PostFeedback.php";
           </script>
<?php	
             }
   }


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Feedback</title>
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
</style>s
</head>

<body>
<p><a href="Homepage.php">Home</a></p>
<?php
ob_start();
include("Head.php");
?>

<form id="form1" name="form1" method="post" action="">
<center>
  <table width="200" border="0">
    <tr>
      <td>Feedback</td>
      <td><textarea name="txt_feedbackdetails" id="txt_feedbackdetails" cols="45" rows="5"></textarea></td>
    </tr><br />
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Send" style="background-color:#008040" class="button" />
        <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" style="background-color:#008040" class="button" /></td>
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