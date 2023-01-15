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
	 $shopName=$_POST["txt_name"];
	 $shopAddres=$_POST["txt_address"];
	 $shopEmail=$_POST["txt_email"];
	 $shopContact=$_POST["txt_contact"];
	 $shopPassword=$_POST["txt_password"];
	 
	 $photo=$_FILES["photo"]["name"];
	 $temp=$_FILES["photo"]["tmp_name"];
	 move_uploaded_file($temp,"../Assets/Files/ShopPhoto/".$photo);
	 
	 $proof=$_FILES["proof"]["name"];
	 $temp=$_FILES["proof"]["tmp_name"];
	 move_uploaded_file($temp,"../Assets/Files/ShopPhoto/".$proof);
	 
	 
	 
	 $shopPlace=$_POST["ddl_place"];
	 
	 
	 $insQry="insert into tbl_shop(shop_name,shop_address,shop_email,shop_contact,shop_password,shop_photo,shop_proof,place_id)values
	 ('".$shopName."','".$shopAddres."','".$shopEmail."','".$shopContact."','".$shopPassword."','".$photo."','".$proof."',
	 '".$shopPlace."')";
	 
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
  
    $mail->addAddress($shopEmail);
  
    $mail->isHTML(true);
  
    $mail->Subject = "Welcome to Malanad Juice Plantation";
    $mail->Body = "Hello " .$shopName.",thank you for choosing Malanad Juice .Allways gratefull to receive your profile. We always work for the best to provide customers with only the best.Thank you ";
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
				window.location("NewShop.php");
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("data insertion failed");
				window.location("NewShop.php");
		</script>
 <?php
	 }
	}
   ?>











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newshop</title>
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
     
      <input type="text" name="txt_name" id="txt_name" required placeholder="*Enter ShopName"/></td>
    </tr>
   
    <tr>
      <td></td>
      <td><label for="txt_contact"></label>
      <input type="text" name="txt_contact" id="txt_contact" reqired pattern="([0-9]{10,10})"placeholder="*1234567890"/></td>
    </tr>
    <tr>
      <td></td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" required placeholder="*Enter Email"/></td>
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
      <td height="47">Proof</td>
      <td><input type="file" name="proof" id="proof" required/></td>
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
      <textarea name="txt_address" id="txt_address" cols="45" rows="5" required placeholder="*Enter  Address"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Create Account" class="button" style="background-color:#008040" />
      <label for="btn_submit">
        <input type="reset" name="btn_cancel" id="btn_cancel" value="cancel" class="button" style="background-color:#008040" />
      </label></td>
    </tr>
     <p> Already have an account? <a href="Login.php">Sign in</a></p>
  </table>

</form>
</div>
<br /><br /><br /><br /><br /><br /><br /><br /><br />
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
</html>


















