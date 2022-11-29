<?php
session_start();

			include("../Assets/Connection/Connection.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<a href="HomePage.php">Home</a>
 <?php
 ob_start();
include("Head.php");
?>


<form id="form1" name="form1" method="post" action="">
 <center> <table width="703" height="302" border="1">
    <tr>
      <th width="45" scope="col">Sl No</th>
      <th width="131" scope="col">Name Of Shop</th>
       
      <th width="163" scope="col">Complaint Subject</th>
      
      <th width="219" scope="col">Complaint Description</th>
      <th width="111" scope="col">Action</th>
    </tr>
     <?php
	$selectQry="select * from tbl_complaint c inner join tbl_shop u on c.shop_id=u.shop_id  where complaint_status='0'";
	$row=$conn->query($selectQry);
	$i=0;
	while($data=$row->fetch_assoc())
	{
	$i++;
	?>
    <tr>
      <td><?php echo $i ?></td>
      <td><?php echo $data["shop_name"] ?></td>
      <td><?php echo $data["complaint_subject"] ?></td>
      <td><?php echo $data["complaint_details"] ?></td>
      <td><a href="ComplaintReply.php?compID=<?php echo $data["complaint_id"]?>">Reply</a></td> </tr> 
    </tr>
    <?php
	}
	?>
  </table>
  </center>
</form>

<?php
include("Foot.php");
ob_flush();
?>
<p>&nbsp;</p>
</body>
</html>



















<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UserComplaintReplay</title>
</head>

<body>
</body>
</html>