




<?php

include("../Assets/Connection/Connection.php");
 if(isset($_POST["btn_save"]))
 {
	 $Quantity=$_POST["txt_quantity"];
	 $insQry="insert into tbl_quantity(quantity_content)values('".$Quantity."')";
	 
	 if($conn->query($insQry))
	 {
 ?>
		 <script>
		 		alert("data inserted");
				window.location("JuiceQuantity.php");
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("data insertion failed");
				window.location("JuiceQuantity.php");
		</script>
 <?php
	 }
	}
   
  
if(isset($_GET["delID"]))
 {
	 $delQry="delete from tbl_quantity where quantity_id='".$_GET["delID"]."'";
	 
	 if($conn->query($delQry))
	 {
 ?>
		 <script>
		 		alert("data deleted");
				window.location="Juicequantity.php";
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("deletion failed");
				window.location="Juicequantity.php";
		</script>
 <?php
	 }
	}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JuiceQuantity</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="200" border="1" align="center">
  <tr>
    <td>Quantity</td>
    <td>
      <label for="txt_quantity"></label>
      
      <input type="text" name="txt_quantity" id="txt_quantity" />
      
    </td>
  </tr>
  
  <tr>
    <td colspan="2"><input type="submit" name="btn_save" id="btn_save" value="submit" /></td>
    </tr>
</table>
</form>
</body>
</html><br>
<table border="1" align="center">
 <tr>
		<td>SI NO</td>
        <td>Quantity Content</td>
		<td>Action</td>
 </tr>
 <?php
		$selQry="select * from tbl_quantity";
		$row=$conn->query($selQry);
		$i=0;
		while($data=$row->fetch_assoc())
		{
				$i++;
 ?>
 		<tr>
        	<td><?php echo $i?></td>
            <td><?php echo $data["quantity_content"]?></td>
			<td><a href="JuiceQuantity.php?delID=<?php echo $data["quantity_id"]?>">Delete</a><td>
		</tr>
 <?php
		}
 ?>
 </table>
            
