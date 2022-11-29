<?php
session_start();

		ob_start();
include("Head.php");

include("../Assets/Connection/Connection.php");
if(isset($_POST["btn_submit"]))
{
	    
		$stockQ=$_POST["txt_stock"];
		$stockM=$_POST["txt_mfgdate"];
		$stockE=$_POST["txt_mfgdate"];
		$insQry="insert into tbl_stock(product_id,stock_quantity,mfg_date,exp_date,stock_date)
		values('".$_GET["add"]."','$stockQ','$stockM','$stockE','curdate()')";
		
		 if($conn->query($insQry))
	 		{
				
 ?>
		 <script>
		 		alert("data inserted");
				window.location("AddStock.php");
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("data insertion failed");
				window.location("AddStock.php");
		</script>
<?php
	 }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AddStock</title>
</head>

<body>
<a href="HomePage.php">Home</a>
<form id="form1" name="form1" method="post" action="">

<table width="200" border="1" align="center">
  
    <td>Stock</td>
    <td><label for="txt_stock"></label>
      <input type="text" name="txt_stock" id="txt_stock" /></td>
  </tr>
    <tr>
      <td>Mfg date</td>
      <td><label for="txt_date"></label>
      <input type="date" name="txt_mfgdate" id="txt_date" /></td>
    </tr>
    <tr>
    <td>Exp date</td>
    <td><label for="txt_date"></label>
      <input type="date" name="txt_expdate" id="txt_date" /></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
      <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" /></td>
    </tr>
</table> 
</form>
</body>
</html><br />
	
<table border="1" cellpadding="10"  align="center">
    <tr>
      <th>Si No</th>
      <th>ProductName</th>
      <th>Quantity</th>
      
      <th>stockDate</th>
      <th>Action</th>
    </tr>



<?php  

  $selqry="select * from tbl_stock s inner join tbl_product p on s.product_id=p.product_id ";
  $rows=$conn->query($selqry);
  $i=0;
  while($data=$rows->fetch_assoc())
	{
		$i++;
		
?>  
      <tr>
        <td><?php echo $i?></td>
        <td><?php echo $data["product_name"]?></td>
        <td><?php echo $data["stock_quantity"]?></td>
        <td><?php echo $data["stock_date"]?></td>
       
       
        
        <td><a href="AddStock.php?did=<?php echo $data["stock_id"]?>"><i class='fas fa-trash' style='font-size:24px;color:red'></i></a></td> 
     </tr>
     </table>
     
     
	 <?php
	}
	include("Foot.php");
ob_flush();
 
   ?>      


