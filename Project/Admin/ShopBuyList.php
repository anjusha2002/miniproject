<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	session_start();
	ob_start();
include("Head.php");
	include("../Assets/Connection/Connection.php");
	?>
<form id="form1" name="form1" method="post" action="">
  <table border="1" align="center" cellpadding="10">
    <tr>
      <td>Sl.No</td>
      <td>Product Name</td>
      <td>Image</td>
      <td>Quantity</td>
      <td>Status</td>
    </tr>
    <?php
	$sel="select * from tbl_booking b inner join tbl_cart c on c.booking_id=b.booking_id inner join tbl_product p on p.product_id=c.product_id where b.shop_id='".$_SESSION["shopid"]."'";
	$i=0;
	$row=$conn->query($sel);
	while($data=$row->fetch_assoc())
	{
		$i++;
	?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $data["product_name"]?></td>
      <td><img src="../Assets/Files/ProductPhoto/<?php echo $data["product_photo"]?>"  width="150" height="150"/></td>
      <td><?php echo $data["cart_qty"]?></td>
      <td><?php 
	  if($data["booking_status"]==1)
	  {
		  echo "Payment Completed";?>
          <?php
	  }
	  else if($data["booking_status"]==0)
	  {
	  echo "Booking Completed";
	  }
	  else
	  {
		  echo "Rejected";
	  }
      ?></td>
    </tr>
    <?php
	}
	include("Foot.php");
ob_flush();
	?>
  </table>
</form>
</body>
</html>