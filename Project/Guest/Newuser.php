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
    $mail->Password = 'xkmaxuzsdxaqiyyc'; // Your gmail app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
  
    $mail->setFrom('juicepantry608@gmail.com'); // Your gmail
  
    $mail->addAddress($userEmail);
  
    $mail->isHTML(true);
  
    $mail->Subject = "Welcome to Malanad Juice Plantation";
    $mail->Body = "Hello " .$userName.",thank you for choosing Malanad Juice .Allways gratefull to receive your profile. We always work for the best to provide customers with only the best.Thank you ";
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
<style>
.button {
    position: bottom;
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









<br /><br /><br />
<div id="tab" align="center">
<form action="" method="post" enctype="multipart/form-data" name="form2" id="form2">
<br />
&nbsp;&nbsp;<h5 align="left">Juice Pantry</h5>
<h1><b>REGISTRATION</b></h1><br />
    <p>Please fill in this form to create an account.</p>
  <table width="200" border="0" align="center">
  
  
  
    <tr>
      <td></td>
      <td><label for="txt_name"></label>
      <input type="text" name="txt_name"  id="txt_name" required autocomplete="off" title="Name Allows Only Alphabets,Spaces and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$" onChange="nameval(this)"placeholder="*Enter your Name"  />
      <span id="name"></span></td>
    </tr>
    
    
    
    
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="txt_gender" id="btn_gender" value="male" checked="checked"/>
      Male
        <input type="radio" name="txt_gender" id="btn_gender2" value="female" />
      <label for="btn_gender2"></label>        <label for="btn_gender">Female</label></td>
    </tr>
    
   
    
   <tr>
      <td></td>
      <td><label for="txt_contact"></label>
      <input type="text" name="txt_contact" id="txt_contact" required autocomplete="off"  
                title="Phone number with 7-9 and remaing 9 digit with 0-9" pattern="[7-9]{1}[0-9]{9}" onChange="checknum(this),CheckContact(this.value)" placeholder="*1234567890"/>
                <span id="contact"></span><small id="co"></small></td>
    </tr>
    
    
    
    <tr>
      <td></td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" required autocomplete="off" onChange="emailval(this),CheckEmail(this.value)" placeholder="*Enter your Email"/>
      <span id="content"></span><small id="em"></small></td>
    </tr>
    <tr>
      <td></td>

      <td><label for="txt_username"></label>
      <input type="text" name="txt_username" id="txt_username" required autocomplete="off" title="Username Allows Only Alphabets and numbers,alphabets should be small letters" pattern="^[a-z]+[0-9a-z ]*$" onChange="usernameval(this),CheckUsername(this.value)"placeholder="*Enter your Username"/>
      <span id="username"></span><small id="us"></small></td>
    </tr>
    
      <td></td>
      <td><select name="ddl_district" id="ddl_district" onChange="getPlace(this.value)">
      
      <option value="">*Enter District</option>
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
      <td height="47"></td>
      <td><select name="ddl_place" id="ddl_place" >
      
     
      <option value="">*Enter Place</option>
    
            
	  
      </select></td>
      
      
      
      

    </tr>
    <tr>
      <td height="47">Photo</td>
      <td><input type="file" name="photo" id="photo" /></td>
    
    </tr>
    
    <tr>
      <td></td>
      <td><label for="txt_password"></label>
      <input type="password" name="txt_password" id="txt_password" required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  placeholder="*Enter Password" />
      <span id="pass"></span></td>
      <tr>
      <td></td>
      <td><label for="txt_password"></label>
      <input type="password" name="txt_cpassword" id="txt_cpassword" required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  onchange="chkpwd(this,txt_password)" placeholder="*Confirm Password"/>
      <span id="pass"></span></td>
      </tr>
    
    
    <tr>
      <td></td>
      <td><label for="txtarea_address"></label>
      <textarea name="txt_address" id="txt_address" cols="45" rows="5" required placeholder="*Enter Address"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Create Account" class="button" style="background-color:#008040"  />
      <label for="btn_submit">
        <input type="reset" name="btn_cancel" id="btn_cancel" value="cancel" class="button" style="background-color:#008040"  />
      </label></td>
    </tr>
    <p> Already have an account? <a href="Login.php">Sign in</a></p>
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
function CheckContact(did)
{
	$.ajax({
		url:"../Assets/AjaxPages/AjaxCheckContact.php?did="+did,
		success: function(html){
			document.getElementById("co").innerHTML=html;
		}
	});
}
function CheckUsername(did)
{
	$.ajax({
		url:"../Assets/AjaxPages/AjaxCheckUsername.php?did="+did,
		success: function(html){
			document.getElementById("us").innerHTML=html;
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





<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<?php 
include("Foot.php");
ob_flush();
?>