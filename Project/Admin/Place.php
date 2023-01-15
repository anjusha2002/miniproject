<?php
session_start();
include("../Assets/Connection/Connection.php");
 if(isset($_POST["btn_submit"]))
 {
	 $Place=$_POST["txt_name"];
	 $Pincode=$_POST["txt_pincode"];
	 $districtid=$_POST["ddl_district"];
	 
	 $seld="select * from tbl_place where district_name='".$Place."'";
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
         
	 $insQry="insert into tbl_place(place_name,place_pincode,district_id)values('".$Place."','".$Pincode."','".$districtid."')";
	 
	 if($conn->query($insQry))
	 {
 ?>
		 <script>
		 		alert("data inserted");
				window.location("Place.php");
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("data insertion failed");
				window.location("Place.php");
		</script>
 <?php
	 }
	}
 }
   
 ?>
 <?php
 if(isset($_GET["delID"]))
 {
	 $delQry="delete from tbl_place where place_id='".$_GET["delID"]."'";
	 
	 if($conn->query($delQry))
	 {
 ?>
		 <script>
		 		alert("data deleted");
				window.location="Place.php";
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("deletion failed");
				window.location="Place.php";
		</script>
 <?php
	 }
	}
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Place</title>
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
<a href="HomePage.php">Home</a><br />

<?php
ob_start();
include("Head.php");
?>

<form id="form1" name="form1" method="post" action="">
  <table width="233" border="0" align="center">
    <tr>
      <td>District</td>
      <td><select name="ddl_district" id="ddl_district">
      <option value="">---select---</option>
      <?php
      $selQry="select * from tbl_district";
	  $row=$conn->query($selQry);
		while($data=$row->fetch_assoc())
		{
				
      ?>
 <option value="<?php echo $data["district_id"]?>">
 <?php echo $data["district_name"]?>
 </option>
 		
       <?php
		}
		?>
            
	  
      </select></td>
    </tr>
    <tr>
      <td width="165">Place</td>
      <td width="52"><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" required/></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td><label for="txt_pincode"></label>
      <input type="text" name="txt_pincode" id="txt_pincode" required/></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" style="background-color:#008040" class="button" /></td>
    </tr>
  </table>
  
</form>
</body>
</html><br />

<table border="1" align="center">
 <tr>
		<td>SI NO</td>
        <td>Place name</td>
        <td>Pincode</td>
        <td>District</td>
		<td>Action</td>
 </tr>
 <?php
		$selQry="select * from tbl_place p inner join tbl_district d on         p.district_id=d.district_id";
		$row=$conn->query($selQry);
		$i=0;
		while($data=$row->fetch_assoc())
		{
				$i++;
 ?>
 		<tr>
        	<td><?php echo $i?></td>
            <td><?php echo $data["place_name"]?></td>
            <td><?php echo $data["place_pincode"]?></td>
            <td><?php echo $data["district_name"]?></td>
            
			<td><a href="Place.php?delID=<?php echo $data["place_id"]?>"><i class='fas fa-trash' style='font-size:24px;color:red'></i></a><td>
		</tr>
 <?php
		}
 ?>
 </table>
  <?php
include("Foot.php");
ob_flush();
?>
            