<?php
session_start();

include("../Assets/Connection/Connection.php");
?>

<a href="HomePage.php">Home</a>

<?php
ob_start();
include("Head.php");
?>
<table border="1" align="center">
 <tr>
		<td>SI NO</td>
        <td>ProductName</td>
        <td>Category</td>
        <td>Quantity</td>
        
        <td>ProductMrp</td>
       
        
        <td>Photo</td>
        <td>Action</td>
        
                		
 </tr>
 <?php
		$selQry="select * from tbl_product p inner join tbl_category c on p.category_id=c.category_id inner join tbl_quantity q on        
		 p.quantity_id=q.quantity_id ";

		$row=$conn->query($selQry);

		$i=0;
		while($data=$row->fetch_assoc())
		{
			
				$i++;
 ?>
 		<tr>
        	<td><?php echo $i?></td>
            <td><?php echo $data["product_name"]?></td>
            <td><?php echo $data["category_name"]?></td>
            <td><?php echo $data["quantity_content"]?></td>
            
            <td><?php echo $data["product_mrp"]?></td>
         
            
            
            <td><img src="..//Assets/Files/ProductPhoto/<?php echo $data["product_photo"];?>" width="120" height="120"/></td>
            <td><a href="AddStock.php?add=<?php echo $data["product_id"]?>">AddStock</a></td> 
            <td><a href="ProductRating.php?pid=<?php echo $data["product_id"]?>">ViewRating</a></td>
       
           
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
<title>Productlist</title>
</head>

<body>
</body>
</html>