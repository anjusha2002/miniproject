<?php

include("../Assets/Connection/Connection.php");
 if(isset($_POST["btn_save"]))
 {
	 $District=$_POST["txt_district"];
	 $insQry="insert into tbl_category(category_name)values('".$District."')";
	 
	 if($conn->query($insQry))
	 {
 ?>
		 <script>
		 		alert("data inserted");
				window.location("JuiceCategory.php");
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("data insertion failed");
				window.location("JuiceCategory.php");
		</script>
 <?php
	 }
	}
   
  
if(isset($_GET["delID"]))
 {
	 $delQry="delete from tbl_category where category_id='".$_GET["delID"]."'";
	 
	 if($conn->query($delQry))
	 {
 ?>
		 <script>
		 		alert("data deleted");
				window.location="JuiceCategory.php";
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("deletion failed");
				window.location="JuiceCategory.php";
		</script>
 <?php
	 }
	}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JuiceCategory</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="200" border="1" align="center">
  <tr>
    <td>Category</td>
    <td>
      <label for="txt_district"></label>
      
      <input type="text" name="txt_district" id="txt_district" />
      
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
        <td>Category Name</td>
		<td>Action</td>
 </tr>
 <?php
		$selQry="select * from tbl_category";
		$row=$conn->query($selQry);
		$i=0;
		while($data=$row->fetch_assoc())
		{
				$i++;
 ?>
 		<tr>
        	<td><?php echo $i?></td>
            <td><?php echo $data["category_name"]?></td>
			<td><a href="District.php?delID=<?php echo $data["category_id"]?>">Delete</a><td>
		</tr>
 <?php
		}
 ?>
 </table>
            