
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	
require'../Assets/phpMail/src/Exception.php';
require '../Assets/phpMail/src/PHPMailer.php';
require '../Assets/phpMail/src/SMTP.php';
session_start();
include("../Assets/Connection/Connection.php");


if(isset($_GET["aid"]))
{
	$upQry="update tbl_user set user_status='1' where user_id='".$_GET["aid"]."'";
	if($conn->query($upQry))
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
  
    $mail->addAddress($_GET["user"]);
  
    $mail->isHTML(true);
  
    $mail->Subject = "Welcome to Malanad Juice Plantation";
    $mail->Body = "Hello " .$_GET["name"].",thank you for choosing Malanad Juice.You are accepted.Thank you ";
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
		 		alert("Accepted");
				window.location("Userlist.php");
		</script>
 <?php
	}
	else
	{
		 ?>
		 <script>
		 		alert("Failed");
				window.location("Userlist.php");
		</script>
 <?php
	}
}

?>





<?php

if(isset($_GET["rid"]))
{
	$upQry="update tbl_user set user_status='2' where user_id='".$_GET["rid"]."'";
	if($conn->query($upQry))
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
  
    $mail->addAddress($_GET["user"]);
  
    $mail->isHTML(true);
  
    $mail->Subject = "Welcome to Malanad Juice Plantation";
    $mail->Body = "Hello " .$_GET["name"].",thank you for choosing Malanad Juice.Unfortunateely your registration is rejected.sorry for the inconvenience.Thank you ";
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
		 		alert("Rejected");
				window.location("Userlist.php");
		</script>
 <?php
	}
	else
	{
		 ?>
		 <script>
		 		alert("Failed");
				window.location("Userlist.php");
		</script>
 <?php
	}
}

?>





<a href="HomePage.php">Home</a>

<?php
ob_start();
include("Head.php");
?>
<table border="1" align="center" width="50%">
 <tr>
		<td>SI NO</td>
        <td>Name</td>
        <td>Contact</td>
        <td>Username</td>
        <td>Place</td>
        <td>District</td>
        <td>Address</td>
        <td>Photo</td>
		<td>Action</td>
		
        
        
 </tr>
 <?php
		$selQry="select * from tbl_user u inner join tbl_place p on u.place_id=p.place_id inner join tbl_district d on        
		 p.district_id=d.district_id where user_status='0'";
		$row=$conn->query($selQry);
		$i=0;
		while($data=$row->fetch_assoc())
		{
				$i++;
 ?>
 		<tr>
        	<td><?php echo $i?></td>
            <td><?php echo $data["user_name"]?></td>
            <td><?php echo $data["user_contact"]?></td>
            <td><?php echo $data["user_username"]?></td>
            <td><?php echo $data["place_name"]?></td>
            <td><?php echo $data["district_name"]?></td>
            <td><?php echo $data["user_address"]?></td>
            <td><img src="..//Assets/Files/UserPhoto/<?php echo $data["photo"];?>" width="120" height="120"/></td>
             <td><a href="Userlist.php?aid=<?php echo $data["user_id"]?>&user=<?php echo $data["user_email"]?>&name=<?php echo $data["user_name"]?>">Accept</a></td>
    <td><a href="Userlist.php?rid=<?php echo $data["user_id"]?>&user=<?php echo $data["user_email"]?>&name=<?php echo $data["user_name"]?>">Reject</a></td>
		</tr>
            
            
           
            
             
            
			
 <?php
		}
 ?>
 </table>
 
  <?php
include("Foot.php");
ob_flush();
?>
     
            






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Userlist</title>
</head>

<body>
</body>
</html>