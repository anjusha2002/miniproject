<?php
session_start();
include("../Assets/Connection/Connection.php");
 if(isset($_POST["btn_save"]))
 {
	 $District=$_POST["txt_district"];
	 $seld="select * from tbl_district where district_name='".$District."'";
	 $rowd=$conn->query($seld);
	 if($datad=$rowd->fetch_assoc())
	 {
		 ?>
         <script>
		 alert("Already Exist");
		 </script>
         <?php
      
	 }
     else
     {
         
	 $insQry="insert into tbl_district(district_name)values('".$District."')";
	 
	 if($conn->query($insQry))
	 {
 ?>
		 <script>
		 		alert("data inserted");
				window.location("District.php");
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("data insertion failed");
				window.location(District.php");
		</script>
 <?php
	 }
	}
 }
 
   
  
if(isset($_GET["delID"]))
 {
	 $delQry="delete from tbl_district where district_id='".$_GET["delID"]."'";
	 
	 if($conn->query($delQry))
	 {
 ?>
		 <script>
		 		alert("data deleted");
				window.location="District.php";
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("deletion failed");
				window.location="District.php";
		</script>
 <?php
	 }
	}
	
 ?>
 
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>District</title>
<style>
.button {
    position: top;
    top:50%;
   
    color: #fff;
    border:none; 
    border-radius:5px; 
    padding:10px;
    min-height:10px; 
    min-width: 100px;
	transition: 0.7s;
  }
  .button:hover{
	color:#09AC32;  
  }
</style>
</head>

<body>
<?php
ob_start();
include("Head.php");
?>
<form id="form1" name="form1" method="post" action="">
<table width="200" border="0" align="center">
  <tr>
    <td>District</td>
    <td>
      <label for="txt_district"></label>
      
      <input type="text" name="txt_district" id="txt_district" required/>
      
    </td>
  </tr>
  
  <tr>
    <td colspan="2"><input type="submit" name="btn_save" id="btn_save" value="submit" style="background-color:#008040" class="button"  /></td>
    </tr>
</table>
</form>
</body>
</html><br>
<table border="1" align="center">
 <tr>
		<td>SI NO</td>
        <td>District Name</td>
		<td>Action</td>
 </tr>
 <?php
		$selQry="select * from tbl_district";
		$row=$conn->query($selQry);
		$i=0;
		while($data=$row->fetch_assoc())
		{
				$i++;
 ?>
 		<tr>
        	<td><?php echo $i?></td>
            <td><?php echo $data["district_name"]?></td>
			<td><a href="District.php?delID=<?php echo $data["district_id"]?>"><i class='fas fa-trash' style='font-size:24px;color:red'></i></a><td>
		</tr>
 <?php
		}
 ?>
 </table>
            <?php
include("Foot.php");
ob_flush();
?>