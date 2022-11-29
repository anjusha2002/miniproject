<?php
include("../Connection/Connection.php");
?>

<table align="center" cellpadding="60">
  <tr>
  <?php
  $selQry="select * from tbl_product p inner join tbl_category c on p.category_id=c.category_id inner join tbl_quantity q on p.quantity_id
		=q.quantity_id  where true ";
  if($_GET["cid"]!=null)
  {
	  $selQry.=" and p.category_id='".$_GET["cid"]."'";
  }
  if($_GET["qid"]!=null)
  {
	  $selQry.=" and p.quantity_id='".$_GET["qid"]."'";
  }
 
  $row=$conn->query($selQry);
  $i=0;
  while($data=$row->fetch_assoc())
  {
	  $i++;
  ?>
  <td><p><img src="../Assets/Files/ProductPhoto/<?php echo $data["product_photo"]?>" width="200" height="200" /><br /></p>
  Name :<b><?php echo $data["product_name"]?></b><br />
  Category :<b><?php echo $data["category_name"]?></b><br />
  Quantity :<b><?php echo $data["quantity_content"]?></b><br />
  ProductDetails :<b><?php echo $data["product_details"]?></b><br />
  <a  href="ViewProductDetails.php?cartID=<?php echo $data["product_id"]?>">AddToCart</a><br /></td>
  <?php
  if($i==4)
  {
	  echo "</tr>";
	  $i=0;
	  echo "<tr>";
  }
  }
  ?>
  </table>
