<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	
require'../Assets/phpMail/src/Exception.php';
require '../Assets/phpMail/src/PHPMailer.php';
require '../Assets/phpMail/src/SMTP.php';

ob_start();
include("Head.php");
include("../Assets/Connection/Connection.php");
 if(isset($_POST["btn_submit"]))
 {
	 $userName=$_POST["txt_name"];
	 $userGender=$_POST["txt_gender"];
	 $userContact=$_POST["txt_contact"];
	 $userEmail=$_POST["txt_email"];
	 $userUname=$_POST["txt_username"];
	 $userPlace=$_POST["ddl_place"];
	 
	 
	 $photo=$_FILES["photo"]["name"];
	 $temp=$_FILES["photo"]["tmp_name"];
	 move_uploaded_file($temp,"../Assets/Files/UserPhoto/".$photo);
	 
	 $userPassword=$_POST["txt_password"];
	 $userAddres=$_POST["txt_address"];
	 $insQry="insert into tbl_user(user_name,user_gender,user_contact,user_email,user_username,place_id,photo,user_password,user_address)values('".$userName."','".$userGender."','".$userContact."','".$userEmail."','".$userUname."','".$userPlace."','".$photo."','".$userPassword."','".$userAddres."')";
	 
	 if($conn->query($insQry))
	 {
		 //Email Code Start
		$mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'juicepantry608@gmail.com'; // Your gmail
    $mail->Password = 'piopanbgnhhatgue'; // Your gmail app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
  
    $mail->setFrom('juicepantry608@gmail.com'); // Your gmail
  
    $mail->addAddress($userEmail);
  
    $mail->isHTML(true);
  
    $mail->Subject = "Welcome to Malanad Juice Plantation";
    $mail->Body = "Hello " .$userName.",thank you for choosing Malanad Juice.Your registration is successfull .Allways gratefull to receive your profile. We always work for the best to provide customers with only the best.Thank you ";
  if($mail->send())
  {
    echo "Sended";
  }
  else
  {
    echo "Failed";
  }
  //Email Code End
		 
 ?>
		 <script>
		 		alert("data inserted");
				window.location("Newuser.php");
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("data insertion failed");
				window.location("Newuser.php");
		</script>
 <?php
	 }
	}
   ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newuser</title>
</head>

<body>

<form action="" method="post" enctype="multipart/form-data" name="form2" id="form2">
<br /><br /><br /><br />
<h1 align="center">Register</h1>
    <p  align="center">Please fill in this form to create an account.</p>
  <table width="200" border="0" align="center">
    <tr>
      <td>Name</td>
      <td><label for="txt_name"></label>
     
      <input type="text" name="txt_name" id="txt_name"  required/></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="txt_gender" id="btn_gender" value="male" checked="checked"/>
      Male
        <input type="radio" name="txt_gender" id="btn_gender2" value="female" />
      <label for="btn_gender2"></label>        <label for="btn_gender">Female</label></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txt_contact"></label>
      <input type="text" name="txt_contact" id="txt_contact" reqired pattern="([0-9]{10,10})"/></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" required autocomplete="off" onChange="emailval(this),CheckEmail(this.value)" />
      <span id="content"></span><small id="em"></small></td>
    </tr>
    <tr>
      <td>Username</td>
      <td><label for="txt_username"></label>
      <input type="text" name="txt_username" id="txt_username" /></td>
    </tr>
    
      <td>District</td>
      <td><select name="ddl_district" id="ddl_district" onChange="getPlace(this.value)">
      
      <option value="">---select---</option>
      <?php
      $selQry="select * from tbl_district";
	  $row=$conn->query($selQry);
		while($data=$row->fetch_assoc())
		{
				
      ?>
 <option value="<?php echo $data["district_id"]?>">
 <?php echo $data["district_name"]?>
 </option>
 		
       <?php
		}
		?>
            
	  
      </select></td>
      
      
      
     
    </tr>
    <tr>
      <td height="47">Place</td>
      <td><select name="ddl_place" id="ddl_place" >
      
     
      <option value="">---select---</option>
    
            
	  
      </select></td>
      
      
      
      

    </tr>
    <tr>
      <td height="47">Photo</td>
      <td><input type="file" name="photo" id="photo" /></td>
    
    </tr>
    
    <tr>
      <td>Password</td>
      <td><label for="txt_password"></label>
      <input type="password" name="txt_password" id="txt_password" required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"   />
      <span id="pass"></span></td>
      <tr>
      <td>Confirm Password</td>
      <td><label for="txt_password"></label>
      <input type="password" name="txt_cpassword" id="txt_cpassword" required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  onchange="chkpwd(this,txt_password)" />
      <span id="pass"></span></td>
      </tr>
    
    
    <tr>
      <td>Address</td>
      <td><label for="txtarea_address"></label>
      <textarea name="txt_address" id="txt_address" cols="45" rows="5" required ></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="submit" />
      <label for="btn_submit">
        <input type="reset" name="btn_cancel" id="btn_cancel" value="cancel" />
      </label></td>
    </tr>
     <p align="center"> Already have an account? <a href="Login.php">Sign in</a></p>
  </table>
</form>
</body>

<script src="../Assets/Jquery/jQuery.js"></script>
<script>
function getPlace(did)
{

	$.ajax({
	  url:"../Assets/AjaxPages/AjaxPlace.php?did="+did,
	  success: function(html){
		$("#ddl_place").html(html);
	  }
	});
}
function CheckEmail(did)
{
	$.ajax({
		url:"../Assets/AjaxPages/AjaxCheckEmail.php?did="+did,
		success: function(html){
			document.getElementById("em").innerHTML=html;
		}
	});
}

function chkpwd(txtrp, txtp)
{
	if((txtrp.value)!=(txtp.value))
	{
		document.getElementById("pass").innerHTML = "<span style='color: red;'>Passwords Mismatch</span>";
	}
}

function checknum(elem)
{
	var numericExpression = /^[0-9]{8,10}$/;
	if(elem.value.match(numericExpression))
	{
		document.getElementById("contact").innerHTML = "";
		return true;
	}
	else
	{
		document.getElementById("contact").innerHTML = "<span style='color: red;'>Numbers Only Allowed</span>";
		elem.focus();
		return false;
	}
}



function emailval(elem)
{
	var emailexp=/^([a-zA-Z0-9.\_\-])+\@([a-zA-Z0-9.\_\-])+\.([a-zA-Z]{2,4})$/;
	if(elem.value.match(emailexp))
	{
		document.getElementById("content").innerHTML = "";
		return true;
	}
	else
	{
		
		document.getElementById("content").innerHTML ="<span style='color: red;'>Check Email Address Entered</span>";;
		elem.focus();
		return false;
	}
}
function nameval(elem)
{
	var emailexp=/^([A-Za-z ]*)$/;
	if(elem.value.match(emailexp))
	{
		document.getElementById("name").innerHTML = "";
		return true;
	}
	else
	{
		
		document.getElementById("name").innerHTML = "<span style='color: red;'>Alphabets Are Allowed</span>";
		elem.focus();
		return false;
	}
}
</script>




</html>





<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<?php 
include("Foot.php");
ob_flush();
?>