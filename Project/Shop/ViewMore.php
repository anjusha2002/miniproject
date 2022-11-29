<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ViewProductDetails</title>
</head>
<body>
<?php
session_start();

include("../Assets/Connection/Connection.php");


  
  
  
$selQry="select * from tbl_product p inner join tbl_category c on p.category_id=c.category_id inner join tbl_quantity q on p.quantity_id
		=q.quantity_id inner join tbl_stock s on s.product_id = p.product_id  where p.product_id='".$_GET["pid"]."'";	
		$row=$conn->query($selQry);
		if($data=$row->fetch_assoc())
		{
			$price=$data["product_mrp"];
?>
<p><a href="HomePage.php"> Home</a></p>
<?php
ob_start();
include("Head.php");
?>

<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1" align="center">
    <tr>
      <td>ProductName</td>
      <td><?php echo $data["product_name"]?></td>
    </tr>
    <tr>
      <td>Category</td>
      <td><?php echo $data["category_name"]?></td>
    </tr>
    <tr>
      <td>ProductDetails</td>
      <td><?php echo $data["product_details"]?></td>
    </tr>
    <tr>
      <td>ProductPrice</td>
      <td><?php echo $data["product_mrp"]?></td>
    </tr>
     <tr>
      <td>Stock</td>
      <td><?php echo $data["stock_quantity"]?></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><img src="..//Assets/Files/ProductPhoto/<?php echo $data["product_photo"];?>" width="120" height="120"/></td>
    </tr>
                                        
    
  </table>
  </form>
  <?php
		}
		?>
</form>

<?php
include("Foot.php");
ob_flush();
?>

</body>
</html>


