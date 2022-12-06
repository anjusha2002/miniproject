








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyProfileShop</title>
</head>

<body>
<?php
session_start();
include("../Assets/Connection/Connection.php");
$selQry="select * from tbl_shop u inner join tbl_place p on u.place_id=p.place_id inner join tbl_district d on        
		 p.district_id=d.district_id where shop_id='".$_SESSION["shopid"]."'";
		 $row=$conn->query($selQry);
		 if($data=$row->fetch_assoc())
		 {
?>
<p><a href="HomePage.php"> Home</a></p>

    <?php
	ob_start();
include("Head.php");
?>
<table width="200" border="0" align="center" cellpadding="10">
  <tr>
     <td colspan="2"><img src="../Assets/Files/ShopPhoto/<?php echo $data["shop_photo"];?>" width="150" height="150"/></td>
  </tr>
  
  <tr>
    <td></td>
    <td><?php echo $data["shop_name"]?></td>
  </tr>
  <tr>
    <td></td>
    <td><?php echo $data["shop_contact"]?></td>
  </tr>
  <tr>
    <td></td>
    <td><?php echo $data["shop_email"]?></td>
  </tr>
  <tr>
    <td></td>
    <td><?php echo $data["shop_address"]?></td>
  </tr>
  <tr>
    <td></td>
    <td><?php echo $data["place_name"]?></td>
  </tr>
  <tr>
    <td></td>
    <td><?php echo $data["district_name"]?></td>
  </tr>
</table>

<?php
include("Foot.php");
ob_flush();
		 }
		 ?>
</body>
</html>