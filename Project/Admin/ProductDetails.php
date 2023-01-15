<?php
session_start();

include("../Assets/Connection/Connection.php");
 if(isset($_POST["btn_submit"]))
 {
	 $category=$_POST["ddl_category"];
	 $quantity=$_POST["ddl_quantity"];
	 $productName=$_POST["txt_name"];
	 $productDetails=$_POST["txt_details"];
	 
	 $pdtphoto=$_FILES["photo"]["name"];
	 $temp=$_FILES["photo"]["tmp_name"];
	 move_uploaded_file($temp,"../Assets/Files/ProductPhoto/".$pdtphoto);
	 
	 $productMrp=$_POST["txt_priceMrp"];
	 
	 $productWholesaleprice=$_POST["txt_priceWholesale"];
	 
	
	 
	$insQry="insert into tbl_product(product_name,category_id,quantity_id,product_details,product_photo,product_mrp,product_wholesaleprice,product_stock)values
	 ('".$productName."','".$category."','".$quantity."','".$productDetails."','".$pdtphoto."','".$productMrp."','".$productWholesaleprice."')";
	 
	 if($conn->query($insQry))
	 {
 ?>
		 <script>
		 		alert("data inserted");
				window.location("ProductDetails.php");
		</script>
 <?php
	 }
	 else
	 {
?>
		 <script>
		 		alert("data insertion failed");
				window.location("ProductDetails.php");
		</script>
 <?php
	 }
	}
   ?>











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ProductDetails</title>
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
<p><a href="HomePage.php">Home</a></p>
<?php
ob_start();
include("Head.php");
?>
<form action="" method="post" enctype="multipart/form-data" name="form2" id="form2">
  <table width="200" border="0" align="center">
    <tr>
      <td>ProductName</td>
      <td><label for="txt_name"></label>
     
      <input type="text" name="txt_name" id="txt_name" /></td><br>
    </tr>
   
    
    
      <td>Category</td>
      <td><select name="ddl_category" id="ddl_category" onChange="getcategory(this.value)">
      
      <option value="">---select---</option>
      <?php
      $selQry="select * from tbl_category";
	  $row=$conn->query($selQry);
		while($data=$row->fetch_assoc())
		{
				
      ?>
 <option value="<?php echo $data["category_id"]?>">
 <?php echo $data["category_name"]?>
 </option>
 		
       <?php
		}
		?>
            
	  </select></td>
      
    </tr>  
    <tr>
        <td>Quantity</td>
              <td><select name="ddl_quantity" id="ddl_quantity" onChange="getquantity(this.value)">
      
      <option value="">---select---</option>
      <?php
      $selQry="select * from tbl_quantity";
	  $row=$conn->query($selQry);
		while($data=$row->fetch_assoc())
		{
				
      ?>
 <option value="<?php echo $data["quantity_id"]?>">
 <?php echo $data["quantity_content"]?>
 </option>
 		
       <?php
		}
		?>
            
	  </select></td>

        
        
        
      </tr>
    <tr>
      <td>ProductDetails</td>
      <td><label for="txtarea_details"></label>
     
      <textarea name="txt_details" name="txt_details" id="txt_details" cols="45" rows="5"></textarea></td>
    </tr>

      
      
      
      
    
    
    <tr>
      <td height="47">photo</td>
      <td><input type="file" name="photo" id="pdtphoto" /></td>
    
    </tr>
    
    <tr>
      <td>ProductMrp</td>
      <td><label for="txt_password"></label>
      <input type="text" name="txt_priceMrp" id="txt_price" />
      </td>
    </tr>
    
    <tr>
      <td>ProductWholesaleprice</td>
      <td><label for="txt_password"></label>
      <input type="text" name="txt_priceWholesale" id="txt_price" />
      </td>
    </tr>
    
    


    
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="submit" style="background-color:#008040" class="button" />
      <label for="btn_submit">
        <input type="reset" name="btn_cancel" id="btn_cancel" value="cancel" style="background-color:#008040" class="button" />
      </label></td>
    </tr>
  </table>
</form>

 <?php
include("Foot.php");
ob_flush();
?>

</body>



</html>





