<?php
include("../Connection/Connection.php");
$sel="select * from tbl_user where user_email='".$_GET["did"]."'";
$row=$conn->query($sel);
$selb="select * from tbl_shop where shop_email='".$_GET["did"]."'";
$rowb=$conn->query($selb);
if($data=$row->fetch_assoc())
{
	echo "Already Exist";
}
else if($datab=$rowb->fetch_assoc())
{
	echo "Already Exist";
}
else
{
	echo "";
}

		?>
		